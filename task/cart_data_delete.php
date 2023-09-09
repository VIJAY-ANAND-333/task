<?php 
    $conn = mysqli_connect("localhost","root","","bike_models");
    $cartId = $_POST['cart_id'];

    $que = "DELETE FROM cart WHERE id='$cartId'";
    $res = mysqli_query($conn,$que);
?>