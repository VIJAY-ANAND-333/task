<?php


$server="localhost";
$username='root';
$password='';
$dbname='bike_models';

$conn=new mysqli("localhost","root","","bike_models");

$query="SELECT * FROM Category";
$categories=mysqli_query($conn,$query);

$sql="SELECT * FROM Products where is_featured=1";
$features=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bike-Site</title>
  <link rel="stylesheet" type="text/css" media="screen" href="index.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
.controls
{
    margin-top: 20px;
}
[data-slide="prev"]
{
    margin-right: 10px;
}
</style>



</head>

<body>
  <!-- navbar of bike site -->
  <section class="sticky-top">
  <nav class="navbar navbar-expand-lg navbar-light py-3 bg-dark ">
    <a class="navbar-brand text-white" href="#">
      <img src="assets/logo/logo.png" style="width: 80px; height: 70px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
          <a class="nav-link " href="#" style="color: #efc736;">Shop by Bike <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#" style="color: #efc736;">Motorcycle Accessories</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #efc736;">
            Riding gear
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-dark" href="admin/admin_login.php">Admin Login</a>
            <a class="dropdown-item text-dark" href="admin/dashboard.php">Admin Dashboard</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item " href="#" style="color: #efc736;">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled " href="#" style="color: #efc736;">Helmets and Accessories</a>
        </li>
      </ul>
      <div>
        <div type="button" class="btn" data-toggle="modal" data-target="#signInModal">
          <img src="./Images/user.png" alt="" style="height: 20px; background-color: #efc736;">
        </div>
        <div type="button" class="btn"><img src="./Images/bell.png" alt="" style="height: 20px; background-color: #efc736;"></div>
        <div type="button" class="btn"><img src="./Images/heart.png" alt="" style="height: 20px;background-color: #efc736;"></div>
        <div type="button" class="btn"><img src="./Images/shopping-cart.png" alt="" style="height: 20px;background-color: #efc736;"></div>
      </div>
    </div>
  </nav>



<!-- Sign In Modal -->


<!-- search bar of bike site  -->
  <div class="bg-warning py-2 d-flex justify-content-center">
    <form class="form-inline">
      <input class="form-control  mr-sm-2 mb-2 mb-sm-0 px-5" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 px-4 my-sm-0 text-white bg-primary rounded-pill"
        type="submit"><img src="./Images/loupe.png" alt="" style="height: 1rem;"></button>
    </form>
  </div>
