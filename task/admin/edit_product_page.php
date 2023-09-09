<?php


$server="localhost";
$username='root';
$password='';
$dbname='bike_models';

$conn = new mysqli($server, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
$id=$_GET['id'];
$title=$_POST['title'];
$status=$_POST['status'];
$description=$_POST['description'];
$price=$_POST['price'];
$slug=$_POST['slug'];
$sku=$_POST['sku'];
$compare_price=$_POST['compare_price'];
$barcode=$_POST['barcode'];
$category_id=$_POST['category_id'];
$sub_category_id=$_POST['sub_category_id'];
$status=$_POST['status'];
$is_featured=$_POST['is_featured'];
$barcode=$_POST['barcode'];
$brand_id=$_POST['brand_id'];
$qty=$_POST['qty'];



    $sql = "UPDATE `products` SET `title`='$title',`slug`='$Slug',`description`='$description',
	`category_id`='$category_id',`sub_category_id`='$sub_category_id',`brand_id`='$brand_id',`is_featured`='$is_featured',`SKU`='$SKU',`BARCODE`='$barcode',`QTY`='$qty',`status`='$status',`compared_price`='$compare_price' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ./categories.php"); // Redirect back to admin page after editing
        exit();
    } else {
        echo "Error updating record: ";
    }
}

$id = $_GET["id"];
$sql = "SELECT * FROM brand WHERE id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
