<?php
include('connection.php');
if(isset($_GET['id'])){
    $key=$_GET['id'];

 // The term you want to search for
$sql = "SELECT * FROM brand WHERE id=$key";
$result = $conn->query($sql);


    while ($row = $result->fetch_assoc()) {
        //echo "$row";
    }
}
?>
