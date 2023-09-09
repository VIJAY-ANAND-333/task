<?php


if($_SERVER['REQUEST_METHOD']==="POST"){

$server="localhost";
$username='root';
$password='';
$dbname='bike_models';

$conn=new mysqli("localhost","root","","bike_models");



$name=$_POST['name'];
$code=$_POST['code'];
$max_uses=$_POST['max_uses'];
$discount_amount=$_POST['discount_amount'];
$type=$_POST['type'];
$status=$_POST['status'];




$sql="INSERT INTO `coupon`(`type`,`name`,`code`,`max_uses`, `discount_amount`,`status`) 
VALUES ('$type','$name','$code','$max_uses','$discount_amount','$status')";
$res=mysqli_query($conn,$sql);
echo json_encode($res);

$data=array(
    'response'=>true,
    'message'=>'added successfully',
);


echo json_encode($data);

}





?>