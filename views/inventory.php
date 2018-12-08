<?php

if (isset($_POST['One'])) {
    $FinalVal = $_POST['One'];
    setcookie("Destination_Selection", $FinalVal, time() + (2 * 60 * 60));
    setcookie("bookingStage", 1, time() + (2 * 60 * 60), '/~mlynch7/finalProject');
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Cruise and Park</title>
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
            <li class="linav"><a href="#about">YouTube Video</a></li>
            <li class="linav"><a href="https://github.com/malynch7/Web-Programming-Final-Project">GitHub</a></li>
            <li class="linav"><a href="index.php?action=logout">Log out</a></li>
        </ul>
    </div>
</center>
<br>

<div class="jumbotron">
    <h2 align="center">Select a Cruise Package</h2>
    <center>
        <table>
            <tr>
                <td>
                    <h4 align="center">Bahamas</h4>
                    <img align="center" src="views/images/bahamas.jpg" alt="Bahamas">
                    <ul>
                        <li>Unlimited Food & Drinks</li>
                        <li>4 days and 3 nights</li>
                        <li>Port Miami, Flordia | Key West, Flordia | Nassau, Bahamas</li>
                    </ul>
                    <p align="center"><strong style="font-size: 20px">$399.99</strong> per room</p>
                    <form method="post">
                        <input type="hidden" name="One" value="0">
                        <p align="center"><input class="btn btn-primary" type="submit" value="Add To Cart"></p>
                    </form>
                </td>
                <td>
                    <h4 align="center">Carribean</h4>
                    <img align="center" src="views/images/caribbean.jpg" alt="Caribbean">
                    <ul>
                        <li>Unlimited Food & Drinks</li>
                        <li>6 days and 5 nights</li>
                        <li>Port Canaveral, Florida | Key West, Florida | Nassau, Bahamas | Cozumel, Mexico | Puerto
                            Costa Maya, Mexico
                        </li>
                    </ul>
                        <p align="center"><strong style="font-size: 20px">$599.99</strong> per room</p>
                    <form method="post">
                        <input type="hidden" name="One" value="1">
                        <p align="center"><input class="btn btn-primary" type="submit" value="Add To Cart"></p>
                    </form>
                </td>
                <td>
                    <h4 align="center">Alaska</h4>
                    <img align="center" src="views/images/alaska.jpg" alt="Alaska">
                    <ul>
                        <li>Unlimited Food & Drinks</li>
                        <li>10 days and 9 nights</li>
                        <li>Seward, Alaska | Juneau, Alaska | Skagway, Alaska | Icy Strait, Point Alaska | Vancouver,
                            British Columbia | Ketchikan, Alaska
                        </li>
                    </ul>
                    <p align="center"><strong style="font-size: 20px">$999.99</strong> per room</p>
                    <form method="post">
                        <input type="hidden" name="One" value="2">
                        <p align="center"><input class="btn btn-primary" type="submit" value="Add To Cart"></p>
                    </form>
                </td>
            </tr>
        </table>
    </center>
</div>
<br>
<p align="center"><a class="btn btn-primary" href="index.php?action=clearBooking" role="button">Return To Menu</a></p>
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
