<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link href=
'https://fonts.googleapis.com/css?family=Sofia' 
          rel='stylesheet' />
<link rel="stylesheet" type="text/css" href="./css/about.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

    </style>
    <body>
    <?php require "adminheader.php";?>
<div margin=30%></div>
<?php
include './db_config/connect.php';
$query="SELECT * FROM contact order by date desc";
$result= mysqli_query($con,$query);
?>
<?php if(mysqli_num_rows($result)>0):?>
    <?php while ($msg=mysqli_fetch_assoc($result)):?>
        <div style="background-color:azure;display:flex;border:solid thin #aaa;border-radius:10px ;margin-bottom:10px;margin-top:10px;">
        <div style="flex:1;text-align:center;">
        <?=$msg['name']?>
    </div>
    <div style="flex:3;">
    <?=$msg['email']?>
    </div>
    <div style="flex:3;">
    <?=$msg['message']?>
    </div>
    <div>
        <div style="color:blueviolet"><?=date("js M,Y",strtotime($msg['date']))?></div>
        <br><br>
    </div>
    </div>
    <?php endwhile;?>
        <?php endif;?>
        <div margin=30%></div>
    </body>
</html>