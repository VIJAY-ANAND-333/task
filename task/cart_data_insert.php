<?php 
    $conn = mysqli_connect("localhost","root","","bike_models");
    $cartId = $_POST['cart_id'];
    $query = "SELECT * FROM brand WHERE id='$cartId'";
    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);

    $postId = $row['id'];
    $brand= $row['brand'];
    $price = $row['price'];
    $image=$row['image'];
    $qty=$row['qty'];

    $total=$price*$qty;

    $que = "INSERT INTO cart(title,price,image,qty,total) VALUES ('$brand','$price','$image','$qty','$total')";
    $res = mysqli_query($conn,$que);

    // Make name field unique In database table to cheak this condition
    if($res != true){
        echo "This ".$name." "."Is Already In Your Cart";
    }
    
?>