<?php
    $FirstName="";
    $LastName="";
    $servername = "localhost";
    $username = "gsoni1";
    $password = "gsoni1";
    $dbname = "gsoni1";
    $arrayMain = array();
    $userEmail= $_COOKIE["email"];
    //echo $userEmail;
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    //echo 'successfully connected';
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
           // echo "First Name ".$row["first_name"];
            //echo "First Name ".$row["last_name"];
            $FirstName=$row["first_name"];
            $LastName=$row["last_name"];
        }
    }
} else {
    //echo "0 results";
}

$sql = "SELECT * FROM user_purchase";

$result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}else{
    //echo "it works";
}


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    //    echo "<br> purchase_number: ". $row["purchase_number"]. "  email: ". $row["email"]."<br>";
        if($row["email"]==$_COOKIE['email']){
        array_push($arrayMain,$row["purchase_number"]);
        //echo "array value is";
       // print_r($arrayMain);
    }
    }
} else {
    //echo "0 results";
}
 $sql = "SELECT * FROM purchase";

$purchaseHistory = array();

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
                     array_push($purchaseHistory, $row);
                    //echo "<br> purchase_number: ". $row["purchase_number"]. " - destination_code: ". $row["destination_code"]. "room_tier" . $row["room_tier"] . " number_of_rooms: ". $row["number_of_rooms"]." parking".$row["parking"]." parking_lot". $row["parking_lot"]." total_price". $row["total_price"]."<br>";

                 }
        }
    }
} else {
    //echo "0 results";
}

$conn->close();

?>
<html>

<head>
    <title>Profile</title>
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
    <p align="center">Purchase History for <?php echo $FirstName . ' ' . $LastName . ' at ' . $userEmail; ?></p>
    <table class="historyTable">
        <tr>
            <th>
                Purchase Number
            </th>
            <th>
                Destination
            </th>
            <th>
                Number of Rooms
            </th>
            <th>
                Room Tier
            </th>
            <th>
                Parking Tier
            </th>
            <th>
                Total Price
            </th>
        </tr>
        <?php
        foreach ($purchaseHistory as $row){
            echo "<tr><td>" . $row['purchase_number'] . "</td><td>";
            switch($row['destination_code']){
                case 0:
                    echo " Bahamas";
                    break;
                case 1:
                    echo ' Carribean';
                    break;
                case 2:
                    echo ' Alaska';
            }
            echo "</td><td>" . $row['number_of_rooms'] . "</td><td>";
            switch ($row['room_tier']){
                case 0:
                    echo " Basic Room";
                    break;
                case 1:
                    echo ' Standard Room';
                    break;
                case 2:
                    echo ' Luxury Room';
            }
            echo "</td><td>";
            switch ($row['parking_lot']){
                case 0:
                    echo 'Red Lot';
                    break;
                case 1:
                    echo 'Blue Lot';
                    break;
                case 2:
                    echo 'VIP Lot';
                    break;
                case 3:
                    echo 'None';
            }
            echo "</td><td>$" . $row['total_price'] . "</td></tr>";
        } ?>
    </table>
    <br>
    <p align="center"><a class="btn btn-primary" href="index.php?action=clearBooking" role="button">Return To Menu</a></p>
</div>


</body>
</html>
