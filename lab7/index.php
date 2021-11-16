


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PHP Grade Book Lab 7</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="page-wrap">
    <h1>PHP Grade Book</h1>
    <form method="post" action="index.php" id="form" onsubmit="">
        <h2>Creating tables/columns</h2>
        <input type="submit" name="address" value="Add address fields" />
        <input type="submit" name="sectionyear" value="Add section and year fields to the courses table" />
        <hr/>

        <h2>Inserting data to tables</h2>
        <input type="submit" name="insert_student" value="Add student">
        <span>
            <label><input type="text" name="rin" placeholder="RIN"></label>
            <label><input type="text" name="rcsid" placeholder="RCSID"></label>
            <label><input type="text" name="fname" placeholder="First name"></label>
            <label><input type="text" name="lname" placeholder="Last name"></label>
            <label><input type="text" name="alias" placeholder="Alias"></label>
            <label><input type="text" name="phone" placeholder="Phone number"></label>
            <label><input type="text" name="street" placeholder="Street"></label>
            <label><input type="text" name="city" placeholder="City"></label>
            <label><input type="text" name="state" placeholder="State"></label>
            <label><input type="text" name="zip" placeholder="Zip"></label>
        </span>
        <br/>
        <input type="submit" name="insert_course" value="Add course">
        <span>
            <label><input type="text" name="crn" placeholder="CRN"></label>
            <label><input type="text" name="prefix" placeholder="prefix"></label>
            <label><input type="text" name="number" placeholder="number"></label>
            <label><input type="text" name="title" placeholder="title"></label>
            <label><input type="text" name="section" placeholder="section"></label>
            <label><input type="text" name="year" placeholder="year"></label>
        </span>
        <br/>

        <input type="submit" name="insert_grades" value="Add grade">
        <span>
            <label><input type="text" name="crn" placeholder="crn"></label>
            <label><input type="text" name="rin" placeholder="RIN"></label>
            <label><input type="text" name="grade" placeholder="grade"></label>
        </span>
        <hr/>
        <h2>Displaying data from the tables</h2>
        <input type="submit" name="sort_students_rin" value="View the students table sorted by RIN" />
        <input type="submit" name="sort_students_fname" value="View the students table sorted by first name" />
        <input type="submit" name="sort_students_lname" value="View the students table sorted by last name" />
        <input type="submit" name="sort_students_rcsid" value="View the students table sorted by their RCSID" />
        <input type="submit" name="90" value="Display all students who had at least one grade above a 90" />
        <input type="submit" name="average" value="List out the average grade in each course" />
        <input type="submit" name="count" value="List out the number of students in each course" />


    </form>
</div>
</body>
</html>

<?php
echo '<div id="result">';
echo '<h1> Output: </h1>';
$dbconn = new PDO('mysql:host=localhost;dbname=websyslab7','root','');
$sql = 'SELECT `first name`, `last name` FROM students WHERE rin = :rin';
$pstmt = $dbconn->prepare($sql);

