<?php

require 'inc/com.php';
$uid = $_SESSION['user_id'];
$name = $_SESSION['name'];
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);     //The md5() function calculates the MD5 hash of a string.
                                //The md5() function uses the RSA Data Security, Inc. MD5 Message-Digest Algorithm.
$message = $_POST['message'];
$message = mysqli_real_escape_string($con, $message);

//this query is used to check whether the user have provided correct credentials
$select_query = "SELECT id, email from users where email='$email' AND password='$password'"; 
$select_query_res = mysqli_query($con, $select_query) or die(mysqli_error($con));

//this query inserts the email & the reason of deleting the account to deletedaccounts table
$insert_query = "INSERT into deletedaccounts(name, email, reason) values('$name','$email','$message')";

//query deletes the user from users table
$delete_query = "DELETE from users where email='$email' AND password='$password'"; 

//this query is to erase the details of the products bought by him or her
$delete_user_item ="DELETE from users_items where user_id='$uid'";


if(mysqli_num_rows($select_query_res)==0)
{echo "<script>
             alert('Wrong Credentials!');
             window.location.replace('settings.php');
         </script>";
   

} else {
    mysqli_query($con, $insert_query) or die(mysqli_error($con));
    mysqli_query($con, $delete_user_item) or die(mysqli_error($con));
    mysqli_query($con, $delete_query) or die(mysqli_error($con));
    echo "<script>
        alert('Account Deleted!');
        window.location.replace('logout.php');
    </script>";
     
    
}

?>
