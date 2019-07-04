<?php
 require "inc/com.php";

 if(isset($_SESSION['email'])) {
    header('location: products.php');
 }
 ?>

<!DOCTYPE html>
<html>
    <head>
            <title>Sign Up | Lifestyle Store</title>

            <!--The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
    The initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser.-->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="refresh" content="62" />
       
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
     <br><br><br><br>
        <div class="container" >
          <div class="row">
        
            <div class="col-xs-4 col-xs-offset-4 ">    <br> 
          <form action="signupform.php" method="POST">  <!--This form sends the new user's details to the signupform page,
                                                                 which adds the new details in the database-->
          
                <div class="panel panel-primary">   <!--panel starts here-->
                    <div class="panel-heading">  
                        <h4>SIGN UP</h4>    
                    </div>    
                </div>                               <!--panel ends here-->

              <div class="form-group">
                  <input type="text" placeholder="Name" class="form-control" name="name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" >
              </div>
              <div class="form-group">
                  <input type="email" placeholder="Enter Valid Email" name="email" class="form-control" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"> 
              </div>
              <div class="form-group">
                  <input type="password" placeholder="Password (Min. 6 Characters)" class="form-control" name="password" required="true" pattern=".{6,}">
              </div>
              <div class="form-group">
                  <input type="number" placeholder="Enter valid phone number (Ex: 8448444853)" name="contact" class="form-control" required="true" maxlength="10" size="10">
              </div>
              <div class="form-group">
                  <input type="text" placeholder="City" class="form-control" name="city" required="true">
              </div>
              <div class="form-group">
                  <input type="text" placeholder="Address" class="form-control" name="address" >
              </div>
              <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> Sign Up</button>
          </form>
          <br><br>
        </div>
        </div>
        </div>    

      
        <br><br><br>
    <?php
        include 'inc/foot.php';
    ?>

</body>

</html>