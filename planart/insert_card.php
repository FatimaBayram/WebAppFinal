<?php
include('./db_config/connect.php');
if(isset($_POST['add'])){
    $NAME= $_POST['name'];
    $PRICE = $_POST['price'];
    $insert="INSERT INTO thecard (name,price) values ('$NAME','$PRICE')";
    mysqli_query($con,$insert);
}
   
header('location:card.php')
?>
