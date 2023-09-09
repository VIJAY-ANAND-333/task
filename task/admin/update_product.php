<?php

session_start();

if($_SERVER['REQUEST_METHOD']==="POST"){

$server="localhost";
$username='root';
$password='';
$dbname='bike_models';

$conn=new mysqli("localhost","root","","bike_models");

$id=$_POST['id'];

$title=$_POST['title'];
$status=$_POST['status'];
$description=$_POST['description'];
$price=$_POST['price'];
$slug=$_POST['slug'];
$sku=$_POST['sku'];
$compared_price=$_POST['compared_price'];
$barcode=$_POST['barcode'];
$category_id=$_POST['category_id'];
$sub_category_id=$_POST['sub_category_id'];
$status=$_POST['status'];
$is_featured=$_POST['is_featured'];
$barcode=$_POST['barcode'];
$brand_id=$_POST['brand_id'];
$qty=$_POST['qty'];




$sql="UPDATE `products` SET `title`='$title',`slug`='$slug',`description`='$description',`category_id`='$category_id',`sub_category_id`='$sub_category_id',`brand_id`='$brand_id',`is_featured`='$is_featured',`SKU`='$sku',`BARCODE`='$barcode',`QTY`='$qty',`status`='$status',`compared_price`='$compared_price' WHERE id='$id'";
$res=mysqli_query($conn,$sql);

// Set the flash message
$_SESSION['flash_message'] = "Updated successfully.";

// Redirect to another page
header("Location: .php");


$data=array(
    'message'=>'Updated successfully',
    'status'=>true
);
echo json_encode($data);



// Set a flash message
}




?>

