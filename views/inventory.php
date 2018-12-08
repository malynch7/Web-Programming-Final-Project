<?php
$price=0;

$FinalVal = $_POST['One'];
echo   $FinalVal;
if($_POST['One']){
    setcookie("Destination_Selection",$FinalVal, time() + (2*60*60));
    echo "Destination_Selection: " . $_COOKIE["Destination_Selection"];
    setcookie("bookingStage", 1, time() + (2*60*60), '/~mlynch7/finalProject');
    header("Location:index.php");
}


?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Cruise and Park</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="views/css/Style.css">
</head>

<body>
<center><div class="divtop">
        <h1>Destination</h1>
        <ul class="ulnav">
            <li class="linav"><a href="#about">YouTube Video</a></li>
            <li class="linav"><a href="https://github.com/malynch7/Web-Programming-Final-Project">GitHub</a></li>
            <li class="linav"><a href="index.php?action=logout">Log out</a></li>
        </ul>
    </div></center>

<center><h2>Select a Cruise Package</h2></center>

<center><table>
        <tr>
            <td>
                <h4>Bahamas</h4>
            </td>
            <td>
                <h4>Carribean</h4>
            </td>
            <td>
                <h4>Alaska</h4>
            </td>
        </tr>
        <tr>
            <td>
                <img src="views/images/bahamas.jpg" alt="Bahamas">
            </td>
            <td>
                <img src="views/images/caribbean.jpg" alt="Caribbean">
            </td>
            <td>
                <img src="views/images/alaska.jpg" alt="Alaska">
            </td>
        </tr>
        <form method="post">
            <tr>
                <center><td>
                        <input type="radio" name="One" value="one"> <br>
                    </td></center>
                <center><td>
                        <input type="radio" name="One" value="two"> <br>
                    </td></center>
                <center><td>
                        <input type="radio" name="One" value="three"> <br>
                    </td></center>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>Unlimited Food & Drinks</li>
                        <li>4 days and 3 nights</li>
                        <li>Port Miami, Flordia | Key West, Flordia | Nassau, Bahamas</li>
                        <li>$399.99</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>Unlimited Food & Drinks</li>
                        <li>6 days and 5 nights</li>
                        <li>Port Canaveral, Florida | Key West, Florida | Nassau, Bahamas | Cozumel, Mexico | Puerto Costa Maya, Mexico</li>
                        <li>$599.99</li>
                    </ul>
                </td>
                <td>
                    <li>Unlimited Food & Drinks</li>
                    <li>10 days and 9 nights</li>
                    <li>Seward, Alaska | Juneau, Alaska | Skagway, Alaska | Icy Strait, Point Alaska | Vancouver, British Columbia | Ketchikan, Alaska</li>
                    <li>$999.99</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td colspan="3"><p align="center"><input type="submit" value="Add To Cart"></p> </td>
            </tr>
        </form>
    </table></center>

<br>
<p align="center"><a class="btn btn-primary" href="index.php?action=clearBooking" role="button">Return To Menu</a></p>

<br>
<br>
<br>
<br>
<br>
<hr>
<center><p>© Copyright 2018 Cruise and Park</p></center>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<html>
