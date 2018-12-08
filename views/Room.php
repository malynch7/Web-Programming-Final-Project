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
    <title>Cruise and Book</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/Style.css">
</head>

<body>
<center>
    <div>
        <h1>Cruise and Park</h1>
        <ul class="ulnav">
            <li class="linav"><a class="active" href="#home">Home</a></li>
            <li class="linav"><a href="login.php">Login</a></li>
            <li class="linav"><a href="#contact">Contact</a></li>
            <li class="linav"><a href="#about">YouTube Video</a></li>
        </ul>
    </div>
</center>

<center><h2>Select a Cruise Package</h2></center>

<center>
    <table>
        <tr>
            <td>
                <h4>Baseroom room: </h4>
            </td>
            <td>
                <h4>Standard room: </h4>
            </td>
            <td>
                <h4>Luxury room: </h4>
            </td>
        </tr>
        <tr>
            <td>
                <img src="images/151fbd32_z.jpg" alt="base" width="250" height="150">
            </td>
            <td>
                <img src="images/StandardRoom.jpg" alt="standard" width="250" height="100">
            </td>
            <td>
                <img src="images/Rist-Piccolo-Mondo-Camere_3328.jpg" alt="luxury" width="250" height="150">
            </td>
        </tr>
        <tr>
            <form method="post">
                <center>
                    <td>
                        <input type="radio" name="room" value="0"> <br>
                    </td>
                </center>
                <center>
                    <td>
                        <input type="radio" name="room" value="1"> <br>
                    </td>
                </center>
                <center>
                    <td>
                        <input type="radio" name="room" value="2"> <br>
                    </td>
                </center>
                <center>
                    <td>
                        <input type="hidden" name="numberOfRooms" value="1">
                        <input type="submit" value="Add To Cart">
                    </td>
                </center>
            </form>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>$199.99</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>$299.99</li>
                </ul>
            </td>
            <td>
                <li>$399.99</li>
                </ul>
            </td>

        </tr>
    </table>
</center>

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
