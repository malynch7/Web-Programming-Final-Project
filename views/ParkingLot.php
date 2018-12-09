<?php

if (isset($_POST['Lot'])) {
    $Lot_Val = $_POST['Lot'];
    setcookie("Parking_Lot", $Lot_Val, time() + (2 * 60 * 60));
    setcookie("bookingStage", 4, time() + (2 * 60 * 60), '/~mlynch7/finalProject');
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Parking Lot Selection</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="views/css/Style.css">
</head>

<body>
<center>
    <div class="divtop">
        <h1>Cruise and Park</h1>
        <ul class="ulnav">
            <li class="linav"><a href="views/youtube.html">YouTube Video</a></li>
            <li class="linav"><a href="https://github.com/malynch7/Web-Programming-Final-Project">GitHub</a></li>
            <li class="linav"><a href="index.php?action=logout">Log out</a></li>
        </ul>
    </div>
</center>
<br>
<div class="jumbotron">
    <h2 align="center">Select a Parking Lot</h2>
    <br>
    <center>
        <table>
            <tr>
                <td>
                    <h4 align="center">Red Lot</h4>
                    <img src="views/images/RegularParking.jpg" alt="base" width="250" height="150">
                    <br><br>
                    <ul>
                        <li>Short walk to port</li>
                    </ul>
                    <p align="center"><strong style="font-size: 20px">$25</strong></p>
                    <br>
                    <form method="post">
                        <input type="hidden" name="Lot" value="0">
                        <p align="center"><input class="btn btn-primary" type="submit" value="Add To Cart"></p>
                    </form>
                </td>
                <td>
                    <h4 align="center">Blue Lot</h4>
                    <img src="views/images/StandardParking.png" alt="standard" width="250" height="150">
                    <br><br>
                    <ul>
                        <li>Shuttle service to port</li>
                    </ul>
                    <p align="center"><strong style="font-size: 20px">$35</strong></p>
                    <br>
                    <form method="post">
                        <input type="hidden" name="Lot" value="1">
                        <p align="center"><input class="btn btn-primary" type="submit" value="Add To Cart"></p>
                    </form>
                </td>
                <td>
                    <h4 align="center">VIP Lot</h4>
                    <img src="views/images/ValetParking.jpg" alt="standard" width="250" height="150">
                    <br><br>
                    <ul>
                        <li>Valet service at port</li>
                    </ul>
                    <p align="center"><strong style="font-size: 20px">$60</strong></p>
                    <br>
                    <form method="post">
                        <input type="hidden" name="Lot" value="2">
                        <p align="center"><input class="btn btn-primary" type="submit" value="Add To Cart"></p>
                    </form>
                </td>
            </tr>
        </table>
    </center>
</div>
<br>
<p align="center"><a class="btn btn-primary clrbtn" href="index.php?action=clearBooking" role="button">Return To Menu</a></p>
<br>
<hr>
<center><p>© Copyright 2018 Cruise and Park</p></center>


</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<html>
