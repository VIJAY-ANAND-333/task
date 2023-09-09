<?php

require 'razor-pay/razorpay-php/Razorpay.php';    

include('connection.php'); 
        $conn = mysqli_connect("localhost","root","","bike_models");
        $query = "SELECT * FROM cart";
        $result = mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
        
        if($count==0){
            header('location:cart-page.php');
        }
        $sql="Select * from `cart`";
        $products=mysqli_query($conn,$sql);
        $tsum=0;
        while ($row = mysqli_fetch_assoc($products)){
            $tsum += $row['total'];
        }
        //echo $tsum;
        
$sql="SELECT * from countries";
$countries=mysqli_query($conn,$sql);
$get=mysqli_fetch_assoc($countries);
$id=$get['id'];

$query="SELECT * FROM shipping_charges where id='$id'";
$res=mysqli_query($conn,$query);
$rows=mysqli_fetch_assoc($res);
$shippingamount=$rows['amount'];

$countryid=$_GET['country_id'];
    
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
        'tsum'=>$tsum,
        'shippingInfo'=>$shippingInfo,
        'tshipping'=>$tshipping
    );

    echo json_encode($array);




echo $shippingamount;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page::: Ecommerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light py-3 bg-info ">
    <a class="navbar-brand text-white" href="/"><img src='assets/logo/logo.png' width='50' height='50' alt=''/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
          <a class="nav-link text-white" href="#">Shop by Bike <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Motorcycle Accessories</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Riding gear
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item text-white" href="#">Action</a>
            <a class="dropdown-item text-white" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-white" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled text-white" href="#">Helmets and Accessories</a>
        </li>
      </ul>
      <div>
        <div type="button" class="btn" data-toggle="modal" data-target="#signInModal">
          <img src="./Images/user.png" alt="" style="height: 20px;">
        </div>
        <div type="button" class="btn"><img src="./Images/bell.png" alt="" style="height: 20px;"></div>
        <div type="button" class="btn"><img src="./Images/heart.png" alt="" style="height: 20px;">
        1
        </div>
        <div type="button" class="btn"><button type="button" data-toggle="modal" data-target="#exampleModalCenter">
          <div id="carts">
          </div>
        <img src="./Images/shopping-cart.png" alt="" style="height: 20px;">
        </button></div>
      </div>
    </div>
</nav>
  <main>
    <section class="section-5 pt-3 pb-3 mb-3 bg-white">
        <div class="container">
            <div class="light-font">
                <ol class="breadcrumb primary-color mb-0">
                    <li class="breadcrumb-item"><a class="white-text" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="white-text" href="#">Shop</a></li>
                    <li class="breadcrumb-item">Checkout</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="section-9 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="sub-title">
                        <h2>Shipping Address</h2>
                    </div>
                    <div class="card shadow-lg border-0">
                        <div class="card-body checkout-form">
                            <div class="row">
                            
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="text" name="first" id="first" class="form-control" placeholder="First Name">
                                    </div>            
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="text" name="last" id="last" class="form-control" placeholder="Last Name">
                                    </div>            
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>            
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <select name="country_id" id="country_id" class="form-control">
                                            <option value="">Select a country</option>
                                        <?php
                                                foreach($countries as $country){?>
                                                <option value="<?php echo $country['id'];?>"><?php echo $country['country'];?></option>  
                                                <?php } ?>
                                                <option value="rest">Rest of the world</option> 
                                        </select>
                                    </div>            
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <textarea name="address" id="address" cols="30" rows="3" placeholder="Address" class="form-control"></textarea>
                                    </div>            
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="text" name="appartment" id="appartment" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)">
                                    </div>            
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <input type="text" name="city" id="city" class="form-control" placeholder="City">
                                    </div>            
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <input type="text" name="state" id="state" class="form-control" placeholder="State">
                                    </div>            
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <input type="text" name="zip" id="zip" class="form-control" placeholder="Zip">
                                    </div>            
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile No.">
                                    </div>            
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="number" name="user_id" id="user_id" class="form-control" placeholder="ID.">
                                    </div>            
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <textarea name="order_notes" id="order_notes" cols="30" rows="2" placeholder="Order Notes (optional)" class="form-control"></textarea>
                                    </div>            
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="col-md-6">
                    <div class="sub-title">
                        <h2>Order Summery</h3>
                    </div>                    
                    <div class="card cart-summery">
                        <div class="card-body">
                            <div class="d-flex justify-content-between pb-2">
                                <?php 
                                foreach($products as $product){?>

                                <div class="h6"><?php echo $product['title'];?> X <?php echo $product['qty'];?></div>
                                <div class="h6">$<?php echo $product['qty'];?></div>
                            </div>
                            <?php } ?>
                            
                            
                            <div class="d-flex justify-content-between summery-end">
                                <div class="h6"><strong>Subtotal</strong></div>
                                <div class="h6"><strong>$<?php echo $tsum;?></strong></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div class="h6"><strong>Shipping</strong></div>
                                <div class="h6"><span id="shipping">$</span></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div class="h6"><strong>Discount</strong></div>
                                <div class="h6"><span id="discount">$</span></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2 summery-end">
                                <div class="h5"><strong>Total</strong></div>
                                <div class="h5"><span id="grand">$</span></div>
                            </div>                            
                        </div>
                        <div class="input-group apply-coupan mt-4">
                        <input type="text" placeholder="Coupon Code" class="form-control" name="discount_code" id="discount_code">
                        <button class="btn btn-dark" type="button" id="apply-discount">Apply Coupon</button>
                        </div> 
                    </div>
                    <button id="rzp-button1">Pay</button>
                  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_jA0z0izUxCs2A4", // Enter the Key ID generated from the Dashboard
    "amount": <?php echo $tsum;?>*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "TESTING", //your business name
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        "name": "Saayan Biswas", //your customer's name
        "email": "saayan@gmail.com",
        "contact": "9000090000" //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}

