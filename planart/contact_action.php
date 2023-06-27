<?php
include("db_config/connect.php");
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="INSERT INTO contact(name,email,date,message) VALUES ('$name','$email',Now(),'$message')";

mysqli_query($con,$sql);

header('location:contact.php');
?>