<?php

  $con = mysqli_connect('localhost','root');

  if ($con) {
  	echo "Connection Successfull";
  }
  else{
  	echo "no connection";
  }

mysqli_select_db($con, 'youtubeuser');
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query  =  " insert into userdata (user, email, subject, comment)
valuses ('$user','$email', '$subject','$message') "; 

echo "$query";
mysqli_query($con, $query);

header('location:index.php');
 
?>
