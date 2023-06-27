<?php

include './db_config/connect.php';

if(isset($_POST['submit'])){

   $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $location = $_POST['location'];
    $date = date('Y-m-d H:i:s');
    

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      $query="INSERT INTO user_info (username,email,password,phonenumber,location,date) VALUES ('$username','$email','$password','$phonenumber','$location','$date')"or die('query failed');
    mysqli_query($con,$query);
      $message[] = 'registered successfully!';
      header('location:login.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="./css/about.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php require "header.php";?>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
   
<div class="form-container">

   <form action="index.php" method="post">
      <h3>Sign up now</h3>
      <input type="text" name="name" required placeholder="enter username" class="box">
      <input type="email" name="email" required placeholder="enter email" class="box">
      <input type="password" name="password" required placeholder="enter password" class="box">
    <input type="text" id="phone" name="phonenumber"  placeholder="Enter your phone number here" required class="box">
    <input type="text" name="location"  placeholder="Enter your locations here" required class="box"><br>
      <input type="submit" name="submit" class="btn" value="Signup">
      <p>already have an account? <a href="login.php">log in</a></p>
   </form>

</div>

</body>
</html>