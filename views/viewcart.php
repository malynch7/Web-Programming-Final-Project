<?php

    $Total_amount=0;
    $DestinationMain=0;
    $Num_ofR =0;
    $RoomMain=0;
    $ParkinglotMain=0;
    $ParkingSelec=$_COOKIE["Parking_Bool"] + 0;
    $EmailMain=$_COOKIE["email"];
    $largestvalue =0;
    $servername = "localhost";
    $username = "gsoni1";
    $password = "gsoni1";
    $dbname = "gsoni1";
    $Num_of_Rooms=0;
    $ParkingSelec =$ParkingSelec+0;

    if(!$ParkingSelec){
        $ParkinglotMain = 3;
    }else{
        $ParkinglotMain = $_COOKIE["Parking_Lot"] + $ParkinglotMain;
    }

$DestinationMain = $_COOKIE["Destination_Selection"] + $DestinationMain;
$RoomMain = $_COOKIE["Room_Selection"] + $RoomMain;
$Num_ofR =   $Num_ofR + $_COOKIE["numberOfRooms"];



$Des_Cr = array(399.99, 599.99, 999.99);
$Room_Sel = array(0, 199.99, 399.99);
$Lot_Sel = array(25, 35, 60,0);
$Total_amount = ($Des_Cr[$DestinationMain] +  $Room_Sel[$RoomMain]) * $Num_ofR  + $Lot_Sel[$ParkinglotMain];


if(isset($_POST["submit"])){
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo 'successfully connected';
}



    $sql = "SELECT * FROM purchase";


$result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> purchase_number: ". $row["purchase_number"]. " - destination_code: ". $row["destination_code"]. "room_tier" . $row["room_tier"] . " number_of_rooms: ". $row["number_of_rooms"]." parking".$row["parking"]." parking_lot". $row["parking_lot"]." total_price". $row["total_price"]."<br>";
        $largestvalue=$row["purchase_number"];

    }
} else {
    echo "0 results";
}
echo "the largestvalue is "+$largestvalue;
$largestvalue=$largestvalue+1;
$ConvertToInt=$_COOKIE["numberOfRooms"]+0;
/*
$sql = "INSERT INTO purchase(purchase_number, destination_code,room_tier, number_of_rooms,parking,parking_lot,total_price) VALUES($largestvalue,'$DestinationMain','$RoomMain','$ConvertToInt','$ParkingSelec','$Lot_Sel','$Total_amount')";
*/
$sql = "INSERT INTO purchase(purchase_number, destination_code,room_tier, number_of_rooms,parking,parking_lot,total_price) VALUES($largestvalue,$DestinationMain,$RoomMain,$ConvertToInt,$ParkingSelec,$ParkinglotMain,$Total_amount)";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql2 = "INSERT INTO user_purchase (purchase_number,email) Values($largestvalue,'$EmailMain')";

if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
    setcookie("bookingStage",1,time()+(2*60*60),'/~malynch7/finalProject');
    header("Location:index.php");
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$conn->close();
}


?>



<!DOCTYPE html>
<html>
<head>
    <title>View Your Cart</title>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    <style>

.container
    display: flex
    align-items: center
    justify-content: center
    height: 100vh
    flex-direction: column

*
    box-sizing: border-box

html
    background-color: #171A3D
    font-family: 'Lato', sans-serif

.card
    margin-top: 30px
    margin-bottom: 30px
    width: 520px
    height: 400px
    .row
        height: 20%
        width: 100%
        border-bottom: 1.2px solid #292C58
        &:last-child
            border: none
    .paypal
        border-top-left-radius: 10px
        border-top-right-radius: 10px
    .details
        border-bottom-left-radius: 10px
        border-bottom-right-radius: 10px
    .credit
        background-color: #1E2148
    .cardholder, .number, .details
        background-color: #242852

.credit
    .left, .right
        position: relative
        top: 50%
        transform: translateY(-50%)
    .left
        float: left
        margin-left: 50px
        label
            margin-left: 10px
            font-size: 1rem
            cursor: pointer
            font-weight: 700
            letter-spacing: 0.5px
            color: #fff
        input[type=radio]
            visibility: hidden
        .radio
            position: absolute
            top: -2px
            left: -20px
            border: 3px solid #414365
            width: 25px
            height: 25px
            border-radius: 50%
            background-color: #292B52
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1)
            &::before
                position: absolute
                content: ''
                border-radius: 50%
                top: 5px
                left: 5px
                width: 9px
                height: 9px
                background-color: transparent
                transition: background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1)
    .right
        float: right
        margin-right: 30px
        img
            width: 42px
            height: 30px
            margin-left: 10px

input[type=radio]:checked ~ .radio
    border: 3px solid #90E1E3
    background-color: #18C2C0
    &::before
        background-color: #fff

.cardholder, .number
    .info
        position: relative
        top: 50%
        transform: translateY(-50%)
        margin-left: 40px
        label
            display: inline-block
            letter-spacing: 0.5px
            color: #8F92C3
            width: 100px
        input
            display: inline-block
            max-width: 300px
            width: 300px
            background-color: transparent
            font-family: 'Source Code Pro'
            border: none
            outline: none
            margin-left: 50px
            color: white
            &::placeholder
                font-family: 'Source Code Pro'
                color: #444880

