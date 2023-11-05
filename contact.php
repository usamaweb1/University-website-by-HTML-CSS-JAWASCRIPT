<?php

 $con = mysqli_connect('localhost','root',);

 if ($con) {
   
     echo "connection successfull";
 }else{
     echo "no connection";
 }
mysqli_select_db($con,'contactform');
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = " insert into userinfodata (name, email, subject, message) values ('$name', '$email','$subject','$message') ";

mysqli_query($con,$query);
?>