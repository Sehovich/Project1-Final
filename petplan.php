<?php

// initializing variables

$usernameError = $emailError  = "";
$db = mysqli_connect('127.0.0.1:3308', 'root', '', 'form1');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form  $username = mysqli_real_escape_string($db, $_POST['username']);
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
 

  if (empty($_POST["name"])) {
    $usernameError = "Name is required!";
  } 
  if (empty($_POST["email"])) {
    $emailError = "Email is required!";
  } 


 

  // Finally, register user if there are no errors in the form
  if (empty($usernameError) && empty($emailError)) {

    $query = "INSERT INTO petplan (name, surname, telephone, email, message) 
          VALUES('$name', '$surname', '$telephone', '$email', '$message')";
    mysqli_query($db, $query);
    header('location: index.html');
  }
  else {
 
  }
}



?>