</section>


  <!-- part 1 of bike-site -->
  <section class="mt-3 d-flex justify-content-center align-items-center" style="margin-right: -10px !important; background-color: #000000 ;">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-7">
        <div id="carouselExampleIndicators" class="carousel slide ml-lg-5 " data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://bandidospitstop.com/cdn/shop/files/bmw_1728x.webp?v=1684741854"
                alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://bandidospitstop.com/cdn/shop/files/bmw_1728x.webp?v=1684741854"
                alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://bandidospitstop.com/cdn/shop/files/bmw_1728x.webp?v=1684741854"
                alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-lg col-lg-5  mt-4 mt-lg-0 ">
        <div class="col-lg-9 col-md-12 col-12 ml-lg-5 mb-3">
          <div class="card">
            <img src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/ather_screen_guard_copy.webp?v=1686378881"
              class="card-img-top" alt="Ather 450 X">
          </div>
        </div>
        <div class="col-lg-9 col-md-12 col-12 ml-lg-5 mb-3">
          <div class="card">
            <img
              src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/back-pack_914242ef-f6b8-4dfd-8c15-b2d0a4d05a1e.gif?v=1686379343"
              class="card-img-top" alt="Backpack">
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- part 2 of bike site -->
  <div class=" " style="background-color: #000000 ;">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-4">
        <img src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/aircraft-led.gif?v=1678857968" alt=""
          class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-4">
        <img
          src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/below190_b5c38b98-ad31-44ed-bd74-b90bde3ad273.png?v=1679032182"
          alt="" class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-4">
        <img src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/glove.webp?v=16787865588" alt=""
          class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-6 ml-auto p-4">
        <img
          src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/jacket_f54a812a-50af-4e0e-a2e3-0f67513a5bea.webp?v=1678786558"
          alt="" class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6  mx-auto p-4">
        <img src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/kty-helmet.gif?v=1678786563" alt=""
          class="img-fluid">
      </div>
    </div>
  </div>




  <!-- part 3 of page? -->
  <section class="py-8 px-5 " >


    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4">
          <div class="font-weight-bold h4 text-white" >SHOP BY BIKE</div>
        </div>
        <div class="col-md-8 d-flex justify-content-end">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="searchBrandDropdown"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Search Brand
            </button>
            <div class="dropdown-menu" aria-labelledby="searchBrandDropdown">
              <a class="dropdown-item" href="#">Brand 1</a>
              <a class="dropdown-item" href="#">Brand 2</a>
              <a class="dropdown-item" href="#">Brand 3</a>
            </div>
          </div>
          <div class="dropdown ml-2">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="searchModelDropdown"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Search Model
            </button>
            <div class="dropdown-menu" aria-labelledby="searchModelDropdown">
              <a class="dropdown-item" href="#">Model 1</a>
              <a class="dropdown-item" href="#">Model 2</a>
              <a class="dropdown-item" href="#">Model 3</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="owl-carousel owl-theme">
      <div class="item">
        <div class="text-center"><img src="https://bandidospitstop.com/cdn/shop/collections/tiger_720x.jpg?v=1635681604"
            alt="">
          <h6 style="color: #ebebeb;">Triumph</h6>
        </div>
      </div>
      <div class="item">
        <div class="text-center"><img
            src="https://bandidospitstop.com/cdn/shop/collections/Impulse_200_540x.jpg?v=1615472927" alt="">
          <h6 style="color: #ebebeb;">Impulse</h6>
        </div>
      </div>
      <div class="item">
        <div class="text-center"><img src="https://bandidospitstop.com/cdn/shop/collections/NINJA_300_144a0623-9328-426a-bee1-5d56c0ffdddb_360x.jpg?v=1660624947"
            alt="">
          <h6 style="color: #ebebeb;">Royel Enfield</h6>
        </div>
      </div>
      <div class="item">
        <div class="text-center"><img
            src="https://bandidospitstop.com/cdn/shop/collections/Suzuki-V-Strom-SX-250_08b7d951-644f-4887-8bda-2b063b7f7c1e_360x.jpg?v=1658745458" alt="">
          <h6 style="color: #ebebeb;">Suzuki</h6>
        </div>
      </div>
      <div class="item">
        <div class="text-center"><img src="https://bandidospitstop.com/cdn/shop/collections/NINJA_300_2048x_14011ebb-77e4-4da9-97fc-6ef59f9f7905_360x.jpg?v=1634633133"
            alt="">
          <h6 style="color: #ebebeb;">kawasaki</h6>
        </div>
      </div>
      <div class="item">
        <div class="text-center"><img src="https://bandidospitstop.com/cdn/shop/collections/tiger_720x.jpg?v=1635681604"
            alt="">
          <h6 style="color: #ebebeb;">Triumph</h6>
        </div>
      </div>
      <div class="item">
        <div class="text-center"><img
            src="https://bandidospitstop.com/cdn/shop/collections/Impulse_200_540x.jpg?v=1615472927" alt="">
          <h6 style="color: #ebebeb;">Impulse</h6>
        </div>
      </div>
      <div class="item">
        <div class="text-center"><img src="https://bandidospitstop.com/cdn/shop/collections/tiger_720x.jpg?v=1635681604"
            alt="">
          <h6 style="color: #ebebeb;">Triumph</h6>
        </div>
      </div>
      <div class="item">
        <div class="text-center"><img
            src="https://bandidospitstop.com/cdn/shop/collections/Impulse_200_540x.jpg?v=1615472927" alt="">
          <h6 style="color: #ebebeb;">Impulse</h6>
        </div>
      </div>
      <div class="item">
        <div class="text-center"><img src="https://bandidospitstop.com/cdn/shop/collections/tiger_720x.jpg?v=1635681604"
            alt="">
          <h6 style="color: #ebebeb;">Triumph</h6>
        </div>
      </div>
      <div class="item">
        <div class="text-center"><img
            src="https://bandidospitstop.com/cdn/shop/collections/Impulse_200_540x.jpg?v=1615472927" alt="">
          <h6 style="color: #ebebeb;">Impulse</h6>
        </div>
      </div>
      <div class="item">
        <div class="text-center"><img src="https://bandidospitstop.com/cdn/shop/collections/tiger_720x.jpg?v=1635681604"
            alt="">
          <h6 style="color: #ebebeb;">Triumph</h6>
        </div>
      </div>
    </div>
  </section>




  <!-- part 4 of page? -->
  <section class="py-4" style="background-color: #000000 ;">
    <div class="ml-3">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-3">
            <img src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/ather_screen_guard_copy.webp?v=1686378881"
              class="card-img-top" alt="Ather 450 X" />
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-3">
            <img
              src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/back-pack_914242ef-f6b8-4dfd-8c15-b2d0a4d05a1e.gif?v=1686379343"
              class="card-img-top" alt="Backpack" />
          </div>
        </div>
        <div class="col-lg-4 col-md-10 col-sm-12 mx-auto">
          <div class="card mb-3">
            <img src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/wheel_cover.webp?v=1687341693"
              class="card-img-top" alt="Wheel Accessories" />
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- part 5 bike page -->
  <section class="pb-4" style="background-color: #000000 ;">
    <div class="ml-3">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
          <div class="card mb-3">
            <img
              src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/top-box_48991c20-7ea4-457d-b11d-1a893e9aa79f.png?v=1663667065"
              class="card-img-top" alt="Top Box" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
          <div class="card mb-3">
            <img src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/light.png?v=1663668570"
              class="card-img-top " alt="Auxiliary Light" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
          <div class="card mb-3">
            <img
              src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/Bash-Plate_fe7c2305-9543-41f1-9205-5d8f6ff2b6cb.png?v=1663667630"
              class="card-img-top" alt="Engine Guards and Skid Plate" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
          <div class="card mb-3">
            <img
              src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/carriers_18356af3-b028-4750-8f6c-531303892475.png?v=1663667469"
              class="card-img-top" alt="Carrier and Back Rack" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
          <div class="card mb-3">
            <img
              src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/crash-guard_e204ae61-3109-4a81-903b-7c4d17c473a0.png?v=1663668115"
              class="card-img-top" alt="Crash Guard" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
          <div class="card mb-3">
            <img
              src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/Windshield_dd2f3762-e511-4601-a497-54543d000902.png?v=1663666850"
              class="card-img-top" alt="Windshield" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
          <div class="card mb-3">
            <img
              src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/combo_cc060311-87db-485a-9d77-741bf7437fa5.png?v=1663667820"
              class="card-img-top" alt="Combo" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
          <div class="card mb-3">
            <img
              src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/Headlight-Grill_81710591-18d7-40a5-ba3f-9134c5afa566.png?v=1663667955"
              class="card-img-top" alt="Headlight Grill" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 ml-auto">
          <div class="card mb-3">
            <img
              src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/Saddle-stay-with-Carriers_7c8bbb00-5b90-466a-94e9-aae918cf5b73.png?v=1663667284"
              class="card-img-top" alt="Saddle Stay" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mr-auto">
          <div class="card mb-3">
            <img
              src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/Leverguards_84f162bf-ae38-4ce2-8c07-cfa6efaf6bb4.png?v=1663668349"
              class="card-img-top" alt="Lever Guard" />
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- part 6 bike page  -->

