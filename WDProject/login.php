<?php
         require 'inc/com.php';         
?>

<!DOCTYPE html>
<html>
    <head>
            <title>Login | Lifestyle Store</title>

            <!--The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
    The initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser.-->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="refresh" content="25" />  <!--refreshes the page in every 25 seconds-->
       
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
                include 'inc/head.php';    //adds header to the page
          ?>  
         
        <div class="container">
        <div class="row">
                  <br><br><br><br><br>
           <div class="col-md-4 col-md-offset-4 col-xs-12">
                <div class="panel panel-primary">               <!--Panel starts here-->
                <div class="panel-heading">
                        <h4>LOGIN</h4>
                </div>
    
                <div class="panel-body">
                        <p class="text-warning"><em>Login to make a purchase</em></p>
                <form method="POST" action="loginform.php">
                        <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" required="true">
                        </div>       
                        
                        <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                        </div>
                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                </form>
                
                </div>
    
                <div class="panel-footer">
                     Don't have an account? <a href="signup.php">Register</a>
                </div>
                </div> <!--Panel ends here-->
        </div> <!--class col ends here-->
        </div>  <!--class row ends here-->
        </div>    <!--class container ends here-->
    <br><br><br><br><br><br><br><br><br><br>
<?php
   include 'inc/foot.php'; //adds footer to the page
?>
            

</body>
</html>