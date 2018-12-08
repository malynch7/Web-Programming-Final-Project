<!DOCTYPE html>
    <html>
        <head>
            <title>Correct Login</title>
              <link rel="stylesheet" type="text/css" href="views/css/LoginStyle.css">
        </head>
        <body>
            <?php

                $passwordSQL="";
                $EmailSQL="";
                $CustomerID=0;
                //session_start();
                $uname="";
                $User_true=0;
                $Pass_true=0;
                $Both_true=0;
                $pass="";
                $Usererror = "";
                $Passerror = "";
                $success = "";
                $servername = "localhost";
$username = "gsoni1";
$password = "gsoni1";
$dbname = "gsoni1";
$FlightID=0;
$Price=0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo 'successfully connected';
}

                    if(isset($_POST['username'])){
                                    $User_true=0;
                                    $Pass_true=0;
                                    $Both_true=0;
                                    $uname=" ";
                                    $pass = " ";
                         $uname = $_POST['username'];
                         $pass = $_POST['password'];
                         /*
                                                   $favorites = array(
                    "Garav Soni" => array(
                        "admin" => "password1234",
                    ),
                    "Dave Punk" => array(
                        "admin2" => "password1234",
                    ),
                    "John Flinch" => array(
                      "admin3" => "password1234",
                    )
                );
                     $keys = array_keys($favorites);
                     for($i = 0; $i < count($favorites); $i++) {
    foreach($favorites[$keys[$i]] as $key => $value) {
         if($uname==$key){
            $User_true=1;
            if($pass==$value){
                 $Pass_true=1;
            }
            if($User_true==1&&$Pass_true==1){
                $Both_true=1;
            }
        }
    }
    echo "\n";
}
*/


$sql = "SELECT email, password, first_name, last_name FROM user";

$result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> email: ".$row["email"]." - password: ".$row["password"]."first name" . $row["first_name"]." last name: ". $row["last_name"]."<br>";
          echo $passwordSQL;
          echo $EmailSQL;
          echo "sql  is".$row["email"];
          echo "user is ".$uname;
          echo "sqlpass is".$row["password"];
          echo "password is ".$pass;

    if($row["password"]==$pass && $uname==$row["email"]){
            $Both_true=1;
    }else if($uname==$row["email"]){
            echo "email true";
            $User_true=1;
    }else if($row["password"]==$pass){
         echo "pass true";
            $Pass_true=1;
    }
}

echo "the username is ".$uname;


} else {
    echo "0 results";
}

                            if($Both_true==1){
                                session_start();
                                setcookie("email",$uname,time()+(2*60*60));
                                //setcookie("member_password",$pass,time()+(10*365*24*60*60));
                                //setcookie("member_customerID",$CustomerID,time()+(10*365*24*60*60));
                                if(!empty($_POST["remember"])){


                                }else{

                                }
                                $error = "Not success";
                                $success = "Welcome! ";

                                    header("Location:index.php");
                                    echo '</script>';
                                    $User_true=0;
                                    $Pass_true=0;
                                    $Both_true=0;
                                    $uname=" ";
                                    $pass = " ";
                            }else{
                                $Passerror = "Invalid Password";
                            }
                        }else{
                            $Usererror = "Invalid Username";


                    }
            ?>
                    <table id="mainframe">
             <div class="CorrectLogin">
                <img src="views/images/PhotoIcon.png" class="IconMain">
                <h1>  Login </h1>
                <form method="post">
                    <p>Email: </p>
                    <p class="Usererror"><?php echo "<font color='red'>$Usererror</font>";
                    ?>
                    <input type="text" name="username" placeholder="Enter Username" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>"  required>
                    <p>Password: </p>
                     <p class="Passerror"><?php echo "<font color='red'>$Passerror</font>";
                    ?>
                    <input type="password" name="password" placeholder="Enter Password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" required>
                    <input type="submit" name="submit" value="Login">
                     <label for="remember-me">Remember me:</label>
                    <input type="checkbox" class="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> name="remember" />
                    <a class="register" href="index.php?controller=register">Register</a>
                        </form>
             </div>
        </tr>

                    </table>

        </body>
    </html>
