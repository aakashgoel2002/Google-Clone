<!doctype html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="css/stylesi.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>GTH-Sign In</title>
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
    <div class="container" style="overflow-y: hidden; overflow-x: hidden;">
        <div class="login" style="overflow-y: hidden; overflow-x: hidden;">
            <a href="index.html"><img src="img/new_logo.webp" alt="GTH" style="width: 25%; margin-left: 37%; margin-bottom: 5%;"></a>
            <div class="row" style="overflow-y: hidden; overflow-x: hidden;">
                <h2>Sign In</h2>
                <div class="col-md-12" style="overflow-y: hidden; overflow-x: hidden;">
                    <br>
                    <form action="validate.php" method="POST">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                    <br>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>   
                    <br>
                    <input type="checkbox" onclick="myFunction()"> Show Password</p>  
                    <script>
                        function myFunction() {
                        var x = document.getElementById("password");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                        }
                        </script>       
                        <div class="row" style="overflow-y: hidden; overflow-x: hidden;">
                            <div class="col-md-6">
                                <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Sign In</button>
                            </div>
                        </form>
                    <p id="ca">Don't have an account. <a href="signup.php">Create one</a></p>
                        </div>
                </div>
            </div>
            



 <!--           <div class="w3-container" style="overflow-y: hidden; overflow-x: hidden;">
                <div id="id01" class="w3-modal">
                  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:500px">
              
                    <div class="w3-center"><br>
                      <img src="img/signin/tick.gif" alt="Sign In Successful" style="width:30%" class="w3-circle w3-margin-top">
                      <br>
                      <h2>Sign-In Successful</h2>
                      <a href="index.html">
                        <input type="submit" id="register" value="Ok" class="btn btn-outline-success btn-form">
                      </a>
                    </div>
                  </div>
                </div>
              </div>

-->


                </div>
            </div>
        </div>
    </div>
</body>
</html>