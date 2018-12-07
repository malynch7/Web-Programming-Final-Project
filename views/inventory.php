<!DOCTYPE html>
<html>
<head>
    <title>Cruise and Book</title>
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

<center><h2>Select a Cruise Package</h2></center>

<center><table>
        <tr>
            <td>
                <h4>Bahamas</h4>
            </td>
            <td>
                <h4>Carribean</h4>
            </td>
            <td>
                <h4>Alaska</h4>
            </td>
        </tr>
        <tr>
            <td>
                <img src="bahamas.jpg" alt="Bahamas">
            </td>
            <td>
                <img src="caribbean.jpg" alt="Caribbean">
            </td>
            <td>
                <img src="alaska.jpg" alt="Alaska">
            </td>
        </tr>
        <tr>
            <form action="/index.php">
                <center><td>
                        <input type="radio" name="gender" value="male"> <br>
                    </td></center>
                <center><td>
                        <input type="radio" name="gender" value="female"> <br>
                    </td></center>
                <center><td>
                        <input type="radio" name="gender" value="other"> <br>
                    </td></center>
                <center> <td>
                        <input type="submit" value="Add To Cart">
                    </td></center>
            </form>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>2 People</li>
                    <li>1 Room</li>
                    <li>Unlimited Food & Drinks</li>
                    <li>4 days and 3 nights</li>
                    <li>Port Miami, Flordia | Key West, Flordia | Nassau, Bahamas</li>
                    <li>$399.99</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>2 People</li>
                    <li>1 Room</li>
                    <li>Unlimited Food & Drinks</li>
                    <li>6 days and 5 nights</li>
                    <li>Port Canaveral, Florida | Key West, Florida | Nassau, Bahamas | Cozumel, Mexico | Puerto Costa Maya, Mexico</li>
                    <li>$599.99</li>
                </ul>
            </td>
            <td>
                <li>2 People</li>
                <li>1 Room</li>
                <li>Unlimited Food & Drinks</li>
                <li>10 days and 9 nights</li>
                <li>Seward, Alaska | Juneau, Alaska | Skagway, Alaska | Icy Strait, Point Alaska | Vancouver, British Columbia | Ketchikan, Alaska</li>
                <li>$999.99</li>
                </ul>
            </td>

        </tr>
    </table></center>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<html>
