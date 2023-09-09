<?php

session_start();

if($_SERVER['REQUEST_METHOD']==="POST"){

$server="localhost";
$username='root';
$password='';
$dbname='bike_models';

$conn=new mysqli("localhost","root","","bike_models");

$id=$_POST['id'];

$amount=$_POST['amount'];
$country_id=$_POST['country_id'];



$sql="UPDATE `shipping_charges` SET `amount`='$amount',`country_id`='$country_id' WHERE id='$id'";
$res=mysqli_query($conn,$sql);
echo json_encode($res);


// Set a flash message
}




?>

