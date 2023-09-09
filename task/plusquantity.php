<?php

$conn = mysqli_connect("localhost","root","","bike_models");
    $cartId = $_POST['cart_id'];
    $query = "SELECT * FROM brand WHERE id='$cartId'";
    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);

    $postId = $row['id'];
    $brand = $row['brand'];
    $price = $row['price'];
    $image=$row['image'];
    $qty=$row['qty'];

    $que = "INSERT INTO cart(id,brand,price,image,qty) VALUES ('$postId','$brand','$price','$image',$qty)";
    $res = mysqli_query($conn,$que);


?>