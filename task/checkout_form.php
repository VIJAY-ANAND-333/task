<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first = $_POST["first"];
    $email = $_POST["email"];
    $last=$_POST['last'];
    $address=$_POST['address'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];
    $mobile=$_POST['mobile'];
    $user_id=$_POST['user_id'];


    ////// calculate shipping 
    $countryid=$_POST['country'];
    
    $sql="SELECT * from shipping_charges where country_id='$countryid'";
    $res=mysqli_query($conn,$sql);
    $shippingInfo=mysqli_fetch_assoc($res);

    $amount=$shippingInfo['amount'];

    $sql="SELECT * from cart";
    $res=mysqli_query($conn,$sql);


    //$qty=$detail['qty'];

    $tqty=0;
    while ($row = mysqli_fetch_assoc($res)){
        $tqty += $row['qty'];
    }



    $tshipping=$amount*$tqty;
     

    $array=array(
        'amount'=>$amount,
        'shippingInfo'=>$shippingInfo,
        'tshipping'=>$tshipping
    );



    echo json_encode($array);








    $query="INSERT INTO `shipping_details`(`First`, `Last`, `email`, `country`, `address`, `city`, `state`, `zip`, `mobile`,
    `tshipping`,`amount`,`user_id`,`payment_status`,`status`) 
    VALUES ('$first','$last','$email','$country','$address','$city','$state','$zip','$mobile','$tshipping','$amount','$user_id','$payment_status','$status')";
    $res=mysqli_query($conn,$query); 
    echo $res;
    // For demonstration purposes, just echoing back the data.
} else {
    // Handle non-POST requests (optional).
    echo "This script expects a POST request.";
}
?>
