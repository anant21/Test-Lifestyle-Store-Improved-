<?php
require 'inc/com.php'; //includes com.php file to this page which connects to the database and starts the session

?>

<!DOCTYPE HTML>

<html>

    <head>

        <title>Home | Lifestyle Store</title>

        <!--The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
            The initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser.-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="30" />
 
        <!-- Latest compiled and minified CSS -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link  href="style.css" type="text/css" rel="stylesheet">
        <link rel="icon" type="image/icon" href="img/head-logo1.png"> <!--For The Logo in the title-->
        
        
    </head>

<body>
        
    <?php
        include "inc/head.php";     //includes the header to the page
    ?>
    
<div class="content">        
    <div id="banner_image">
        <center>
            <div class="container">
                <div id="banner_content">
                    <h2>We sell Lifestyle.</h2><br>
                    <p>Flat 40% off on premium brands</p>
                    <a href="products.php" class="btn btn-danger btn-lg active"> Shop Now </a>
                </div>
            </div>
        </center>
    </div>

    <br><br>
<center>
<div class="container">
    <div class="col-md-4 col-sm-12">
    <a href="products.php" class="home" title="Best Cameras">
        <div class="thumbnail">
            <img src="img/camera.jpg" alt="Cameras" class="img-responsive thumbnail">
                <div class="caption">
                    <h3>Cameras</h3>
                    <p><b>Choose among the best available in the world.</b></p>             
                </div>
        </div>
    </a>
    </div>

    <div class="col-md-4 col-sm-12">
    <a href="products.php" class="home" title="Branded Watches">
        <div class="thumbnail">
            <img src="img/watch.jpg" alt="Watches" class="img-responsive thumbnail">
                <div class="caption">
                    <h3>Watches</h3>
                    <p><b>Original watches from the best brands.</b></p>                              
                </div>
        </div>
    </a>
    </div>

    <div class="col-md-4 col-sm-12">
    <a href="products.php" class="home" title="Exquisite shirts collection">
        <div class="thumbnail">
            <img src="img/shirt.jpg" alt="Shirts" class="img-responsive thumbnail">
                <div class="caption">
                    <h3>Shirts</h3>
                    <p><b>Our exquisite collection of shirts.</b></p>       
                </div>
        </div>
    </a>
    </div>  
</div>
</center>
</div>

<?php include 'inc/foot.php';       //includes the footer to the page
?>

</body>
</html>