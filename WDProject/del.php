<?php
         require 'inc/com.php';             //Page for account deletion
?>

<!DOCTYPE html>
<html>
    <head>
            <title>Delete Account | Lifestyle Store</title>

            <!--The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
    The initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser.-->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="refresh" content="120" />
       
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
         
        <div class="container">
              <div class="row">
                  <br><br><br><br><br>
           <div class="col-md-4 col-md-offset-4 col-xs-12">
                <div class="panel panel-danger" >
                <div class="panel-heading"style="background-color:#d9534f;">
                        <h3 style="color:white;"><b>Delete the Account<b></h3>
                </div>
    
                <div class="panel-body">
                        <p style="color:#6a6d6d;"><em>Hope, we see you again!</em></p><br>
                <form method="POST" action="delform.php"> <!--The details will be sent for verification-->
                        <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" required="true">
                        </div>       
                        
                        <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                        </div>

                        <div class="form-group">
                        <textarea class="form-control" name="message" rows="2" required="true" placeholder="Please write the reason." maxlength="50" ></textarea>
                        </div>
                        <!--Glyphicon trash to display a trash or dustbin icon on the delete button-->
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                </form>
                
                </div>
    
                
                </div>
        </div>
        </div>
        </div>    
    <br><br><br><br><br><br><br><br><br><br>
<?php
   include 'inc/foot.php';
?>
            

</body>
</html>