<?php


$options = [
    'cost' => 12,
];
include('connection.php');

$fname=$_POST['fname'];
$last_name=$_POST['last_name'];
$mobile=$_POST['mobile'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
$email=$_POST['email'];
$birthday=$_POST['birthday'];
$gen=$_POST['gen'];


$sql="INSERT INTO `register` (`fname`, `last_name`, `gen`, `email`, `mobile`, `birthday`,`password`) VALUES ( '$fname', '$last_name', '$gen', '$email', '$mobile', '$birthday','$password');";
mysqli_query($conn,$sql);

?>