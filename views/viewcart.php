<?php

    $Total_amount=0;
    $DestinationMain=0;
    $Num_of_Rooms =0;
    $RoomMain=0;
    $ParkinglotMain=0;
    $ParkingSelec=$_COOKIE["Parking_Bool"] + 0;
    $EmailMain=$_COOKIE["email"];
    $largestvalue =0;
    $servername = "localhost";
    $username = "gsoni1";
    $password = "gsoni1";
    $dbname = "gsoni1";
    $ParkingSelec =$ParkingSelec+0;

    if(!$ParkingSelec){
        $ParkinglotMain = 3;
    }else{
        $ParkinglotMain = $_COOKIE["Parking_Lot"] + $ParkinglotMain;
    }

$DestinationMain = $_COOKIE["Destination_Selection"] + $DestinationMain;
$RoomMain = $_COOKIE["Room_Selection"] + $RoomMain;
$Num_of_Rooms =   $Num_of_Rooms + $_COOKIE["numberOfRooms"];



$Des_Cr = array(399.99, 599.99, 999.99);
$Room_Sel = array(0, 199.99, 399.99);
$Lot_Sel = array(25, 35, 60,0);
$Total_amount = ($Des_Cr[$DestinationMain] +  $Room_Sel[$RoomMain]) * $Num_of_Rooms  + $Lot_Sel[$ParkinglotMain];


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
    setcookie("purchaseNumber", $largestvalue,time()+(2*60*60),'/~mlynch7/finalProject');
    setcookie("bookingStage",5,time()+(2*60*60),'/~mlynch7/finalProject');
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
<div class="card" style="width: 28rem; margin-top: 4%">
    <div class="card-body">
        <h3 align="center">Shopping Cart</h3>
        <hr><br>
        <table align="center" border="1">
            <tr>
                <th align="center">Category</th>
                <th align="center">Selection</th>
                <th align="center">Price</th>
            </tr>
            <tr>
                <td>
                    <p>Destination</p>
                </td>
                <td><p><?php echo $Num_of_Rooms;
                        switch($DestinationMain){
                            case 0:
                                echo " Bahamas";
                                break;
                            case 1:
                                echo ' Carribean';
                                break;
                            case 2:
                                echo ' Alaska';
                        } ?></p>
                </td>
                <td>
                    <p><?php echo '$' . ($Des_Cr[$DestinationMain] * $Num_of_Rooms); ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Room</p>
                </td>
                <td><p><?php echo $Num_of_Rooms;
                        switch($RoomMain){
                            case 0:
                                echo " Basic Room";
                                break;
                            case 1:
                                echo ' Standard Room';
                                break;
                            case 2:
                                echo ' Luxury Room';
                        } ?></p>
                </td>
                <td>
                    <p><?php echo '$' . ($Room_Sel[$RoomMain] * $Num_of_Rooms); ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Parking</p>
                </td>
                <td><p><?php switch($ParkinglotMain){
                            case 0:
                                echo 'Red Lot';
                                break;
                            case 1:
                                echo 'Blue Lot';
                                break;
                            case 2:
                                echo 'VIP Lot';
                            case 3:
                                echo 'None';
                        } ?></p>
                </td>
                <td>
                    <p><?php echo '$' . $Lot_Sel[$ParkinglotMain]; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Total</p>
                </td>
                <td>
                    <p>Total</p>
                </td>
                <td>
                    <p><?php echo '$' . $Total_amount; ?></p>
                </td>
            </tr>
        </table>
        <br><br>
        <h5 align="center">Payment</h5>
        <hr>
        <p align="center">Credit\Debit:
            <img src="http://i45.tinypic.com/2jdqu89.jpg" alt="visa" />
            <img src="http://i47.tinypic.com/357rfch.jpg" alt="mastercard" />
            <img src="http://i42.tinypic.com/25tyo9l.jpg" alt="amex" />
            <img src="http://i45.tinypic.com/2n23h9i.jpg" alt="discover" />
        </p>
        <form method="post">
            <div align="center" style="white-space:nowrap">
                <label for="nameOnCard">Name on card: </label>
                <input type="text" name="nameOnCard" id="nameOnCard" required>
            </div>
            <div align="center" style="white-space:nowrap">
                <label for="address">Billing Address: </label>
                <input placeholder="e.g. 33 Gilmer Street SE Atlanta, GA 30303" name="address" id="address" type="text" required/>
            </div>
            <div align="center" style="white-space:nowrap">
                <label for="phonenumber">Phone Number</label>
                <input placeholder="e.g. 404-413-2000" id="phonenumber" name="phonenumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" type="text" required/>
            </div>
            <div align="center" style="white-space:nowrap">
                <label for="creditCardNumber">Card Number: </label>
                <input pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" type="text" id="creditCardNumber"
                       name="creditCardNumber" placeholder="8888-8888-8888-8888" required>
            </div>
            <div align="center" style="white-space:nowrap">
                <label for="expirationMonth">Expiration Date: </label>
                <select id="expirationMonth" name="expirationMonth">
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
                <a>/</a>
                <select name="expirationYear">
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
            <div align="center" style="white-space:nowrap">
                <label for="cvv">CCV/CVV: </label>
                <input type="text" pattern="[0-9]{3}" placeholder="123" name="cvv" id="cvv" required>
            </div>
            <br>
            <p align="center"><input class="btn btn-primary" name="submit" value="Confirm and Pay" type="submit"></p>
        </form>
    </div>
</div>
<br>
<p align="center"><a class="btn btn-primary" href="index.php?action=clearBooking" role="button">Return To Menu</a></p>
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
