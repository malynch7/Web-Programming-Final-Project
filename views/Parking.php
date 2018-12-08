<?php

if (isset($_POST['parking'])) {
    $ParkVal = 0;
    $ParkVal = $_POST['parking'];
    setcookie("Parking_Bool", $ParkVal, time() + (2 * 60 * 60));
    if ($ParkVal == '1') {
        setcookie("bookingStage", 3, time() + (2 * 60 * 60), '/~mlynch7/finalProject');
    } else {
        setcookie("bookingStage", 4, time() + (2 * 60 * 60), '/~mlynch7/finalProject');
    }
    header("Location:index.php");
}
?>


<html>
<head>
    <title>Cruise and Book</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="views/css/Style.css">
</head>

<body>
<center>
    <div>
        <h1>Parking</h1>
        <ul class="ulnav">
            <li class="linav"><a class="active" href="#home">Home</a></li>
            <li class="linav"><a href="login.php">Login</a></li>
            <li class="linav"><a href="#contact">Contact</a></li>
            <li class="linav"><a href="#about">YouTube Video</a></li>
        </ul>
    </div>
</center>
<h2>Do you want park?</h2>
<form method="post">
    <input type="radio" name="parking" value="1"> Yes<br>
    <input type="radio" name="parking" value="0"> No<br>
    <input type="submit" value="Add To Cart">
</form>

<br>
<br>
<br>
<br>
<br>
<hr>
<center><p>© Copyright 2018 Cruise and Park</p></center>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
<html>
