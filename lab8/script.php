<?php

    function archive($data) {
        try {
            $DATABASE_HOST = 'localhost';
            $DATABASE_USER = 'root';
            $DATABASE_PASS = '';
            $DATABASE_NAME = 'websyslab8';
            // Try and connect using the info above.
            $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
            $dbconn = new PDO("mysql:host=$DATABASE_HOST;dbname=$DATABASE_NAME", $DATABASE_USER, $DATABASE_PASS);
            if (mysqli_connect_errno()) {
                // If there is an error with the connection, stop the script and display the error.
                header("Location: login.php?error=Failed to connect to MySql: " . mysqli_connect_error());
                exit();
            }

            $stmt = $dbconn->prepare('CREATE TABLE archive (
    type varchar(255),
    name varchar(255) PRIMARY KEY,
    title varchar(255),
    `desc` varchar(255),
    link varchar(255) ); ');
            $stmt->execute();

            $stmt = $dbconn->prepare('INSERT INTO archive (type, name, title, `desc`, link)
values (:type, :name, :title, :desc, :link)');
            foreach ($data as $key_1 => $value) {
                $type = $key_1;
                foreach ($value as $key_2 => $arr_1) {
                    $lec_no = $key_2;
                    $title = $arr_1["Title"];
                    $desc = $arr_1["Desc"];
                    $link = $arr_1["Link"][0];
                    for ($i = 1; $i < count($arr_1["Link"]); $i++) {
                        $link .= ", " . $arr_1["Link"][$i];
                    }

                    $stmt->execute(array(':type' => $type, ':name' => $lec_no, ':title' => $title, ':desc' => $desc, ':link' => $link));
                }
            }
            echo 'Successfully archived courses!';
        } catch (Exception $e) {
            echo '<p class="error">Error: ' . $e->getMessage() . '</p>';
        }
    }

    function unarchive() {
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'websyslab8';
        // Try and connect using the info above.
        $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

        if ( mysqli_connect_errno() ) {
            // If there is an error with the connection, stop the script and display the error.
            header("Location: login.php?error=Failed to connect to MySql: " . mysqli_connect_error());
            exit();
        }

        $stmt = $con->prepare('DROP TABLE IF EXISTS archive');
        $stmt->execute();

        return "Table has been dropped!";


    }

    if (isset($_POST['callFunc1'])) {
        archive($_POST['callFunc1']);
    } else
        if  (isset($_POST['callFunc2'])) {
        echo unarchive();
    }



