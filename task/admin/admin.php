<?php
session_start();

$server="localhost";
$username='root';
$password='';
$dbname='bike_models';

$conn=new mysqli("localhost","root","","bike_models");



$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE email = '$email'";
$res=mysqli_query($conn,$sql); 

$admin_username = "admin@admin.com";
    
$_SESSION['admin_username'] = $admin_username;
$_SESSION['islogged_in'] = true;

if ($res->num_rows == 1) {
    $row = mysqli_fetch_assoc($res);
    $storedPassword = $row['password'];

if (password_verify($password, $storedPassword)) {
   
    $_SESSION["flash_message"] = "Login successful! Welcome back, $admin_username!";
    echo "Login successful!";
    header('location: dashboard.php');
} else {
    echo "Incorrect password.";
    header('location:admin_login.php');
}
}else{
    echo "You are not authorized to access";
    header('location:admin_login.php');
}



?>