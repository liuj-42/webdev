<?php

//$DATABASE_HOST = 'localhost';
//$DATABASE_USER = 'root';
//$DATABASE_PASS = '';
//$DATABASE_NAME = 'websys_shop';
//// Try and connect using the info above.
////$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
//$conn = new PDO("mysql:host=$DATABASE_HOST;dbname=$DATABASE_NAME", $DATABASE_USER, $DATABASE_PASS);
//if (isset($_GET['lname'])) {
//
//    if ($_GET['lname'] != '') {
////        echo "test";
//
//        $pstmt = $conn->prepare('SELECT * from customers WHERE lname = :ln');
//        $pstmt->bindParam('ln', $_GET['lname'], PDO::PARAM_STR);
//    } else {
//        echo "lname not given, outputting entire file";
//        $pstmt = $conn->prepare('SELECT * from customers');
//    }
//    $pstmt->execute();
//    while ($row = $pstmt->fetch()) {
//        printf("%s %s",$row['fname'],$row['lname']);
//    }
//}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lab 8</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css"-->
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div id="page-wrap">
        <form method="post" action="1.php" id="form" >
            <input type="submit" name="before" value="Order by price before discount, ascending." />
            <input type="submit" name="after" value="Order by price after discount, ascending." />
            <input type="submit" name="average" value="Show average of the discounted prices of the items." />
        </form>
    </div>


</body>
</html>

<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'websys_quiz';

$dbconn = new PDO("mysql:host=$DATABASE_HOST;dbname=$DATABASE_NAME", $DATABASE_USER, $DATABASE_PASS);

if (isset($_POST['before'])) {
    $stmt = $dbconn->prepare('SELECT * FROM items
ORDER BY price');
    $stmt->execute();
    echo "<div id='result'>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Price</th></tr>";
    while ($row = $stmt->fetch()) {
        echo '<tr><td>'  . $row['name'] . '</td><td>' . $row['price'] . '</td></tr>';
    }
    echo "</table>";
    echo "</div>";

} else if (isset($_POST['after'])) {
    $stmt = $dbconn->prepare('SELECT items.name,
       items.price * (1-discounts.discount) AS discounted_price, items.price
FROM ITEMS LEFT JOIN DISCOUNTS
ON items.id = discounts.item_id
ORDER BY discounted_price');
    $stmt->execute();
    echo "<div id='result'>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Discounted Price</th><th>Original Price</th></tr>";
    while ($row = $stmt->fetch()) {
        echo '<tr><td>'  . $row['name'] . '</td><td>' . $row['discounted_price'];
        if ($row['discounted_price']==NULL) {
            echo "N/A";
        }
        echo '</td><td>' . $row['price'];
        echo '</td></tr>';

    }
    echo "</table>";
    echo "</div>";
} else if (isset($_POST['average'])) {
    $stmt = $dbconn->prepare('SELECT AVG(items.price * (1-discounts.discount)) AS `average price`
FROM items INNER JOIN discounts
ON items.id = discounts.item_id');
    $stmt->execute();
    echo "<div id='result'>";

    while ($row = $stmt->fetch()) {
        echo '<p>Average price of discounted items: $' . $row['average price'] . '</p>';
    }
    echo "</div>";

}
?>

