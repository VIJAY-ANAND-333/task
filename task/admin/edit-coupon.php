<?php

session_start();

if($_SERVER['REQUEST_METHOD']==="POST"){

$server="localhost";
$username='root';
$password='';
$dbname='bike_models';

$conn=new mysqli("localhost","root","","bike_models");

$id=$_POST['id'];

$code=$_POST['code'];
$name=$_POST['name'];
$discount_amount=$_POST['discount_amount'];
$max_uses=$_POST['max_uses'];
$status=$_POST['status'];
$type=$_POST['type'];






$sql="UPDATE `coupon` SET `name`='$name',
`code`='$code',`type`='$type',`max_uses`='$max_uses',`discount_amount`='$discount_amount',`status`='$status' WHERE id='$id'";
$res=mysqli_query($conn,$sql);
echo json_encode($res);

header('location: coupon_list.php');


// Set a flash message
}




?>