</script>
                    <div class="card payment-form ">                        
                        <h3 class="card-title h5 mb-3">Payment Details</h3>
                        <div class="card-body p-0">
                            <div class="mb-3">
                                <label for="card_number" class="mb-2">Card Number</label>
                                <input type="text" name="card_number" id="card_number" placeholder="Valid Card Number" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="expiry_date" class="mb-2">Expiry Date</label>
                                    <input type="text" name="expiry_date" id="expiry_date" placeholder="MM/YYYY" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="expiry_date" class="mb-2">CVV Code</label>
                                    <input type="text" name="expiry_date" id="expiry_date" placeholder="123" class="form-control">
                                </div>
                            </div>
                            <div class="pt-4">
                                <a href="#" class="btn-dark btn btn-block w-100">Pay Now</a>
                            </div>
                        </div>                        
                    </div>

                          
                    <!-- CREDIT CARD FORM ENDS HERE -->
                    
                </div>
            </div>
        </div>
    </section>
</main>
  <div class="footer mt-auto bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-12">
                <h5>More About</h5>
                <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Green basket</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Affiliate</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-12">
                <h5>Help</h5>
                <ul class="list-unstyled">
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Cancellation Policy</a></li>
                    <li><a href="#">Shipping Policy</a></li>
                    <li><a href="#">Site Map</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <h5 class="mx-lg-5 mx-md-0">Get Social With Us</h5>
                <div class="d-flex justify-content-lg-center justify-content-md-start">
                    <button class="btn-secondary rounded-circle p-2 py-1  mx-2">
                        <img src="./Images/facebook.png" alt="" class="img-fluid">
                    </button>
                    <button class="rounded-circle btn-secondary p-2 py-1 mx-2">
                        <img src="./Images/instagram.png" alt="" class="img-fluid">
                    </button>
                    <button class="btn-secondary rounded-circle p-2 py-1 mx-2">
                        <img src="./Images/twitter.png" alt="" class="img-fluid">
                    </button>
                    <button class="btn-secondary rounded-circle p-2 py-1 mx-2">
                        <img src="./Images/pinterest-circular-logo-symbol.png" alt="" class="img-fluid">
                    </button>
                    <button class="btn-secondary rounded-circle p-2 py-1 mx-2">
                        <img src="./Images/youtube.png" alt="" class="img-fluid">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
        $('#form').on('submit',function(e){
            e.preventDefault();
            var form=$(this).serialize();
            $.ajax({
                url:'checkout_form.php',
                method:'post',
                data:form,
                success:function(data){
                    console.log(data);
                }
            })
        });
        $('#apply-discount').on('click',function(e){
            e.preventDefault();
            var code=$('#discount_code').val();
            $.ajax({
                url:'apply-discount.php',
                type:'GET',
                dataType:'json',
                data:{code: $('#discount_code').val(),country_id:$('#country_id').val()},
                success:function(response){
                    console.log(response.status);
                    if(response.status==true){
                        $('#discount').html('$ '+response.discount);
                        $('#shipping').html('$ '+response.shipping);
                        $('#grand').html('$ '+response.grand);
                        //console.log(response);

                    }
                },error:function(error){
                    console.log(error);
                }
            });
        });
        $('#country').on('change',function(e){
            e.preventDefault();
            $.ajax({
                url:'order.php',
                type:'POST',
                data:{country_id:$(this).val()},
                dataType:'json',
                success:function(response){
                     console.log(response)
                    if(response.status){
                        $('#shipping').html('$ '+response.shipping);
                        $('#grand').html('$ '+response.grand);
                    }
                },error:function(error){
                    console.log(error);
                }
            });
        });



        </script>
</body>
<style>
    .owl-carousel .owl-nav button.owl-prev,
    .owl-carousel .owl-nav button.owl-next {
      font-size: 45px;
      line-height: 1;
    }
/* card style start here  */
.col-item
{
    border: 2px solid #2323A1;
    border-radius: 5px;
    background: #FFF;
}
.col-item .photo img
{
    margin: 0 auto;
    width: 100%;
}

.col-item .info
{
    padding: 10px;
    border-radius: 0 0 5px 5px;
    margin-top: 1px;
}
.col-item:hover .info {
    background-color: rgba(215, 215, 244, 0.5); 
}
.col-item .price
{
    /*width: 50%;*/
    float: left;
    margin-top: 5px;
}

.col-item .price h5
{
    line-height: 20px;
    margin: 0;
}

.price-text-color
{
    color: #00990E;
}

.col-item .info .rating
{
    color: #003399;
}

.col-item .rating
{
    /*width: 50%;*/
    float: left;
    font-size: 17px;
    text-align: right;
    line-height: 52px;
    margin-bottom: 10px;
    height: 52px;
}

.col-item .separator
{
    border-top: 1px solid #FFCCCC;
}

.clear-left
{
    clear: left;
}

.col-item .separator p
{
    line-height: 20px;
    margin-bottom: 0;
    margin-top: 10px;
    text-align: center;
}

.col-item .separator p i
{
    margin-right: 5px;
}
.col-item .btn-add
{
    width: 50%;
    float: left;
}

.col-item .btn-add
{
    border-right: 1px solid #CC9999;
}

.col-item .btn-details
{
    width: 50%;
    float: left;
    padding-left: 10px;
}
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
.controls
{
    margin-top: 20px;
}
[data-slide="prev"]
{
    margin-right: 10px;
}

</style>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</html>