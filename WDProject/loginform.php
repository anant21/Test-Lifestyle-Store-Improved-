<?php

require 'inc/com.php';

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);

//this query fetch the details of the user which is already present in database
//and checks the email & password which the user have entered in login page
$select_query = "SELECT id, email, name from users where email='$email' AND password='$password'"; 

$select_query_res = mysqli_query($con, $select_query) or die(mysqli_error($con));

//if the query comes true then the details of the current user stored in SESSION[] and the user is redirected to the Home page
//if the query is false then alert window with the error message is displayed and when the user clicks on 'ok',
// the user is redirected to the login page
if(mysqli_num_rows($select_query_res)==0)
{
    //$error = "Please enter correct E-mail and Password";
    //header('location: login.php?error='. $error);
    
    echo "<script>
            alert('Please Enter correct E-mail & Password');
            window.location.replace('login.php');
        </script>";

} else {
    $row = mysqli_fetch_array($select_query_res);
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    header('location: home.php'); 
}

?>
