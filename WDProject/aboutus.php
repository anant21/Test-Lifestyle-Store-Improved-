<!DOCTYPE HTML>

<html>

    <head>

        <title>About Us | Lifestyle Store</title>

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
<body  style=" background: url('img/intro-bg_1.jpg') no-repeat center; background-size: cover;">

    <?php
        include 'inc/head.php';   //To include header 
    ?>
    <br><br>
    <div class="container" style="background-color:#337ab7;">
        <div class="jumbotron">
           <center> <h2><b>About Us</b></h2> </center>
        </div>    
    </div> 
    <div class="container" style="background-color: lightgrey; " >
        <div class="row"><br>
            <div class="col-md-4 col-xs-12">        <!--Makes the page responsive with different devices-->
                <h4><b> Who we are </b></h4><br>
                <img src="img/abt.png" alt="abt.png" class="img-responsive img-circle" style="width: 250px;"> <br>
                <p>Online shopping is a form of electronic commerce which allows consumers to directly buy goods or services from a seller over the Internet using a web browser. 
                    Consumers find a product of interest by visiting the website of the retailer directly or by searching among alternative vendors using a shopping search engine, 
                    which displays the same product's availability and the pricing at different e-retailers. 
                    As of now, customers can shop online using a range of different computers, laptops, tablets, computers and smartphones. 
                </p>
            </div>

            <div class="col-md-4 col-xs-12">
                <h4><b> Our History </b></h4><br>
                <p> <font color="blue">1960</font><br>
                    One of the earliest forms of trade conducted online was IBM's online transaction processing (OLTP) developed in the 1960s.
                    <br><br>
                    <font color="blue">1985</font><br>
                    The processing of financial transactions in real-time. The computerized ticket reservation system developed for American Airlines called Semi-Automatic Business Research Environment (SABRE) was one of its applications.
                    <br><br>
                    <font color="blue">1990</font><br>
                    Here, computer terminals located in different travel agencies were linked to a large IBM mainframe computer, which processed transactions simultaneously and coordinated them so that all travel agents had access to the same information at the same time.<br><br>
                    The emergence of the online shopping as we know today developed with the emergence of the Internet.
                </p>
            </div>

            <div class="col-md-4 col-xs-12">
                <h4><b> Growth in Online Shoppers </b></h4><br>
                <p>
                        As the revenue from online sales continued to grow significantly researchers identified different types of online shoppers, 
                        Rohm & Swaminathan identified four categories and named them "convenience shoppers, variety shopper".
                        They focused on shopping motivations and found that the variety of products available and the perceived convenience 
                        of the buying online experience were significant motivating factors.
                </p>
            </div>
        </div>
    </div>
    <br>
    <?php
    include 'inc/foot.php';     //To include footer
    ?>

</body>
</html>