#cardnumber, #cardnumber::placeholder
    letter-spacing: 2px

.details
    .left, .right
        position: relative
        top: 50%
        transform: translateY(-50%)
    .left
        float: left
        padding-left: 40px
        width: 50%
        label
            letter-spacing: 0.5px
            color: #8F92C3
            width: 100px
            margin-right: 20px
        select
            font-family: 'Source Code Pro'
            cursor: pointer
            appearance: none
            background: transparent
            border: none
            outline: none
            color: #444880
        span
            font-family: 'Source Code Pro'
            color: #444880
            margin: 0 2px
    .right
        float: right
        width: 50%
        label
            margin-right: 20px
            color: #8F92C3
        input
            text-align: center
            width: 50px
            font-family: 'Source Code Pro'
            cursor: pointer
            background: transparent
            border: none
            outline: none
            color: #fff
            &::placeholder
                font-family: 'Source Code Pro'
                color: #444880
        span
            text-align: center
            display: inline-block
            font-family: 'Source Code Pro'
            cursor: pointer
            margin-left: 50px
            color: #18C2C0
            width: 24px
            height: 24px
            border: 2px solid #18C2C0
            border-radius: 50%

.button button
    font-size: 1.2rem
    font-weight: 400
    letter-spacing: 1px
    width: 520px
    background-color: #18C2C0
    border: none
    color: #fff
    padding: 18px
    border-radius: 5px
    outline: none
    transition: background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1)
    &:hover
        background-color: #15aeac
    &:active
        background-color: #139b99
    i
        font-size: 1.2rem
        margin-right: 5px

    </style>
</head>

<body>
<center><div class="divtop">
        <h1>Cruise and Park</h1>
        <ul class="ulnav">
            <li class="linav"><a href="youtube.html">YouTube Video</a></li>
            <li class="linav"><a href="https://github.com/malynch7/Web-Programming-Final-Project">See Project on GitHub</a></li>
            <li class="linav"><a href="#news">Logout</a></li>
        </ul>
    </div></center>
<form method="post">
<center><h2>Your Cart</h2></center>
<center><table>
        <tr>
            <p>Destination:<?php switch($_COOKIE['Destination_Selection']){
                case 0:
                    echo "Bahamas";
                    break;
                case 1:
                    echo 'Carribean';
                    break;
                case 2:
                    echo 'Alaska';
                    }


            ?></p>
        </tr>
        <tr>
            <p>Room:
                <?php
                switch($_COOKIE['Room_Selection']){
                case 0:
                    echo "Basic";
                    break;
                case 1:
                    echo 'Standard';
                    break;
                case 2:
                    echo 'Luxury';
                    }


            ?>



            </p>
        </tr>
        <tr>
            <p>Parking: </p>
            <?php switch($_COOKIE['Parking_Bool']){
                case 0:
                    echo 'No';
                case 1:
                    echo 'Yes';
                    }

            ?>
        </tr>
        <tr>
            <p>Subtotal=
                <?php
                    echo $Total_amount;
                ?>
            </p>
        </tr>
    </table></center>

<tr>
    <center>
    <div class="container">
    <div class="card__container">
        <div class="card">
            <div class="row credit">
                <div class="left">
                    <label for="cd">Debit/ Credit Card</label>
                </div>
                </tr>
                <tr>
                <div class="right">
                    <img src="http://i45.tinypic.com/2jdqu89.jpg" alt="visa" />
                    <img src="http://i47.tinypic.com/357rfch.jpg" alt="mastercard" />
                    <img src="http://i42.tinypic.com/25tyo9l.jpg" alt="amex" />
                    <img src="http://i45.tinypic.com/2n23h9i.jpg" alt="discover" />
                </div>
            </div>
            </tr>
            <tr>
            <div class="row cardholder">
                <div class="info">
                    <label for="cardholdername">Name</label>
                    <input placeholder="e.g. John Smith" id="cardholdername" type="text" />
                </div>
            </div>
            </tr>
            <tr>
            <div class="row number">
                <div class="info">
                    <label for="cardnumber">Card number</label>
                    <input id="cardnumber" type="text" pattern="[0-9]{16,19}" maxlength="19" placeholder="8888-8888-8888-8888"/>
                </div>
            </div>
            </tr>
            <tr>
            <div class="row details">
                <div class="left">
                    <label for="expiry-date">Expiry</label>
                    <select id="expiry-date">
                        <option>MM</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <span>/</span>
                     <select id="expiry-date">
                        <option>YYYY</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </select>
                </div>
                </tr>
                <tr>
                <div class="right">
                    <label for="cvv">CVC/CVV</label>
                    <input type="text" maxlength="4" placeholder="123"/>
                    <span data-balloon-length="medium" data-balloon="The 3 or 4-digit number on the back of your card." data-balloon-pos="up"></span>
                </div>
            </div>
        </div>
    </div>
    </tr>
    <tr>
    <div class="button">
        <input name="submit" value="Confirm and Pay" type="submit">
    </div>
</div>
</center>
</tr>
</table></center>
    </form>

<br>
<br>
<br>
<br>
<br>
<hr>
<center><p>© Copyright 2018 Cruise and Park</p></center>
</body>
<html>
