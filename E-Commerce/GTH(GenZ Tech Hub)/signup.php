<!doctype html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/stylesu.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>GTH-Create Account</title>
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
            <a href="index.html"><img src="img/new_logo.webp" alt="GTH" style="width: 25%; margin-left: 37%; margin-bottom: 5%;"></a>
            <div class="row" style="overflow-y:hidden;">
                <h2>Sign Up</h2>
                <div class="col-md-12" style="overflow-y:hidden;">
                    <br>
                    <form action="connect.php" method="POST">
                    <input type="text" class="form-control" id="fname" placeholder="First Name" name="firstName" required style="width: 48%; float: left;">
                    <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lastName" style="width: 48%; float: right;">
                    <br><br>
                    <input type="tel" class="form-control" id="phoneno" placeholder="Phone Number (Ex: 9894257669)" name="phoneNo" required style="float: left;">
                    <br><br>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required style="float:left">
                    <br><br>
                    <input type="password" class="form-control" id="pass" placeholder="Password" name="password" required>   
                    <br>
                    <input type="checkbox" onclick="myFunction()"> Show Password</p>  
                    <script>
                        function myFunction() {
                        var x = document.getElementById("pass");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                        }
                        </script>       
                        <div class="row" style="overflow-x: hidden; overflow-y: hidden;">
                            <div class="col-md-6">
                                <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Sign Up</button>
                            </div>
                        </form>
                    <p id="ca">Already have an account. <a href="signin.php">Sign In</a></p>
                        </div>
                </div>
            </div>
            






                </div>
            </div>
        </div>
    </div>
</body>
</html>