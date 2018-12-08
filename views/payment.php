<?php
       $servername = "localhost";
       $username = "gsoni1";
       $password = "gsoni1";
       $dbname = "gsoni1";
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
        echo "<br> purchase_number: ". $row["purchase_number"]. " - destination_code: ". $row["destination_code"]. "room_tier" . $row["room_tier"] . " number_of_rooms: ". $row["number_of_rooms"]." total_occupants". $row["total_occupants"]." parking".$row["parking"]." parking_lot".$row["parking_lot"]."<br>";
    }
} else {
    echo "0 results";
}
$sql = "INSERT INTO purchase(purchase_number, destination_code,room_tier, number_of_rooms,total_occupants,parking,parking_lot) VALUES(2,2,2,1,1,1,1)";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql2 = "INSERT INTO user_purchase (purchase_number,email) Values(2,'anotherexample')";

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
