<?php 

include("connection.php");



$query = "SELECT * FROM category"; 
$res = mysqli_query($conn,$query);

$output = " ";


  if (mysqli_num_rows($res) < 1) {
  	$output .= "No Item";
  }


  while ($row = mysqli_fetch_array($res)) {

  	 $output .= "<div class='col-md-3 shadow-sm'>
        <img src='admin/uploads/".$row['image']."' style='height:250px;'>
        <h5 class='text-center'>".$row['category']."</h5>
        <h5 class='text-center'>$".$row['price']."</h5>
        <input type='hidden' name='price' id='price".$row['id']."' value='".$row['price']."'>
        <input type='hidden' name='name' id='name".$row['id']."' value='".$row['category']."'>
        <input type='number' name='quantity' id='quantity".$row['id']."' class='form-control' value='1'>

        <input type='submit' name='add_to_cart' class='btn btn-warning my-2 add' value='Add To cart' id='".$row['id']."' style='margin-left:55px;'>


  	 </div>";
  	   
  }


 echo $output;


 ?>