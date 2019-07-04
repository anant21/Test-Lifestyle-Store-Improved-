<div class="navbar navbar-inverse navbar-fixed-top"> 

<div class="container"> 
<div class="nav navbar-nav navbar-left">
<li><a><img src="img/head-logo1.png" alt="LS logo" title="Welcome to Lifestyle Store!" class="img-responsive img-circle" style="width:27px;"/></a></li>
</div>

<div class="navbar-header"> 
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>
    </button> 
<a class="navbar-brand" href="home.php"> <b>Lifestyle Store</b></a></div> 
<div class="collapse navbar-collapse" id="myNavbar"> 
<ul class="nav navbar-nav navbar-right"> 

<?php 
    if (isset($_SESSION['email'])) 
    { ?> 
    
         <li><a>Hello, <b><?php $n=NULL; $n = $_SESSION['name']; echo $n; ?>!</b></a></li>
         <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li> 
         <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li> 
         <li><a href = "orderhistory.php"><span class = "glyphicon glyphicon-list-alt"></span> Order History</a></li>
         <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li> 
   
   
<?php
    } else { ?>

         <li><a>Hello, <b>Guest!</b></a></li>
         <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
         <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
         <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
         <li><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>

<?php } ?>
</ul>
    </div> 
    </div> 
</div>