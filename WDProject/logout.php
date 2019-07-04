<?php
require 'inc/com.php';

//this checks if the session is already started if not then it redirects to login page
//if yes, it destroys the session and the user is successfully logged out & redirected to Home page
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
session_destroy();
header('location: home.php');
?>