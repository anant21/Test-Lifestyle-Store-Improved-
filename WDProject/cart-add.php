<?php
require 'inc/com.php';      //Includes common.php file where session is started
if (
    isset($_GET['id']) && is_numeric($_GET['id'])) { //checks the id that is received via GET Method & if its numeric or not
    
    $item_id = $_GET['id'];
    
    $user_id = $_SESSION['user_id'];        //stores the current user id from SESSION[] 

    //query to insert the item details to the table which are added in the cart 
    $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";

    //it runs the query & throws an error if the query is incorrect
    mysqli_query($con, $query) or die(mysqli_error($con));
    
    //header() function redirects the page to products page after the item is successfully added into the cart
    header('location: products.php');
}
?>   