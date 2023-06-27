<?php 
    include('db_config/connect.php');

function passwordcheck($password_string)
{
    $password_string =trim($password_string);
    if($password_string =="")
    {
        die("Password not entered");

    }
    elseif(strlen($password_string)<8)
    {
        die("password must be more than 8 charecters in lenght");
    }
    elseif(!(preg_match('#[0-9]#',$password_string)))
    {
        die("Password must contain at least one number");
    }
    else
    {
     //Success, now process pasword
    }
}

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $date = date('Y-m-d H:i:s');
    passwordcheck($password);
    $query="INSERT INTO user (username,email,password,phonenumber,date) VALUES ('$username','$email','$password','$phonenumber','$date')";
    mysqli_query($con,$query);

    header('location:login.php')


?>