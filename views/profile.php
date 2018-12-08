<?php
    $FirstName="";
    $LastName="";
    $servername = "localhost";
    $username = "gsoni1";
    $password = "gsoni1";
    $dbname = "gsoni1";
    $arrayMain = array();
    $userEmail= $_COOKIE["email"];
    echo $userEmail;
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo 'successfully connected';
}
  $sql = "SELECT * FROM user";
  $result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "<br> email: ". $row["email"]. " - password: ". $row["password"]. "first_name" . $row["first_name"] . " last_name: ". $row["last_name"] ."<br>";
        if($row["email"]==$userEmail){
            echo "First Name ".$row["first_name"];
            echo "First Name ".$row["last_name"];
            $FirstName=$row["first_name"];
            $LastName=$row["last_name"];
        }
    }
} else {
    echo "0 results";
}

$sql = "SELECT * FROM user_purchase";

$result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}else{
    echo "it works";
}


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    //    echo "<br> purchase_number: ". $row["purchase_number"]. "  email: ". $row["email"]."<br>";
        if($row["email"]==$_COOKIE['email']){
        array_push($arrayMain,$row["purchase_number"]);
        echo "array value is";
        print_r($arrayMain);
    }
    }
} else {
    echo "0 results";
}
 $sql = "SELECT * FROM purchase";


$result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       /* echo "<br> purchase_number: ". $row["purchase_number"]. " - destination_code: ". $row["destination_code"]. "room_tier" . $row["room_tier"] . " number_of_rooms: ". $row["number_of_rooms"]." parking".$row["parking"]." parking_lot". $row["parking_lot"]." total_price". $row["total_price"]."<br>";
        $largestvalue=$row["purchase_number"];
        */
        foreach($arrayMain as $value) {
                 if($value==$row["purchase_number"]){
                    echo "<br> purchase_number: ". $row["purchase_number"]. " - destination_code: ". $row["destination_code"]. "room_tier" . $row["room_tier"] . " number_of_rooms: ". $row["number_of_rooms"]." parking".$row["parking"]." parking_lot". $row["parking_lot"]." total_price". $row["total_price"]."<br>";

                 }
        }
    }
} else {
    echo "0 results";
}

$conn->close();

?>
<html>
    <head>
        <title>Profile</title>

    </head>
    <body>



    </body>
</html>
