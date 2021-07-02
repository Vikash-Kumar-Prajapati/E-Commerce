<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--minified JavaScript library--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup</title>
        <link href="final.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <!-- Navigation Bar-->

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav><br><br><br><br>

        <!-- Navigation Bar End-->


<!--sign up page start from here-->

        <div class="row ">
        <div class="container col-xs-4 col-xs-offset-4">
                <div>
                    <h2><strong> SIGN UP</strong> </h2>
             <form method="POST" action="signup_database.php">
                 <input type="text"  class="form-control" id="name" name="name" placeholder="Name" required="true">
                    <br>
                 <input type="email"  class="form-control" name="email" id="email" placeholder="E-mail" required="true">
                    <br>        
                 <input type="password"  class="form-control" name="password" id="password" placeholder="Password" required="true">
                    <br>
                 <input type="tel"  class="form-control" name="contact" id="password" placeholder="Contact" required="true">
                    <br>
                 <input type="text"  class="form-control" name="city" id="city" placeholder="City" required="true">
                    <br>
                 <input type="text"  class="form-control" name="address" id="address" placeholder="Address" required="true">
                    <br>
                 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    <br>
              </form>
                </div>
            </div>
        </div>

<!--footer-->

        <footer id="footer">
            <div>
                <center>Copyright © Lifestyle Store. All Rights Reserved” and “Contact Us: +91 90000 00000”</center>
            </div>
        </footer>
        
<!--footer end-->

    </body>
</html>
