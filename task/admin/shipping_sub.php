<?php


if($_SERVER['REQUEST_METHOD']==="POST"){

$server="localhost";
$username='root';
$password='';
$dbname='bike_models';

$conn=new mysqli("localhost","root","","bike_models");



$country_id=$_POST['country_id'];
$amount=$_POST['amount'];




$sql="INSERT INTO `shipping_charges`(`country_id`,`amount`) VALUES ('$country_id','$amount')";
$res=mysqli_query($conn,$sql);
echo json_encode($res);
}




?>

