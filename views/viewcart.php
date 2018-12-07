<!DOCTYPE html>
<html>
<head>
    <title>View Your Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

        div {
            background-color: blue;
            color: white;
        }

        .ulnav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        .linav {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }
    </style>
</head>

<body>
<center><div>
        <h1>Cruise and Park</h1>
        <ul class="ulnav">
            <li class="linav"><a class="active" href="#home">Home</a></li>
            <li class="linav"><a href="#news">Login</a></li>
            <li class="linav"><a href="#contact">Contact</a></li>
            <li class="linav"><a href="#about">YouTube Video</a></li>
        </ul>
    </div></center>

<center><h2>Your Cart</h2></center>

<center><table>
        <tr>
            <p>Destination:</p>
        </tr>
        <tr>
            <p>Room:</p>
        </tr>
        <tr>
            <p>Parking: </p>
        </tr>
        <tr>
            <p>Subtotal= </p>
        </tr>
        <tr>
            <p>Tax= </p>
        </tr>
        <tr>
            <p>Total= </p>
        </tr>
        <tr>
        <form action="/views/congrats.php">
  First name: <input type="text" name="fname"><br>
    </tr>
    <tr>
  Last name: <input type="text" name="lname"><br>
    </tr>
    <tr>
    <td>
                        <input type="radio" name="gender" value="visa">Visa<br>
                    </td>
                <td>
                        <input type="radio" name="gender" value="mastercard">Master Card<br>
                    </td>
                <td>
                        <input type="radio" name="gender" value="amex">American Express<br>
                    </td>
    </tr>
    <tr>
  Card Number: <input type="text" name="cardnumber"><br>
    </tr>
    <tr>
  Expiration: <input type="text" name="expiration"><br>
    </tr>
    <tr>
  Promotion Code: <input type="text" name="promotioncode"><br>
    </tr>
    <tr>
  <input type="submit" value="Submit">
    </tr>
</form>
    </table></center>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<html>
