<?php


$server="localhost";
$username='root';
$password='';
$dbname='bike_models';

$conn=new mysqli("localhost","root","","bike_models");

$output='<option value=""> Select One </option>';
$category_id=$_GET['category_id'];

$sql="SELECT * FROM sub_category WHERE category_id='$category_id'";
$result=mysqli_query($conn, $sql);

while($row=mysqli_fetch_array($result)){
    $output .= '<option value="'.$row['id'].'">' . $row['fname']. '</option>';
}

echo $output;
?>
