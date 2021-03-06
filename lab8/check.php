<!--logic taken from https://codeshack.io/secure-login-system-php-mysql/-->
<?php

session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'websyslab8';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$dbconn = new PDO("mysql:host=$DATABASE_HOST;dbname=$DATABASE_NAME", $DATABASE_USER, $DATABASE_PASS);
if ( mysqli_connect_errno() ) {
    // If there is an error with the connection, stop the script and display the error.
    header("Location: login.php?error=Failed to connect to MySql: " . mysqli_connect_error());
    exit();
}

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
    // Could not get the data that should have been sent.
    header("Location: login.php?error=Please fill both the username and password fields!");
    exit();
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $dbconn->prepare('SELECT id, password FROM users WHERE username = :username')) {
    $stmt->execute(array(":username"=>$_POST['username']));
    // Store the result so we can check if the account exists in the database.
    $stmt->fetch();
    if ($stmt->num_rows > 0) {

        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['password'], $password)) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header("Location: index.php");
        } else {
            // Incorrect password
            header("Location: login.php?error=Incorrect credentials");
            exit();
        }
    } else {
        // Incorrect username
//        echo 'Incorrect username and/or password!';
        header("Location: login.php?error=Incorrect credentials");
        exit();
    }

    // $stmt->close();
}

