<?php

require 'inc/com.php';
    
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET["id"]; 
    $user_id = $_SESSION['user_id'];
    
    //query to remove the item from the cart
    $query = "DELETE FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' ";
    $res = mysqli_query($con, $query) or die(mysqli_error($con));
    //redirects to the cart
    header("location: cart.php");
}
?>