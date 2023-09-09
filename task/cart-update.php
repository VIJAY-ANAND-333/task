<?php
include('connection.php');       

$id = $_GET['id'];
$id      = $_GET['id'];
$item_id = $_GET['item_id'];
$qty     = $_GET['qty']; 

$myqry=mysqli_query($conn,"UPDATE cart_order_detail SET qty='$qty'                                          
                           WHERE cart_id='$cart_id'                                         
                           AND item_id='$item_id'                                           
                           AND id='$id'");

?>