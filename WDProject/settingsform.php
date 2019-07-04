<?php

// This page updates the user password
require 'inc/com.php';
if (!isset($_SESSION['email'])) {
    header('location: home.php');
}

$old_pass = $_POST['oldpassword'];
$old_pass = mysqli_real_escape_string($con, $old_pass);
$old_pass = MD5($old_pass);

$new_pass = $_POST['newpassword'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = MD5($new_pass);

$new_pass1 = $_POST['retypenewpassword'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
$new_pass1 = MD5($new_pass1);

$query = "SELECT password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query) or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

//it checks if two passwords (both new) matches or not
//if not it redirects the user to settings page again after displaying an alert message
if ($new_pass != $new_pass1) {
    //header("location: settings.php?error=The two passwords don't match");
    echo "<script> alert('Two passwords do not match!');
    window.location.replace('settings.php'); </script> ";
}   
    //it checks if old password filled with existing user's password
    //if not it displays an alert message then redirects to settings page
    //if it matches then alert message of success is displayed then the user is redirected to Home Page
 else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die(mysqli_error($con));
       // header('location: settings.php?success=Password Updated');
       echo "<script> alert('Password Updated!');
       window.location.replace('home.php'); </script> ";

    } else
       {       
           //header('location: settings.php?error=Old Password is incorrect');
           echo "<script> alert('Old password is incorrect!');
           window.location.replace('settings.php'); </script> ";
        }
}
?>