<?php


if($_SERVER['REQUEST_METHOD']==="POST"){

$server="localhost";
$username='root';
$password='';
$dbname='bike_models';

$conn=new mysqli("localhost","root","","bike_models");



$fname=$_POST['fname'];
$status=$_POST['status'];
$slug=$_POST['slug'];


$sql="INSERT INTO `brands_1`(`fname`, `status`, `slug`) VALUES ('$fname','$status','$slug')";
$res=mysqli_query($conn,$sql);
echo json_encode($res);
}




?>