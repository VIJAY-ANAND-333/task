<?php
require('connection.php');
$output='';
$response='';
$sql="SELECT * FROM models WHERE brand_id='".$_POST['id']."' ORDER BY id";
$result=mysqli_query($conn, $sql);
$output .= '<option value="" disabled selected>-Select Models-</option>';
while($row=mysqli_fetch_array($result)){
    $output .= '<option value="'.$row['brand_id'].'">' . $row['models']. '</option>';
}
$sql="SELECT image FROM category";
$res=mysqli_query($conn, $sql);
while($row1=mysqli_fetch_array($result)){
    $response=$row1['image'];
}


?>