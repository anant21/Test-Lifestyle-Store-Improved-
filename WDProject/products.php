<?php
    require 'inc/com.php';
   ?>

<!DOCTYPE HTML>

<html>

    <head>

        <title>Products | Lifestyle Store</title>

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

    <body>
    
       <?php
        include 'inc/head.php';
        include 'inc/check-if-added.php';
       ?>
<br><br><br>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt
                        around, we have all in one place.</p>
            </div>
        

        <div class="row text-center" id="cams">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="Images/cameras/cannon-eos.jfif" alt="Cameras" class="img-responsive thumbnail" style="height: 171.8px;">
                    <div class="caption">
                        <h3>Canon EOS</h3>
                        <p>Price: &#8377; 36,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="Images/cameras/cannon-dslr.jpg" alt="Cameras" class="img-responsive thumbnail" style="height: 171.8px; width: fit-content">
                        <div class="caption">
                            <h3>Canon DSLR</h3>
                            <p>Price: &#8377; 61,635.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="Images/cameras/sony-black.jfif" alt="Cameras" class="img-responsive thumbnail" style="height: 171.8px;">
                            <div class="caption">
                                <h3>Sony DSLR</h3>
                                <p>Price: &#8377; 50,000.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="Images/cameras/olympus-dslr.jpg" alt="Cameras" class="img-responsive thumbnail" style="height: 171.8px;">
                                <div class="caption">
                                    <h3>Olympus DSLR</h3>
                                    <p>Price: &#8377; 80,000.00</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>                               
                             </div>
                            </div>
                        </div>
        </div>

        <div class="row text-center" id="wats">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="Images/watches/titan301.jpg" alt="watches" class="img-responsive thumbnail">
                    <div class="caption">
                        <h3>Titan Model#301</h3>
                        <p>Price: &#8377; 13,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                                </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="Images/watches/titan201.jpg" alt="watches" class="img-responsive thumbnail">
                        <div class="caption">
                            <h3>Titan Model#201</h3>
                            <p>Price: &#8377; 3,000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>                     
                               </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="Images/watches/hmt-milan.jpg" alt="watches" class="img-responsive thumbnail">
                            <div class="caption">
                                <h3>HMT Milan</h3>
                                <p>Price: &#8377; 8,000.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                                        </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="Images/watches/faber-luba.jpg" alt="watches" class="img-responsive thumbnail">
                                <div class="caption">
                                    <h3>Faber Luba #111</h3>
                                    <p>Price: &#8377; 18,000.00</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                                            </div>
                            </div>
                        </div>
        </div>

        <div class="row text-center" id="shi">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="Images/shirts/h&w.jpg" alt="shirts" class="img-responsive thumbnail" style="height: 171.8px;">
                        <div class="caption">
                            <h3>H&W</h3>
                            <p>Price: &#8377; 800.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>                   
                                 </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="Images/shirts/louisphilippe.jpg" alt="shirts" class="img-responsive thumbnail" style="height: 171.8px;">
                            <div class="caption">
                                <h3>Louis Philippe</h3>
                                <p>Price: &#8377; 1,000.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                                        </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="Images/shirts/john-zok.jpg" alt="shirts" class="img-responsive thumbnail">
                                <div class="caption">
                                    <h3>John Zok</h3>
                                    <p>Price: &#8377; 1,500.00</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                            </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                                <div class="thumbnail">
                                    <img src="Images/shirts/jhalsani.jpg" alt="shirts" class="img-responsive thumbnail" style="height: 171.8px;">
                                    <div class="caption">
                                        <h3>Jhalsani</h3>
                                        <p>Price: &#8377; 1,300.00</p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>                  
                                              </div>
                                </div>
                            </div>
        </div>

        </div>
        
    <?php 
        include 'inc/foot.php';
    ?>
      </body>
      </html>