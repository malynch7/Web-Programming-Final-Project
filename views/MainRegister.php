<?php
$RegFirstName = $_REQUEST['RegFirstName'];
$RegLastName = $_REQUEST['RegLastName'];
$RegEmail = $_REQUEST['RegEmail'];
$RegPassword = $_REQUEST['RegPassword'];
$ReRegPassword = $_REQUEST['ReRegPassword'];
if ($RegPassword == $ReRegPassword) {
    echo "works well";
} else {
    echo "does not work well";
}
echo $RegFirstName;
echo $RegLastName;
echo $RegDOB;
echo $RegEmail;
$servername = "localhost";
$username = "gsoni1";
$password = "gsoni1";
$dbname = "gsoni1";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo 'successfully connected';
}
$sql = "SELECT email, password, first_name, last_name FROM user";
$result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<br> email: " . $row["email"] . " - password: " . $row["password"] . "first name" . $row["first_name"] . " last name: " . $row["last_name"] . "<br>";
    }
} else {
    echo "0 results";
}
$sql = "INSERT INTO user (email, password, first_name, last_name)
VALUES ('$RegEmail', '$RegPassword', '$RegFirstName', '$RegLastName')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location:../index.php");
$conn->close();
?>


