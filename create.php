<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connection</title>
  <link rel="stylesheet" href="BS5/css/bootstrap.css">
</head>
<body>
  
</body>
</html>

<?php
//to enable the user to go back to the contact page
include ("header.php");
//VARIABLES
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];


if (isset($_POST['submit'])){
  //IF WE HAVE A VALID EMAIL
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p style='color:green;text-align:center;font-weight:strong;font-size:25px'> Your message has been sent! </p>";
    include("credentials.php");
// INSERTION OF DATA INTO DATABASE
    $sql = "INSERT INTO users (firstname,lastname,email,subject,message) VALUES ('$firstname','$lastname','$email','$subject','$message')";
   /*  $sql = "insert into users (firstname,lastname,email,subject,message) values('$firstname','$lastname','$email','$subject','$message')"; */
    $conn->query($sql);
    $conn->close();
  } 
  else 
  { //WE DO NOT CONNECT TO THE DATABASE
  echo "<p style='color:red;text-align:center;font-weight:strong;font-size:25px'>Your email is not valid! </p>";
  }
}


?>