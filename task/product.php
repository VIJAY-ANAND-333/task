<?php
include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $title= $_POST["title"];
    $price=$_POST['price'];

    $cartId = $_POST['id'];
    $sql="SELECT * from `products` where id='$cartId'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    $cart=$row['image'];

    // $uploadDir = "uploads/"; // Directory where you want to store the uploaded images
    // $uploadFile = $uploadDir . basename($_FILES["file"]["name"]);
    // $name=$_FILES['image']['name'];

    // if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadFile)) {
    //     echo "The image file has been uploaded successfully.";
    // } else {
    //     echo "Sorry, there was an error uploading your file.";
    // }


    // Do something with the data

    $sql="INSERT INTO `cart`(`title`, `price`,`image`,`qty`, `total`) 
    VALUES ('$title','$price','$cart','1','0')";
    $res=mysqli_query($conn,$sql);
    header('location:cart-page.php');

}
?>
