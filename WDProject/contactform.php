<?php
require 'inc/com.php';

$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);  

//The mysqli_real_escape_string() function escapes special characters in a string for use in an SQL statement.

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

$message = $_POST['message'];
$message = mysqli_real_escape_string($con, $message);
$regex_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';  //back-end validation for email

if (!preg_match($regex_email, $email)) {
   /* $m1 = "Enter a valid Email address";                          //Sending the error via GET method is insecure, as the user can control the
             header('location: contactus.php?error=' . $m1);        //error by changing the parameters in the URL.                 
                                                                    // using alert box with script is more safer.  
    */
    echo "<script> 
            alert('Enter a valid Email address!');      
            window.location.replace('contactus.php');
        </script> ";

} else{
    $query = "INSERT INTO messages(name, email, message) VALUES('$name','$email','$message')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    
    //if correct format of email is provided with the message
    //this function gives an alert message of successful submission & redirects the user to contact us page
    
    echo "<script> alert('Your message has been sent successfully!'); 
            window.location.replace('contactus.php');
         </script> ";
    
}

?>