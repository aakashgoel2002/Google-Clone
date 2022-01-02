<?php

// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'order_details';

// Server is localhost with
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM order_details Where id = (SELECT MAX(ID) FROM order_details)";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!doctype html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/stylesu.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Order Summary</title>
    <style>
        body{
            background-image:url("img/signin/signin-bkg.gif");
            backdrop-filter:blur(3px);
        }
        #register{
            width: 25%;
            margin-bottom: 5%;
        }
        .w3-button{
            border-radius: 5px;
            margin-left: 85%;
        }
        .w3-modal-content{
            border-radius: 5px;
        }
        #ca{
            margin-top: 5%;
            margin-left: 4%;
        }
        .login {
            background-color: #fff;
            width: 800px;
            height: 540px;
            border-radius: 10px;
            box-shadow: 0px 0px 0px 0px #3f51b5;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="overflow-y: hidden;">
        <div class="login" style="overflow-y:hidden;">
            <a href="index.html"><img src="img/new_logo.webp" alt="GTH" style="width: 10%; margin-left: 45%; margin-bottom: 4%;"></a>
            <div class="row" style="overflow-y:hidden;">
                <h2 style="margin-bottom: 4%;"><strong><u>Order Summary</u></strong></h2>
                <div class="col-md-12" style="overflow-y:hidden;">

                <?php // LOOP TILL END OF DATA
				while($row=$result->fetch_assoc())
				{
			    ?>

                                
                
				
                
                    <div overflow-y:hidden>
                    <div overflow-y:hidden>
                        <img src="<?php echo $row['image'];?>" alt="<?php echo $row['product'];?>" style="float:left; width:20%; margin-left:5%;">
                    </div>
                    <div style="padding-left: 35%;">
                                <td><h5>Name: <?php echo $row['name'];?></h5></td>
                                <br>
                                <td><h5>Address: <?php echo $row['address'];?></h5></td>
                                <br>
                                <td><h5>Pin Code: <?php echo $row['pin'];?></h5></td>
                                <br>
                                <td><h5>Mobile Number: <?php echo $row['mobileNo'];?></h5></td>
                                <br>
                                <td><h5>Product: <?php echo $row['product'];?></h5></td>
                                <br>
                                <td><h5>Order ID: <?php echo $row['id'];?></h5></td>
                    </div>
                    </div>
                
                
                
                
                

                
                







			<?php
				}
			?>



                        </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>