<section class="py-8 px-5" >
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <div class="font-weight-bold h4 text-white">AUXILIARY LIGHT</div>
      </div>
    </div>
  </div>

  <div class="owl-carousel owl-theme">
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGSCOUTLEDFOGLIGHT_540x.jpg?v=1615868949" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1 "><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1 "><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGSCOUTXLEDFOGLIGHT_1_540x.jpg?v=1615868994" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/FOG-LIGHT--NORMAL_01_540x.jpg?v=1648192898" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- part 7 bike page  -->

<section class="py-8 px-5" >
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <div class="font-weight-bold h4 text-white">AUXILIARY LIGHT</div>
      </div>
    </div>
  </div>

  <div class="owl-carousel owl-theme">
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGSCOUTLEDFOGLIGHT_540x.jpg?v=1615868949" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1 "><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1 "><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGSCOUTXLEDFOGLIGHT_1_540x.jpg?v=1615868994" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/FOG-LIGHT--NORMAL_01_540x.jpg?v=1648192898" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card ">
        <div class="">
        <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
      </div>
      
        <div class="card-footer">
            <p class="" tabindex="0">
              MadDog Scout LED Fog Light
            </p>
            <div class="d-flex justify-content-between">
            <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
            <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-----------------CATEGORY----------->
<section class="section-3">
        <div class="container">
            <div class="section-title">
                <h2>Categories</h2>
            </div>           
            <div class="row pb-3">
                <?php
            foreach($categories as $category){?>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <div class="left">
                            <img src="admin/uploads/<?php echo $category['image'];?>" alt="" class="img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2><?php echo $category['category'];?></h2>
                                <p>100 Products</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-----------------FEATURED Products---------->
    <section class="section-4 pt-5">
        <div class="container">
            <div class="section-title">
                <h2>Featured Products</h2>
            </div> 
            <div class="row pb-3">
                <?php 
                foreach($features as $featured){?> 
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <form action="product.php?id='<?php echo $featured['id'];?>'" method="post" enctype="multipart/form-data"> 
                            <input type="hidden" name="id" value="<?php echo $featured['id'];?>"/>           
                            <a href="" class="product-img"><img class="card-img-top" src="admin/uploads/<?php echo $featured['image']?>" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>
                            <input type="hidden" name="image" value="admin/uploads/<?php echo $featured['id'];?>" />                            
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php"><?php echo $featured['title'];?></a>
                            <input type="hidden" name="title" value="<?php echo $featured['title'];?>"/>
                            <div class="price mt-2">
                                <span class="h5"><strong>$<?php echo $featured['compared_price'];?></strong></span>
                                <input type="hidden" name="compared_price" value="<?php echo $featured['compared_price'];?>"/>
                                <span class="h6 text-underline"><del>$<?php echo $featured['price'];?></del></span>
                                <input type="hidden" name="price" value="<?php echo $featured['price'];?>"/>
                                <div class="product-action">
                              <input type="submit" value="ADD TO CART">                           
                            </div>
                               </form>
                            </div>
                        </div>                        
                    </div>                                               
                </div>
                <?php } ?>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-1.jpg" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-1.jpg" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-1.jpg" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-1.jpg" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-1.jpg" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-1.jpg" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-1.jpg" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>               
            </div>
        </div>
    </section>
    <!--------------product ends------------->

  <!-- part 8 of bike site -->
  <section class="py-4" style="background-color: #000000 ;">
    <div class="ml-3">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-3">
            <img
              src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/visor_77b4137c-49e7-4d06-be7d-c9f82ef93a7c.webp?v=1683181077"
              class="card-img-top" alt="Ather 450 X" />
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-3">
            <img src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/backrest_new.webp?v=1686890815"
              class="card-img-top" alt="Backpack" />
          </div>
        </div>
        <div class="col-lg-4 col-md-10 col-sm-12 mx-auto">
          <div class="card mb-3">
            <img
              src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/Brake_Pads_copy_60a34dd1-e93a-4c5b-91dc-3090bc6413d9.webp?v=1684987336"
              class="card-img-top" alt="Wheel Accessories" />
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- part 9 bike page  -->

  <section class="py-8 px-5" >
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4">
          <div class="font-weight-bold h4 text-white">AUXILIARY LIGHT</div>
        </div>
      </div>
    </div>
  
    <div class="owl-carousel owl-theme">
      <div class="item">
        <div class="card ">
          <div class="">
          <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGSCOUTLEDFOGLIGHT_540x.jpg?v=1615868949" class="card-img-top" alt="Product Image">
        </div>
        
          <div class="card-footer">
              <p class="" tabindex="0">
                MadDog Scout LED Fog Light
              </p>
              <div class="d-flex justify-content-between">
              <p  class="btn w-50 btn-primary mr-1 "><small>Add to cart</small></p>
              <p  class="btn w-50 btn-secondary ml-1 "><small>Buy Now</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card ">
          <div class="">
          <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGSCOUTXLEDFOGLIGHT_1_540x.jpg?v=1615868994" class="card-img-top" alt="Product Image">
        </div>
        
          <div class="card-footer">
              <p class="" tabindex="0">
                MadDog Scout LED Fog Light
              </p>
              <div class="d-flex justify-content-between">
              <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
              <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card ">
          <div class="">
          <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
        </div>
        
          <div class="card-footer">
              <p class="" tabindex="0">
                MadDog Scout LED Fog Light
              </p>
              <div class="d-flex justify-content-between">
              <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
              <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card ">
          <div class="">
          <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
        </div>
        
          <div class="card-footer">
              <p class="" tabindex="0">
                MadDog Scout LED Fog Light
              </p>
              <div class="d-flex justify-content-between">
              <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
              <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card ">
          <div class="">
          <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
        </div>
        
          <div class="card-footer">
              <p class="" tabindex="0">
                MadDog Scout LED Fog Light
              </p>
              <div class="d-flex justify-content-between">
              <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
              <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card ">
          <div class="">
          <img src="https://bandidospitstop.com/cdn/shop/products/FOG-LIGHT--NORMAL_01_540x.jpg?v=1648192898" class="card-img-top" alt="Product Image">
        </div>
        
          <div class="card-footer">
              <p class="" tabindex="0">
                MadDog Scout LED Fog Light
              </p>
              <div class="d-flex justify-content-between">
              <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
              <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card ">
          <div class="">
          <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
        </div>
        
          <div class="card-footer">
              <p class="" tabindex="0">
                MadDog Scout LED Fog Light
              </p>
              <div class="d-flex justify-content-between">
              <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
              <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card ">
          <div class="">
          <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
        </div>
        
          <div class="card-footer">
              <p class="" tabindex="0">
                MadDog Scout LED Fog Light
              </p>
              <div class="d-flex justify-content-between">
              <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
              <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card ">
          <div class="">
          <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
        </div>
        
          <div class="card-footer">
              <p class="" tabindex="0">
                MadDog Scout LED Fog Light
              </p>
              <div class="d-flex justify-content-between">
              <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
              <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card ">
          <div class="">
          <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
        </div>
        
          <div class="card-footer">
              <p class="" tabindex="0">
                MadDog Scout LED Fog Light
              </p>
              <div class="d-flex justify-content-between">
              <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
              <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card ">
          <div class="">
          <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
        </div>
        
          <div class="card-footer">
              <p class="" tabindex="0">
                MadDog Scout LED Fog Light
              </p>
              <div class="d-flex justify-content-between">
              <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
              <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card ">
          <div class="">
          <img src="https://bandidospitstop.com/cdn/shop/products/MADDOGALPHALEDFOGLIGHT_2_540x.jpg?v=1615868822" class="card-img-top" alt="Product Image">
        </div>
        
          <div class="card-footer">
              <p class="" tabindex="0">
                MadDog Scout LED Fog Light
              </p>
              <div class="d-flex justify-content-between">
              <p  class="btn w-50 btn-primary mr-1"><small>Add to cart</small></p>
              <p  class="btn w-50 btn-secondary ml-1"><small>Buy Now</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- part 10 of bike site -->

  <section class="py-4" style="background-color: #000000 ;">
    <div class="ml-3">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-3">
            <img src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/EXHAUST.webp?v=1683607751"
              class="card-img-top" alt="Ather 450 X" />
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-3">
            <img src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/headlight.webp?v=1683607751"
              class="card-img-top" alt="Backpack" />
          </div>
        </div>
        <div class="col-lg-4 col-md-10 col-sm-12 mx-auto">
          <div class="card mb-3">
            <img src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/rain_coats.webp?v=1683179067"
              class="card-img-top" alt="Wheel Accessories" />
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- part 11 of bike site -->
  <section class="py-4" style="background-color: #000000 ;">
    <div class="ml-3">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-3">
            <img src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/Bluetooth-Headset.png?v=1675655238"
              class="card-img-top" alt="Ather 450 X" />
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-3">
            <img
              src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/carrier_d4087486-7bd9-40af-8306-65aa895542f9.png?v=1678682692"
              class="card-img-top" alt="Backpack" />
          </div>
        </div>
        <div class="col-lg-4 col-md-10 col-sm-12 mx-auto">
          <div class="card mb-3">
            <img src="https://cdn.shopify.com/s/files/1/0519/0084/2163/files/indicator-gif.gif?v=1677661604"
              class="card-img-top" alt="Wheel Accessories" />
          </div>
        </div>
      </div>
    </div>
  </section>
  


  <!-- footer of bike site -->

  <div class="footer mt-auto  text-white py-4" style="background-color: #efc736;">
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







<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signInModalLabel">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter your Username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your Password">
          </div>
          <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary text-white"> <a class="text-white" href="./resister.html">Sign Up</a> </button>
      </div>
    </div>
  </div>
</div>



  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    });
    $(document).ready(function(e){
      $('#ajax').on('submit',function(){
        var id=$(this).val();
        alert(id);
      });

    });
  </script>
</body>

</html>