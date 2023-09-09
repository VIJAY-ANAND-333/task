<?php

include('connection.php');

$codes=$_GET['code'];
print_r($codes);

$sql="SELECT * FROM `coupon` where code='$codes'";
$res=mysqli_query($conn,$sql);
$code=mysqli_fetch_assoc($res);

if($code==""){
    $response=array(
        'status'=>false,
        'message'=>'invalid discount coupon'
    );

}


$discount=$code['discount_amount'];
echo $discount;

$sql="Select * from `cart`";
$products=mysqli_query($conn,$sql);
$tsum=0;
while ($row = mysqli_fetch_assoc($products)){
    $tsum += $row['total'];
}



$query="SELECT * FROM shipping_charges";
$res=mysqli_query($conn,$query);
$rows=mysqli_fetch_assoc($res);
$shippingamount=$rows['amount'];

//$invoice=$tsum-$discount+$shippingamount;


if($code['type']=="Percent"){
    $discount=($code['discount_amount']/100)*$tsum;
    $invoice=$tsum+$shippingamount-$discount;
}else{
    $invoice=$tsum-$discount+$shippingamount;
}

$array=array(
    'code'=>$codes,
    'status'=>true,
    'message'=>'applied coupon',
    'shipping'=>$shippingamount,
    'discount'=>$discount,
    'invoice'=>$invoice
);
echo json_encode($array);





?>