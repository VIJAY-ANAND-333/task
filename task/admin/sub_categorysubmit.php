<?php


if($_SERVER['REQUEST_METHOD']==="POST"){

$server="localhost";
$username='root';
$password='';
$dbname='bike_models';

$conn=new mysqli("localhost","root","","bike_models");



$category=$_POST['category'];
$fname=$_POST['fname'];
$status=$_POST['status'];
$slug=$_POST['slug'];


$sql="INSERT INTO `sub_category`(`category`,`fname`, `status`, `slug`) VALUES ('$category','$fname','$status','$slug')";
$res=mysqli_query($conn,$sql);
echo json_encode($res);
}




?>