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
    $category=$_POST["category"];
    $status=$_POST['status'];

    //$imageData = $_FILES["imageInput"]["name"];

    $sql="SELECT * FROM sub_category where id='$id'";
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
    


    


    $sql = "UPDATE `sub_category` SET `fname`='$fname',`status`='$status',`slug`='$slug',`category`='$category'
     WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ./sub_category.php"); // Redirect back to admin page after editing
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