$mysqli = new mysqli('localhost', 'root', '', 'websyslab7');
function print_array($arr1, $arr2) {
    echo '<table><tr>';

    while($row = mysqli_fetch_array($arr1)){
        echo '<th>'. $row['Field']."</th>";
    }
    echo '</tr>';

    for ($i = 1; $i < count($arr2); $i++) {
        echo '<tr>';
        for ($j = 0; $j < count($arr2[$i]); $j++) {
            echo '<td> ' . $arr2[$i][$j] . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
}

if (isset($_POST['address'])) {
    $one = 'ALTER TABLE students ADD street varchar(255), ADD city varchar(255), ADD state varchar(255), ADD zip int(5)';
    $one_stmt = $dbconn->prepare($one);

    $check = $mysqli->query("SHOW COLUMNS FROM `students` LIKE 'street'");
    $exists = (bool)$check->num_rows;
    if($exists) {
        echo '<p class="warning">You have already added this button! No additional columns will be added.</p>';
    } else {
        echo '<p class="output">Columns street, city, state, and zip have been created in the students database.</p>';
        $one_stmt->execute();
    }
}
if (isset($_POST['sectionyear'])) {
    $check = $mysqli->query("SHOW COLUMNS FROM `courses' LIKE `section`");
    $exists = (bool)$check->num_rows;
    if ($exists) {
        echo '<p class="warning">You have already added this button! No additional columns will be added.</p>';
    } else {
        $mysqli->query('ALTER TABLE courses ADD section int, ADD year int)');
        echo '<p class="output">Columns section and year have been added in the students database </p>';
    }
}

if (isset($_POST['insert_course'])) {
    $o1 = $_POST['crn'];
    $o2 = $_POST['prefix'];
    $o3 = $_POST['number'];
    $o4 = $_POST['title'];
    $o5 = $_POST['section'];
    $o6 = $_POST['year'];
    $four = 'INSERT INTO courses (crn, prefix, number, title, section, year) VALUES 
                               (:crn, :prefix, :number_, :title, :section_, :year_)';
    $four_stmt = $dbconn->prepare($four);
    try {
        $four_stmt->execute(array(':crn'=>$o1, ':prefix'=>$o2, ':number_'=>$o3, ':title'=>$o4, ':section_'=>$o5, ':year'=>$o6));
        echo '<p class="output"> done! </p>'; // change this to echo what you inputted
    } catch (Exception $e) {
        echo '<p class="warning"> Warning: ' . $e->getMessage() . '</p>';
    }

}

if (isset($_POST['insert_student'])) {
    $o1 = $_POST['rin'];
    $o2 = $_POST['rcsid'];
    $o3 = $_POST['fname'];
    $o4 = $_POST['lname'];
    $o5 = $_POST['alias'];
    $o6 = $_POST['phone'];
    $o7 = $_POST['street'];
    $o8 = $_POST['city'];
    $o9 = $_POST['state'];
    $o10 = $_POST['zip'];
    $five = 'INSERT INTO students (RIN, RCSID, `first name`, `last name`, alias, phone, street, city, state, zip) VALUES
                                (:rin, :rcsid, :fname, :lname, :alias, :phone, :street, :city, :state_, :zip)';
    $five_stmt = $dbconn->prepare($five);
    try {
        $five_stmt->execute(array(':rin' => $o1, ':rcsid' => $o2, ':fname' => $o3, ':lname' => $o4, ':alias' => $o5, ':phone' => $o6, ':street' => $o7, ':city' => $o8, ':state_' => $o9, ':zip' => $o10));
        echo '<p class="output"> done! </p>'; // change this to echo what you inputted
    } catch (Exception $e) {
        echo '<p class="warning"> Warning: ' . $e->getMessage() . '</p>';
    }
//    }
}

if (isset($_POST['insert_grades'])) {
    $o1 = $_POST['crn'];
    $o2 = $_POST['rin'];
    $o3 = $_POST['grade'];
    $six = 'INSERT INTO grades (crn, RIN, grade) VALUES 
                               (:crn, :RIN, :grade)';
    $six_stmt = $dbconn->prepare($six);
    try {
        $six_stmt->execute(array(':crn'=>$o1, ':RIN'=>$o2, ':grade'=>$o3));
        echo '<p class="output"> done! </p>'; // change this to echo what you inputted
    } catch (Exception $e) {
        echo '<p class="warning"> Warning: ' . $e->getMessage() . '</p>';
    }
}

if (isset($_POST['sort_students_rin'])) {
    $seven = $mysqli->query("SELECT * FROM students ORDER BY `RIN`");

    $result = mysqli_query($mysqli, 'SHOW COLUMNS FROM students');

    $s1 = $seven->fetch_all();
    print_array($result, $s1);
}

if (isset($_POST['sort_students_fname'])) {
    $seven = $mysqli->query("SELECT * FROM students ORDER BY `first name`");

    $result = mysqli_query($mysqli, 'SHOW COLUMNS FROM students');

    $s1 = $seven->fetch_all();
    print_array($result, $s1);
}

if (isset($_POST['sort_students_lname'])) {
    $seven = $mysqli->query("SELECT * FROM students ORDER BY `last name`");

    $result = mysqli_query($mysqli, 'SHOW COLUMNS FROM students');

    $s1 = $seven->fetch_all();
    print_array($result, $s1);
}

if (isset($_POST['sort_students_rcsid'])) {
    $seven = $mysqli->query("SELECT * FROM students ORDER BY RCSID");

    $result = mysqli_query($mysqli, 'SHOW COLUMNS FROM students');

    $s1 = $seven->fetch_all();
    print_array($result, $s1);
}

if (isset($_POST['90'])) {
    $eight = $mysqli->query("SELECT students.RIN, students.`first name`, students.`last name`, students.street, students.city, students.state, students.zip
FROM students INNER JOIN grades ON students.RIN = grades.RIN AND grades.grade >= 90");
    $s1 = $eight->fetch_all();

    echo '<table>';
    echo '<tr> <th>RIN</th> <th>First name</th> <th>Last name</th> <th>Street</th> <th>City</th> <th>State</th><th>ZIP</th></tr>';
    for ($i = 0; $i < count($s1); $i++) {
        echo '<tr>';
        for ($j = 0; $j < count($s1[$i]); $j++) {
            echo '<td> ' . $s1[$i][$j] . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

if (isset($_POST['average'])) {
    $nine = 'SELECT courses.title, avg(grades.grade) FROM grades INNER JOIN COURSES ON grades.crn = courses.crn GROUP BY courses.crn';
    $nine_stmt = $dbconn->prepare($nine);
    $nine_stmt->execute();
    $s1 = $nine_stmt->fetchAll();
    echo '<table>';
    echo '<tr> <th>Course name</th> <th>Average grade</th> </tr>';
    for ($i = 0; $i < count($s1); $i++) {
        echo '<tr>';
        echo '<td> ' . $s1[$i]['title'] . '</td>';
        echo '<td> ' . $s1[$i]['avg(grades.grade)'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

if (isset($_POST['count'])) {
    $ten = $mysqli->query('SELECT courses.title, COUNT(*) FROM grades INNER JOIN courses on grades.crn = courses.crn GROUP BY courses.crn');
    $s1 = $ten->fetch_all();


    echo '<table><tr> <th>Course name</th> <th>Number of students</th></tr>';

    for ($i = 1; $i < count($s1); $i++) {
        echo '<tr>';
        for ($j = 0; $j < count($s1[$i]); $j++) {
            echo '<td> ' . $s1[$i][$j] . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

}
echo '</div>';
?>