<?php

if (isset($_POST['Lot'])) {
    $Lot_Val = $_POST['Lot'];
    setcookie("Parking_Lot", $Lot_Val, time() + (2 * 60 * 60));
    setcookie("bookingStage", 4, time() + (2 * 60 * 60), '/~mlynch7/finalProject');
    header("Location:index.php");
}
echo "Parking lot" . $_Cookie["Parking_Lot"];
?>


<html>
<head>
    <title>Parking Lot Selection</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/Style.css">
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
<h2>Pick a lot</h2>
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
                <img src="images/RegularParking.jpg" alt="base" width="250" height="150">
            </td>
            <td>
                <img src="images/StandardParking.png" alt="standard" width="250" height="100">
            </td>
            <td>
                <img src="images/ValetParking.jpg" alt="luxury" width="250" height="150">
            </td>
        </tr>
        <tr>
            <form method="post">
                <center>
                    <td>
                        <input type="radio" name="Lot" value="0"> <br>
                    </td>
                </center>
                <center>
                    <td>
                        <input type="radio" name="Lot" value="1"> <br>
                    </td>
                </center>
                <center>
                    <td>
                        <input type="radio" name="Lot" value="2"> <br>
                    </td>
                </center>
                <center>
                    <td>
                        <input type="submit" value="Add To Cart">
                    </td>
                </center>
            </form>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>Red Lot</li>
                    <li>Walking Distance</li>
                    <li>$25</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Red Lot</li>
                    <li>Shuttle</li>
                    <li>$35</li>
                </ul>
            </td>
            <td>
                <li>VIP Lot</li>
                <li>Valet</li>
                <li>$60</li>
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
