<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['ADD_TO_CART'])){
        if(isset($_SESSION['cart'])){

        }else{
            $_SESSION['cart'][0]=array(
                'item_name'=>$item_name,
                'price'=>$price,
                'qty'=>$qty
            );
            print_r($_SESSION['cart']);
        }
    }
}

?>