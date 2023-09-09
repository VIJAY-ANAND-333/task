<?php 
if(!empty($_FILES)){ 
    // Include the database configuration file 
    
$host = "localhost";
$username = "root";
$password = "";
$database = "bike_models";

$conn = new mysqli($host, $username, $password, $database);

$sql="SELECT * FROM `products`";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$product_id=$row['unique_id'];
echo $product_id;
$sql="INSERT INTO  image(`product_id`) VALUES('$product_id')";
$res=mysqli_query($conn,$sql);

     
    // File path configuration 
    $uploadDir = "uploads/"; 
    $fileName = basename($_FILES['file']['name']); 
    $uploadFilePath = $uploadDir.$fileName; 
     
    // Upload file to server 
    if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)){ 
        // Insert file information in the database 
        
        $insert = $conn->query("INSERT INTO image (image,product_id) VALUES ('".$fileName."','$product_id')"); 
    } 
} 
?>