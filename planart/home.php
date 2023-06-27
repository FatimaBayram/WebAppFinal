<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link href=
'https://fonts.googleapis.com/css?family=Sofia' 
          rel='stylesheet' />
          <link rel="stylesheet" type="text/css" href="./css/footer.css">
<link rel="stylesheet" type="text/css" href="./css/about.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {

  background-image: url("./images/planet.png");
  background-color: white;
  height: 700px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  font-family: Sofia;
  text-align: center;
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #8f569e;
}
.button {
  background-color: #dacddd; 
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
}
.button4 {border-radius: 12px;}
</style>
</head>
<body>
<?php require "header.php";?>
<div class="hero-image">
  <div class="hero-text">
 
<h1 style="font-size:80px">Welcome to<br><b>Planart Family</b></h1>
<br>
<button class="button button4">
<a href="signup.php" >Register in the Course !</a></button>

<button class="button button4">
<a href="index.php" >Our Painting shop !</a></button>
  </div>
</div>
<?php require "footer.php";?>
</body>
</html>