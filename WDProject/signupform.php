<?php
require 'inc/com.php';

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

    //Backend validation of email and contact number is done using the below pattern
  $regex_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
  $regex_num = '/^[789][0-9]{9}$/';

  $query = "SELECT id FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query) or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  //if above query fetches the result with given email, then alert message is displayed and redirected
  // to Sign Up page again as email is already present in database
  if ($num > 0) {
    echo "<script> if (window.confirm('Email Already Exists! Click ok to retry.')) 
    {
    window.location.href='signup.php';
    }; 
    </script> ";

    //if the email pattern doesn't match then again an error is displayed by alert and redirected to sign up page.
  } else if (!preg_match($regex_email, $email)) {
    //$m1 = "<span class='red'>Not a valid Email Id</span>";
    //header('location: signup.php?m1=' . $m1);
    echo "<script> 
            alert('Enter a valid Email ID!');      
            window.location.replace('signup.php');
        </script> ";

    //if the phone number pattern doesn't match then again an error is displayed by alert and redirected to sign up page. 
  } else if (!preg_match($regex_num, $contact)) {
    //$m1 = "<span class='red'>Not a valid phone number</span>";
    //header('location: signup.php?m2=' . $m1);
    echo "<script> 
            alert('Enter a valid phone number!');      
            window.location.replace('signup.php');
        </script> ";
  
    //if email is correct, phone & email is of valid pattern then the details of the user will be inserted the users table in the database
    //And details of the user stored in SESSION[] to identify the current user
  } else {
    
    $query = "INSERT INTO users(name, email, password, contact, city, address) VALUES('$name','$email','$password','$contact','$city','$address')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['name'] = $name;
    //header('location: home.php');
    echo "<script> 
            alert('You have successfully signed up!');      
            window.location.replace('home.php');
        </script> ";
  }
?>