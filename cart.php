

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- JavaScript library library--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart</title>
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
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart "></span> Cart</a></li>
                        <li><a href="setting.php"><span class="glyphicon glyphicon-cog "></span> Setting</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-out "></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav><br><br><br><br><br>

        <!-- Navigation Bar End-->
<!--body of cart start here-->

<div class="row">
<div class="container log_padding col-xs-4 col-xs-offset-4">
            <div class="table-responsive">
            <table class="table table-hover">
                <tbody>

                    <tr><th>Item Number </th>  <th>Item Price </th><th></th></tr>

                    <tr><td></td>  <td></td> <td></td></tr>

                    <tr><td>Total</td> <td>Rs. 0 </td> <td>
                        <a href="success.php">
                            <button class="btn btn-primary ">Confirm Order</button>
                        </a></td></tr> 
                </tbody>
            </table>
        </div>
        </div>
        </div>


<!--body of cart ends here-->

<!--footer-->

        <footer id="footer">
            <div >
                <center>Copyright © Lifestyle Store. All Rights Reserved” and “Contact Us: +91 90000 00000”</center>
            </div>
        </footer>
<!--footer end-->

    </body>
</html>