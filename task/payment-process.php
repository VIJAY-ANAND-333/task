<?php


require 'razor-pay/razorpay-php/Razorpay.php';
//require 'vendor/autoload.php';
include('connection.php');
$sql="Select * from `cart`";
$products=mysqli_query($conn,$sql);
$tsum=0;
while ($row = mysqli_fetch_assoc($products)){
    $tsum += $row['total'];
    }

use Razorpay\Api\Api;
$key_id='rzp_test_jA0z0izUxCs2A4';
$secret='20HIFOqBjqZO2NN9IUXr2TDv';

$api = new Api($key_id, $secret);

$data = [
    'amount' => 1000, // Amount in paisa (e.g., 1000 paisa = ₹10)
    'currency' => 'INR',
    'receipt' => 'order_rcptid_11',
    'order_id'=>111111,
    'payment_capture' => 1, // Auto-capture the payment
    'qty'=>1
];

// $razorpayOrder = $api->order->create($orderData);
$razorpayOrderId = $razorpayOrder['id'];
//$_SESSION['razorpay_order_id'] = $razorpayOrderId;
$displayAmount = $amount = $orderData['amount'];

$order = $api->order->create($data);

$order_id = $order->id;





$json = json_encode($data);
$url='https://pages.razorpay.com/livingarts2021';

header("Location: {$order->$url}");
include('checkout/manual.php');
?>