<!DOCTYPE html>
<html>
  <head>
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css" href="./css/contact.css">
    <link rel="stylesheet" type="text/css" href="./css/about.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   
    </head>
    <body>
    <?php require "header.php";?>
    <br>
    <br>
<center>
    <form action="contact_action.php"  method="post">
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
        <h1>Contact us</h1>
        <?php
        if(isset($_POST['submit']))
        {
          if($email !== 1)
          {
            echo("<div class='error' style='color:red !important;'>Email invalid</div>");
          }
        }
        ?>
        <input type="text" name="name" placeholder="Name :" required>
        <input type="email" name="email" placeholder="Email :" required>
        <textarea name="message" placeholder="Message :" rows="5"></textarea>
        <button type="submit" href="/">Submit</button>
      </div>
    </form>
</center>
<br>
<br>
<?php require "footer.php";?>
  </body>
</html>