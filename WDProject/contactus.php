<!DOCTYPE HTML>

<html>

    <head>

        <title>Contact Us | Lifestyle Store</title>

        <!--The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
            The initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser.-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <!-- Latest compiled and minified CSS -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link  href="style.css" type="text/css" rel="stylesheet">
        <link rel="icon" type="image/icon" href="img/head-logo1.png"> <!--For The Logo in the title-->
        
        
    </head>
<body  style=" background: url('img/intro-bg_1.jpg') no-repeat center; background-size: cover;">

    <?php
        include 'inc/head.php';
    ?>
    <br><br>
    <div class="container" style="background-color:#337ab7;">
        <div class="jumbotron">
        <center> 
            <h2><b>Contact Us</b></h2>       
            <h4>How can we help you?</h4>
        </center>
        </div>    
    </div>
    
    <div class="container" style="background-color:lightgrey">
        <div class="row">
            <div class="col-md-8 col-xs-6">
                <h3>Live Support</h3>
                <p>Live support is a Web service that allows businesses to communicate, or chat, in real time with visitors
                    to their Web site. Live support applications are commonly used to provide immediate customer support and information to
                    clients and customers. Exact features and functions of live support are application specific, however you can generally expect
                    a live chat application to provide real time visitor monitoring, custom chat windows, invisible trafficanalysis, 
                    Web site integration and secure administration controls.
                </p><br><br>
                <div>
                <!--whatsapp icon and whatsapp number for live support-->
                   <pre> <img src="img/whats.png" alt="whatsapp" class="img-responsive img-circle" style="width:40px;"><b> +91 8448444853 </b></pre>
                </div> 
                
                <div>
                <!--Facebook Messenger icon and username for live support-->
                   <pre> <img src="img/fb.png" alt="Facebook" class="img-responsive img-circle" style="width: 40px;"> <b>/Lifestylestore_support </b></pre>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <!--Responsive & circular image-->
                <img src="img/live.jpg" alt="Live Support" class="img-responsive img-circle">
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-xs-6">
                <!--Form to send the message & query of the user-->
                <form action="contactform.php" method="POST">
                    <h2><b>Write to us</b></h2>
                    <div class="form-group">
                        <input type="text" placeholder="Name" name="name" required="true" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email Address" name="email" required="true" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Write your message" maxlength="500" ></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Send</button>
                    
                </form>
                <br>
            </div>
            <!--Company details-->
            <div class=" col-md-3 col-md-offset-1 col-xs-6" >
                <h3><b>Company Information</b></h3><br>
                <p><b>Gurgaon, India - 122018</b></p>
                <p><b>Phone: +91 8448444853</b></p>
                <p><b>Email: lifestyle@store.com</b></p>

            </div>
        </div>
    </div>
    <br>

    <?php
    include 'inc/foot.php';
    ?>

</body>
</html>