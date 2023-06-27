<?php

include('./db_config/connect.php');
if(isset($_POST['upload'])){
    $NAME= $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE= $_FILES['image'];
    $image_location=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    $image_up="images/".$image_name;
    $insert="INSERT INTO products(name,price,image) values ('$NAME','$PRICE','$image_up')";
    mysqli_query($con,$insert);
}
    if (move_uploaded_file($image_location,'images/'.$image_name))
    {
        echo "<script>alert('connect')</script>";
    } 
     else{
        echo "<script>alert('NOT connect')</script>";
    }

header('location: index.php')
?>





