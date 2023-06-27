<!DOCTYPE html>
<html>
<head>
<title>Our course</title>
<link rel="stylesheet" type="text/css" href="./css/footer.css">
<link rel="stylesheet" type="text/css" href="./css/about.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<?php require "header.php";?>

<header>
    <h1>Our course</h1>
  </header>
<br>
  <style>
    /* CSS Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }
    
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    
    p {
      color: #666;
      line-height: 1.5;
    }
    
    .feature {
      margin-bottom: 40px;
      border-bottom: 1px solid #ccc;
      padding-bottom: 20px;
    }
    
    .feature h2 {
      color: #333;
      font-size: 24px;
      margin-bottom: 10px;
    }
    
    .feature p {
      color: #666;
    }
    
    .feature ul {
      color: #666;
      line-height: 1.5;
    }
    
    .course-info {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }
    
    .course-info p {
      color: #333;
      font-weight: bold;
    }
    
    .register-button {
        background-color: #dacddd; 
  border: none;
  color:var(--white);
   border-radius: 10px;
  
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  cursor: pointer;
  
    }
    
  </style>
</head>
<body>
  <div class="container">
    
    <div class="feature">
      <h2>Description</h2>
      <p>Welcome to the world of acrylic painting an art world full of versatility and bright , bold colors. <br>
        Because acrylics are water based , it offers opacity that makes this medium especially appealing beginners</p>
    </div>
    
    <div class="feature">
      <h2>Course Outline :</h2>
      <ul>
        <li>- Introduction to basic painting techniques</li>
        <li>- Color theory and mixing</li>
        <li>- Still life and landscape painting</li>
        <li>- Portraiture</li>
        <li>- Exploring different mediums (acrylic, watercolor, oil)</li>
        <li>- Composition and perspective</li>
      </ul>
    </div>
    
    <div class="feature">
      <h2>Objectives :</h2>
      <ul>
        <li>- Develop fundamental painting skills</li>
        <li>- Understand color theory and application</li>
        <li>- Create expressive and visually appealing artwork</li>
        <li>- Explore different painting techniques and mediums</li>
        <li>- Master composition and perspective in painting</li>
      </ul>
    </div>
    <div class="feature">
    <div class="course-info">
      <p>- Price : $99</p>
      <p>- Time : Mondays and Wednesdays, 6 PM - 8 PM</p>
      <p>- Duration : 8 weeks</p>
    </div>
    </div>
<center>
    <h3>Register in our course :</h3><br>
<button class="register-button">
<a href="signup.php" >Click here</a></button>
</center>
    </div>
    <br><br>
    <?php require "footer.php";?>
  </div>

</body>
</html>
