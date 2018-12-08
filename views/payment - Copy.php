<?php
    $Total_amount=0;
    $DestinationMain=0;
    $RoomMain=0;
    $ParkinglotMain=0;
    $ParkingSelec=$_COOKIE["Parking_Bool"];
    $ExEmail='garavsoni12';
    $largestvalue =0;
    $servername = "localhost";
    $username = "gsoni1";
    $password = "gsoni1";
    $dbname = "gsoni1";
    $Num_of_Rooms=0;
    $ParkingSelec =$ParkingSelec+0;

$DestinationMain = $_COOKIE["Destination_Selection"] + $DestinationMain;
$RoomMain = $Des_Cr[$_COOKIE["Room_Selection"]] + $RoomMain;
$ParkinglotMain = $Des_Cr[$_COOKIE["Parking_Lot"]] + $ParkinglotMain;



$Des_Cr = array(399.99, 599.99, 999.99);
$Room_Sel = array(199.99, 299.99, 399.99);
$Lot_Sel = array(25, 35, 60);
$Total_amount = $Des_Cr[$_COOKIE["Destination_Selection"]] +  $Room_Sel[$_COOKIE["Room_Selection"]] + $Lot_Sel[$_COOKIE["Parking_Lot"]];
alert($_COOKIE["Destination_Selection"]);
$_COOKIE["numberOfRooms"] = $_COOKIE["numberOfRooms"] * $Des_Cr[$_COOKIE["Destination_Selection"]];


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




$sql = "INSERT INTO purchase(purchase_number, destination_code,room_tier, number_of_rooms,parking,parking_lot,total_price) VALUES($largestvalue,'$DestinationMain','$RoomMain','$_COOKIE["numberOfRooms"]','$ParkingSelec','$Lot_Sel','$Total_amount')";




if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql2 = "INSERT INTO user_purchase (purchase_number,email) Values($largestvalue,'$ExEmail')";

if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}


$conn->close();


?>



<html>
    <head>
        <title>Payment</title>
    </head>
    <body>

    </body>


    </html>
