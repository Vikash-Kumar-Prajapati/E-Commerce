
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- minified JavaScript library--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lifestyle</title>
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
                        <li><a href="aboutus.php"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav><br>
<
        <!-- Navigation Bar End-->

         <!-- background Image started from here-->

         <div id="banner_image" class="img-responsive">
             <div class="container">
                <div class="banner_content">
                    <h1>We sell lifestyle</h1>
                    <p>Flat 40% OFF on premium brands</p>
                    <a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
             </div>
         </div>   <br><br>

<!--body of product start here-->

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="product.php" ><div class="thumbnail">
                            <img src="camera1.jpg" alt="">
                            <div class="caption">
                                <h3><center>Cameras</center></h3>
                                <p><center>Choose among the best available in the world</center></p>
                            </div>
                        </div> 
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="product.php" ><div class="thumbnail">
                            <img src="laptop1.jpg" alt="">
                            <div class="caption">
                                <h3><center>Laptops</center></h3>
                                <p><center>Laptop with latest Technology</center></p>
                            </div>
                        </div> 
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="product.php" ><div class="thumbnail">
                            <img src="watch1.jpg" alt="">
                            <div class="caption">
                                <h3><center>Watches</center></h3>
                                <p><center>Watches from the best brands</center></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
<!--body of product ends-->

<!--footer-->

        <footer>
            <div>
                <center>Copyright © Lifestyle Store. All Rights Reserved” and “Contact Us: +91 90000 00000”</center>
            </div>
        </footer>
<!--footer end-->

    </body>
</html>