                       <!--This page displays the message of successful order confirmation -->

<?php

require 'inc/com.php';          //includes com.php file which connect to the database and starts the session
if (!isset($_SESSION['email'])) {
    header('location: home.php');
}

$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=". $user_id ."  AND item_id IN (" . $item_ids_string .") AND status='Added to cart'";
mysqli_query($con, $query) or die(mysqli_error($con));
?>


<!DOCTYPE HTML>

<html>

    <head>

        <title>Success | Lifestyle Store</title>

        <!--The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
The initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser.-->
        <meta name="viewport" content="width=device-width, initial-scale=1" />


        <!-- Latest compiled and minified CSS -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link  href="style.css" type="text/css" rel="stylesheet">
        <link rel="icon" type="image/icon" href="img/head-logo1.png"> <!--For The Logo in the title-->
               

    </head>

    <body style=" background: url('img/intro-bg_1.jpg') no-repeat center; background-size: cover;">
    
    <?php 
            include 'inc/head.php';         //Includes header in the page
    ?>
  
        <div class="container" style="margin-top: 150px;">
            <div class="col-md-8 col-md-offset-2 col-xs-12" >
                
                <div class="panel panel-primary">  
                    <div class="panel-heading"><h3><b>Order Confirmed!</b></h3></div>
                    <div class="panel-body"><br>
                    Your order is confirmed. Thank you for shopping
                    with us.  <br>
                    </div>
                    <div class="panel-footer">
                    <a href="products.php"class="btn btn-warning" ><b>Shop More<b></a>
                    </div>
                </div>
               
            </div>
        </div>
<br><br><br><br><br><br><br><br><br><br><br><br>
           <?php
            include 'inc/foot.php'; //Includes footer in the page
           ?>    
    
    
    </body>
    </html>