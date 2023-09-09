<?php


$server="localhost";
$username='root';
$password='';
$dbname='bike_models';

$conn = new mysqli($server, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $brand = $_POST["brand"];
    $qty = $_POST["qty"];
    $price=$_POST["price"];
    $status=$_POST['status'];

    $imageData = $_FILES["imageInput"]["name"];

    $sql="SELECT * FROM brand where id='$id'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);


    $oldimage='uploads/'.$row['image'];
    print_r($oldimage);

if (file_exists($oldimage)) {
    move_uploaded_file($_FILES['imageInput']['tmp_name'],'uploads/'.$imageData);
    if (unlink($oldimage)) {
        echo "Old image deleted successfully.";
    } else {
        $oldimage='uploads/'.$row['image'];
    }
} else {
    echo "The old image does not exist.";
}
    


    


    $sql = "UPDATE `brand` SET `brand`='$brand',`image`='$imageData',`price`='$price',`qty`='$qty',`status`='$status'
     WHERE id='$id'";

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
