<?php

include('connection.php');
$country_id=$_POST['country_id'];

$sql="SELECT * FROM shipping_charges where country_id='$country_id'";
$res=mysqli_query($conn,$sql);


$sql="Select * from `cart`";
$products=mysqli_query($conn,$sql);
$tsum=0;
while ($row = mysqli_fetch_assoc($products)){
    $tsum += $row['total'];
}

$sql="Select * from `cart`";
$products=mysqli_query($conn,$sql);
$tqty=0;
while ($row = mysqli_fetch_assoc($products)){
    $tqty += $row['qty'];
}



$query="SELECT * FROM shipping_charges where country_id='$country_id'";
$res=mysqli_query($conn,$query);
$rows=mysqli_fetch_assoc($res);
//$shippingamount=$rows['amount'];
if($rows!=""){

    $shippingcharge=$rows['amount'];
    $grand=$tsum+($shippingcharge*$tqty);
    $data=array(
        'grand'=>$grand,
        'shipping'=>$shippingcharge,
        'tqty'=>$tqty,
        'tsum'=>$tsum,
        'status'=>true
    );
    echo json_encode($data);
}

?>