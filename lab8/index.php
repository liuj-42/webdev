<?php
session_start();
if (isset($_SESSION['loggedin'])) {
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

    <header class="top">
        <span class="title">Lectures/Labs for the Fall 2021 Semester </span>
        <span class="float-right logout"><a href="logout.php">Log out </a>&nbsp&nbsp</span>
    </header>
    <nav class="sidebar sticky">
        <button type="button" onclick="load_contents();">Refresh contents</button>
        <div id="nav-ajax">
        </div>
    </nav>


<div id="content">
    <div id="Lectures">
    </div>
    <div id="Labs">
    </div>

</div>

<div class="output hide">

</div>
<!--<form method="POST" action="script.php" class="float-right top-right">-->
    <ul class="nostyle float-right top-right">
        <li><h4>Tools</h4></li>
        <li>
            <button type="submit" name="archive" onclick="archive()">Archive courses to database</button>
        </li>
        <li>
            <button type="submit" name="unarchive" onclick="unarchive()">Delete archived courses</button>
        </li>
    </ul>
<!--</form>-->


<script src="main.js" async defer></script>
</body>
</html>

    <?php
} else {
    header("Location: login.php");
    exit();
}



?>
