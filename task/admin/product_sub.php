<?php

session_start();
if($_SERVER['REQUEST_METHOD']==="POST" && isset($_FILES["imageInput"])){

$server="localhost";
$username='root';
$password='';
$dbname='bike_models';

$conn=new mysqli("localhost","root","","bike_models");




$title=$_POST['title'];
$status=$_POST['status'];
$description=$_POST['description'];
$price=$_POST['price'];
$slug=$_POST['slug'];
$sku=$_POST['sku'];
$compared_price=$_POST['compared_price'];
$barcode=$_POST['barcode'];
$category=$_POST['category'];
$sub_category_id=$_POST['sub_category_id'];
$status=$_POST['status'];
$is_featured=$_POST['is_featured'];
$barcode=$_POST['barcode'];
$brand_id=$_POST['brand_id'];
$qty=$_POST['qty'];

// Set the destination folder for uploads
$uploadFolder = 'uploads/';

if (!file_exists($uploadFolder)) {
    // Create the uploads folder if it doesn't exist
    mkdir($uploadFolder, 0777, true);
}


$imageData = $_FILES["imageInput"]["name"];
// Check if any files were uploaded
if (!empty($_FILES['imageInput'])) {
    $tempFile = $_FILES['imageInput']['tmp_name'];
    $targetFile = $uploadFolder . $_FILES['imageInput']['name'];
    $name=$_FILES['imageInput']['name'];

    // Move the uploaded file to the desired location
    if (move_uploaded_file($tempFile, $targetFile)) {
        echo 'File uploaded successfully!';
    } else {
        echo 'Error uploading file.';
    }
}
















$sql="INSERT INTO `products`(`title`, `slug`,`description`, `category_id`, `sub_category_id`, `brand_id`, `is_featured`, `SKU`,
 `BARCODE`, `QTY`, `status`,`price`,`compared_price`,`image`) VALUES ('$title','$slug','$description','$category','$sub_category_id','$brand_id','$is_featured',
 '$sku','$barcode','$qty','$status','$price','$compared_price','$name')";
$res=mysqli_query($conn,$sql);

$_SESSION['flash']="updated";

$data=array(
    'message'=>'Updated successfully',
    'image_id'=>$unique_id,
    'status'=>true
);


echo json_encode($data);
}




?>

