<?php
require("inc/com.php");
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Cart | Lifestyle Store</title>

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

    <?php include 'inc/head.php'; ?>
            <br><br><br><br><br>
        <div class="container-fluid" id="content">
            
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3><b><span class="glyphicon glyphicon-shopping-cart"></span> Your Cart</b></h3>
                        </div>
                    
                    <div class="panel-body">
                        <br>
                    <table class="table table-responsive table-hover">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0; $id=NULL;
                        $user_id = $_SESSION['user_id'];
                        //query to fetch price, item id, item name & date - time of addition of item in the cart
                        $query = "SELECT items.price AS Price, items.pid, items.name AS Name, timestamp FROM users_items JOIN items ON users_items.item_id = items.pid WHERE users_items.user_id='$user_id' 
                        and status='Added to cart' order by timestamp desc";

                        //it runs the above query and throws the sql error if the query is incorrect
                        $result = mysqli_query($con, $query)or die(mysqli_error($con));

                            //it checks if above query have fetched any detail from the database
                            //if yes then all the items inside the cart shown to the user in descending order to the date - time
                            //latest added item shown first
                            //if no then empty cart message is displayed
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Order Date & Time<th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id .= $row["pid"] . ", ";
                                    echo "<tr><td>" . "#" . $row["pid"] . "</td><td><b>" . $row["Name"] . "</b></td><td>&#8377; " . $row["Price"] . "</td><td>". $row["timestamp"] ."
                                    </td><td><a href='cart-remove.php?id={$row['pid']}' class='btn btn-danger' ><span class='glyphicon glyphicon-remove'></span> Remove</a></td></tr>";
                                }

                                $id=rtrim($id,", ");
                                echo "<tr><td></td><td><b>Total</b></td><td><b>&#8377; " . $sum . "</td><td></td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-success'>
                                Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                           echo "<div class='col-md-12 col-xs-12' >";
                           echo "<center>Your Cart is Empty!</center>";
                        }
                        ?>
                        
                    </table>
                    </div> <!--panel-body ends here-->
                    
                    <div class='panel-footer'><a href='products.php' class='btn btn-warning'>Go Back</a></div>
                    </div> <!--panel-primary ends here-->
                </div>   <!--class-col ends here-->
            
        </div>  <!--container ends here-->
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php include("inc/foot.php"); ?>
    </body>
</html>