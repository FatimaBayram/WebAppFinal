<!DOCTYPE html>
<html>
<head>
<title>signup Page</title>
<link rel="stylesheet" type="text/css" href="./css/about.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: rgb(119, 119, 119);
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color:#b487b9;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: rgb(146, 146, 146);
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<?php require "header.php";?>
    
    <form method="post" action="signup_action.php" style="margin: auto;padding:10px;">
  <div class="container">
    <h1 style="text-align: center;"><b>Register</b></h1>
    <p style="text-align: center;">Please fill in this form to create an account and register in the course </p>
    <div class="container signin">
    
  </div>
    <hr>
    <label for="user name"><b>Username :</b></label>
    <input type="text" name="username" placeholder="Enter your username here" required><br>
    <label for="email"><b>Email :</b></label><br>
    <input type="text" name="email" placeholder="Enter your email here" required><br>
    <label for="psw"><b>Password :</b></label>
    <input type="text" name="password" placeholder="Enter your password here" required><br>
    <label class="form-label" for="phone"><b>Phone number:</b></label>
    <input type="text" id="phone" name="phonenumber"  placeholder="Enter your phone number here" required><br>
     

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  
</form>

</body>
</html>
