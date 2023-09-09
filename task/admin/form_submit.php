<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["imageInput"])) {
    // Database connection setup (replace with your own credentials)
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "bike_models";
    
    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $imageData = $_FILES["imageInput"]["name"];
    echo $imageData;
    $price=$_POST['price'];
    $qty=$_POST['qty'];
    $category=$_POST['category'];
    $status=$_POST['status'];

    $sql = "INSERT INTO `category`(`category`, `image`, `price`, `qty`, `status`) VALUES ('$category','$imageData','$price','$qty','$status')";
    move_uploaded_file($_FILES['imageInput']['tmp_name'],'uploads/'.$imageData);
    if ($conn->query($sql) === TRUE) {
        echo "Image uploaded and saved to the database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
