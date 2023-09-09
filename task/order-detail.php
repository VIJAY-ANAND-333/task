<?php
include('connection.php');
$id=$_GET['id'];
$sql="SELECT *  FROM shipping_details where id='$id'";
$res=mysqli_query($conn,$sql);
$order=mysqli_fetch_assoc($res);

$que="SELECT * FROM cart";
$orders=mysqli_query($conn,$que);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <li class="breadcrumb-item"><a class="white-text" href="#">My Account</a></li>
                    <li class="breadcrumb-item">Settings</li>
                </ol>
            </div>
        </div>
    </section>

    <section class=" section-11 ">
        <div class="container  mt-5">
            <div class="row">
                <div class="col-md-3">
                    <ul id="account-panel" class="nav nav-pills flex-column" >
                        <li class="nav-item ">
                            <a href="#"  class="nav-link font-weight-bold" role="tab" aria-controls="tab-login" aria-expanded="false"><i class="fas fa-user-alt"></i> My Profile</a>
                        </li>
                        <li class="nav-item active">
                            <a href="#"  class="nav-link font-weight-bold" role="tab" aria-controls="tab-register" aria-expanded="false"><i class="fas fa-shopping-bag"></i>My Orders</a>
                        </li>
                        <li class="nav-item">
                            <a href="wishlist.php"  class="nav-link font-weight-bold" role="tab" aria-controls="tab-register" aria-expanded="false"><i class="fas fa-heart"></i> Wishlist</a>
                        </li>
                        <li class="nav-item">
                            <a href="#"  class="nav-link font-weight-bold" role="tab" aria-controls="tab-register" aria-expanded="false"><i class="fas fa-lock"></i> Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a href="#"  class="nav-link font-weight-bold" role="tab" aria-controls="tab-register" aria-expanded="false"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="h5 mb-0 pt-2 pb-2">My Orders</h2>
                        </div>

                        <div class="card-body pb-0">
                            <!-- Info -->
                            <div class="card card-sm">
                                <div class="card-body bg-light mb-3">
                                    <div class="row">
                                        <div class="col-6 col-lg-3">
                                            <!-- Heading -->
                                            <h6 class="heading-xxxs text-muted">Order No:</h6>
                                            <!-- Text -->
                                            <p class="mb-lg-0 fs-sm fw-bold">
                                            <?php echo $order['id'];?>
                                            </p>
                                        </div>
                                        <div class="col-6 col-lg-3">
                                            <!-- Heading -->
                                            <h6 class="heading-xxxs text-muted">Shipped date:</h6>
                                            <!-- Text -->
                                            <p class="mb-lg-0 fs-sm fw-bold">
                                                <time datetime="2019-10-01">
                                                    01 Oct, 2019
                                                </time>
                                            </p>
                                        </div>
                                        <div class="col-6 col-lg-3">
                                            <!-- Heading -->
                                            <h6 class="heading-xxxs text-muted">Status:</h6>
                                            <!-- Text -->
                                            <p class="mb-0 fs-sm fw-bold">
                                            <?php if($order['status']=="pending"){?>
                                                <span class="badge bg-danger">Pending</span>
                                                <?php } elseif($order['status']=="shipped"){?>
                                                    <span class="badge bg-info">Shipped</span>
                                                <?php } else{?>
                                                    <span class="badge bg-success">Delivered</span>
                                                <?php } ?>
                                            </p>
                                        </div>
                                        <div class="col-6 col-lg-3">
                                            <!-- Heading -->
                                            <h6 class="heading-xxxs text-muted">Order Amount:</h6>
                                            <!-- Text -->
                                            <p class="mb-0 fs-sm fw-bold">
                                            $<?php echo $order['amount'];?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer p-3">

                            <!-- Heading -->
                            <h6 class="mb-7 h5 mt-4">Order Items (3)</h6>

                            <!-- Divider -->
                            <hr class="my-3">

                            <!-- List group -->
                            <ul>
                                <?php foreach($orders as $order){?>

                                <li class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-md-3 col-xl-2">
                                            <!-- Image -->
                                            <a href="product.html"><img src="images/product-1.jpg" alt="..." class="img-fluid"></a>
                                        </div>
                                        <div class="col">
                                            <!-- Title -->
                                            <p class="mb-4 fs-sm fw-bold">
                                                <a class="text-body" href="product.html"><?php echo $order['title'];?> x <?php echo $order['qty'];?></a> <br>
                                                <span class="text-muted">$40.00</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                                <li class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-md-3 col-xl-2">
                                            <!-- Image -->
                                            <a href="#"><img src="images/product-2.jpg" alt="..." class="img-fluid"></a>
                                        </div>
                                        <div class="col">
                                            <!-- Title -->
                                            <p class="mb-4 fs-sm fw-bold">
                                                <a class="text-body" href="#">Suede cross body Bag x 1</a> <br>
                                                <span class="text-muted">$49.00</span>
                                            </p>                                       
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-md-3 col-xl-2">
                                            <!-- Image -->
                                            <a href="#"><img src="images/product-3.jpg" alt="..." class="img-fluid"></a>

                                        </div>
                                        <div class="col">

                                            <!-- Title -->
                                            <p class="mb-4 fs-sm fw-bold">
                                                <a class="text-body" href="#">Sweatshirt with Pocket</a> <br>
                                                <span class="text-muted">$39.00</span>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>                      
                    </div>
                    
                    <div class="card card-lg mb-5 mt-3">
                        <div class="card-body">
                            <!-- Heading -->
                            <h6 class="mt-0 mb-3 h5">Order Total</h6>

                            <!-- List group -->
                            <ul>
                                <li class="list-group-item d-flex">
                                    <span>Subtotal</span>
                                    <span class="ms-auto">$128.00</span>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span>Tax</span>
                                    <span class="ms-auto">$0.00</span>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span>Shipping</span>
                                    <span class="ms-auto">$8.00</span>
                                </li>
                                <li class="list-group-item d-flex fs-lg fw-bold">
                                    <span>Total</span>
                                    <span class="ms-auto">$136.00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
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
</body>
</html>