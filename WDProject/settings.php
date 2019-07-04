<?php                   //setting page includes change password & delete account options
require 'inc/com.php';
if (!isset($_SESSION['email'])) {
    header('location: home.php');
}
?>



<!DOCTYPE HTML>

<html>

    <head>

        <title>Settings | Lifestyle Store</title>

        <!--The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
The initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser.-->
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <meta http-equiv="refresh" content="30" /> <!--refreshes the page in every 30 seconds-->

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
        include 'inc/head.php';
        ?>

        <br><br><br><br><br>

        <div class="container">
            <div class="col-xs-4 col-xs-offset-4" style="text-align: left;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h4><b>Change Password</b></h4>
                </div>
                <div class="panel-body">
                <form action="settingsform.php" method="POST">
                    <div class="form-group">
                    <input type="password" class="form-control" placeholder="Old Password" required="true" name="oldpassword">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="New Password" required="true" name="newpassword">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Re-type New Password" required="true" name="retypenewpassword">
                    </div>
                </div>
                <div class="panel-footer" style="background-color:whitesmoke;">
                    <button type="submit" class="btn btn-danger">Change</button><br><br>
                    <!--This link is button which on clicking takes the user to delete account page-->
                    <a href="del.php" type="button" class="btn btn-danger">Delete my account!</a>
                
                </div>  
                </form>
              
            </div>
            </div>
        </div>
<br><br><br><br><br><br><br><br><br><br>

           <?php
                include 'inc/foot.php';
            ?>
    
    
    </body>
    </html>