<?php 
    include('connection.php');
    if(isset($_POST['id'])){
        $id=$_POST['id'];

    $query = "SELECT * FROM cart where id='$id'";
    $result = mysqli_query($conn,$query);
    $res=mysqli_fetch_assoc($result);
    $originalprice=$res['price'];

    $qty=$res['qty'];
    $qty++;
    $total=$originalprice*$qty;
    echo $total;
        // $table="CREATE TABLE '$brand' 
        // id INT AUTO_INCREMENT PRIMARY KEY,
        // name varchar(50),
        // address text"
    $que = "UPDATE Cart SET qty='$qty',total='$total' WHERE id = '$id'";
    $output=mysqli_query($conn,$que);
    echo json_encode($output);
    $sql="SELECT * FROM `cart` where id='$id'";
    $res=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($res);
    echo json_encode($count);
    }
    

    



    // $query = "SELECT * FROM cart where id='$id'";
    // $result = mysqli_query($conn,$query);
    // $res=mysqli_fetch_assoc($result);
    // $qty=$res['qty'];
    // $id=$res['id'];
    // echo $id;
    // $qty++;


    
    // $itemcount=mysqli_num_rows($result);
    // if($itemcount > 1){
    //     $que = "UPDATE Cart SET qty='$qty' WHERE id = '$id'";
    //     mysqli_query($conn,$que);
    //     $sql='SELECT * FROM `cart`';
    //     $res=mysqli_query($conn,$sql);
    //     $count=mysqli_num_rows($res);
    //     echo json_encode($count);
    
    //     echo $itemcount;
    // }


   

    
    
    
    
?>