<?php


$server="localhost";
$username='root';
$password='';
$dbname='bike_models';

$conn = new mysqli($server, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $slug =$_POST["slug"];
    $status=$_POST['status'];

    //$imageData = $_FILES["imageInput"]["name"];

    $sql="SELECT * FROM brands_1 where id='$id'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);


    //$oldimage='uploads/'.$row['image'];
    //print_r($oldimage);

// if (file_exists($oldimage)) {
//     move_uploaded_file($_FILES['imageInput']['tmp_name'],'uploads/'.$imageData);
//     if (unlink($oldimage)) {
//         echo "Old image deleted successfully.";
//     } else {
//         echo "Failed to delete the old image.";
//     }
// } else {
//     echo "The old image does not exist.";
// }
    


    


    $sql = "UPDATE `brands_1` SET `fname`='$fname',`status`='$status',`slug`='$slug'
     WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ./brand_list.php"); // Redirect back to admin page after editing
        exit();
    } else {
        echo "Error updating record: ";
    }
}

$id = $_GET["id"];
$sql = "SELECT * FROM brands_1 WHERE id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
