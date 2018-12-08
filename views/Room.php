<?php

if (isset($_POST['room'])) {
    $RoomVal = 0;
    $RoomVal = $_POST['room'];
    if(isset($_POST['numberOfRooms'])){
        setcookie("numberOfRooms", $_POST['numberOfRooms'], time() + (2 * 60 * 60));
    }
    setcookie("Room_Selection", $RoomVal, time() + (2 * 60 * 60));
    setcookie("bookingStage", 2, time() + (2 * 60 * 60), '/~mlynch7/finalProject');
    header("Location:index.php");
}


?>


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
            <li class="linav"><a href="views/youtube.html">YouTube Video</a></li>
            <li class="linav"><a href="https://github.com/malynch7/Web-Programming-Final-Project">GitHub</a></li>
            <li class="linav"><a href="index.php?action=logout">Log out</a></li>
        </ul>
    </div>
</center>
<br>
<div class="jumbotron">
    <h2 align="center">Select a Room</h2>
    <br>
    <center>
        <table>
            <tr>
                <td>
                    <h4 align="center">Economy Room</h4>
                    <img src="views/images/151fbd32_z.jpg" alt="base" width="250" height="150">
                    <br>
                    <p align="center"><strong style="font-size: 20px">No Extra Charge</strong> per room</p>
                    <form method="post">
                        <input type="hidden" name="room" value="0">
                        <select name="numberOfRooms">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <br><br>
                        <p align="center"><input class="btn btn-primary" type="submit" value="Add To Cart"></p>
                    </form>
                </td>
                <td>
                    <h4 align="center">Standard Room</h4>
                    <img src="views/images/StandardRoom.jpg" alt="standard" width="250" height="150">
                    <br>
                    <p align="center"><strong style="font-size: 20px">$199.99</strong> per room</p>
                    <form method="post">
                        <input type="hidden" name="room" value="1">
                        <select name="numberOfRooms">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <br><br>
                        <p align="center"><input class="btn btn-primary" type="submit" value="Add To Cart"></p>
                    </form>
                </td>
                <td>
                    <h4 align="center">Luxury Suite</h4>
                    <img src="views/images/Rist-Piccolo-Mondo-Camere_3328.jpg" alt="luxury" width="250" height="150">
                    <br>
                    <p align="center"><strong style="font-size: 20px">$399.99</strong> per room</p>
                    <form method="post">
                        <input type="hidden" name="room" value="2">
                        <select name="numberOfRooms">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <br><br>
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
