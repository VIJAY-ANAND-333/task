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


    $sql = "UPDATE `brand` SET `brand`='$brand',`image`='$image',`price`='$price',`qty`='$qty',`status`='$status'
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
