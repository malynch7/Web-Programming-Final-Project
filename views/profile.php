<?php

    $servername = "localhost";
    $username = "gsoni1";
    $password = "gsoni1";
    $dbname = "gsoni1";
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


        }
    }
} else {
    echo "0 results";
}




?>
<html>
    <head>
        <title>Profile</title>

    </head>
    <body>



    </body>
</html>
