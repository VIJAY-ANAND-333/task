
<?php

session_start();
$host = "localhost";
    $username = "root";
    $password = "";
    $database = "bike_models";
    
    $conn = new mysqli($host, $username, $password, $database);
$sql="SELECT * from `image`";
$image=mysqli_query($conn,$sql);
$path=mysqli_fetch_assoc($image);
$imagepath=$path['image'];

// Definede is executed after the redirection




///////

$host = "localhost";
    $username = "root";
    $password = "";
    $database = "bike_models";
    
    $conn = new mysqli($host, $username, $password, $database);
    $sql="SELECT * FROM category";
    $categories=mysqli_query($conn,$sql);
    

    $id = $_GET["id"];
    $sql = "SELECT * FROM brand";
    $result = $conn->query($sql);

    /////////////products
	$id = $_GET["id"];
    $sql = "SELECT * FROM products where id='$id'";
    $products = $conn->query($sql);
	
	$product=mysqli_fetch_assoc($products);
	$pro_id=$product['category_id'];

	//// sub category
	$sql="SELECT * FROM `sub_category` where category_id='$pro_id'";
	$subcategories=mysqli_query($conn,$sql);

	$sql="SELECT * FROM category";
    $rows=mysqli_query($conn,$sql);
	$category=mysqli_fetch_assoc($rows);

	///brand
	$sql="SELECT * FROM brand";
    $brands=mysqli_query($conn,$sql);

	$sql="SELECT * from `images`";
	$res=mysqli_query($conn,$sql);


	

	?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel Shop :: Administrative Panel</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="assets/css/adminlte.min.css">
        <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
        <link rel="stylesheet" href="assets/plugins/dropzone/dropzone.css">
        <link rel="stylesheet" href="assets/css/custom.css">
	</head>
	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">

			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">

				<!-- Right navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
					  	<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>					
				</ul>

				<div class="navbar-nav pl-2">
					<ol class="breadcrumb p-0 m-0 bg-white">
						<li class="breadcrumb-item"><a href="products.html">Products</a></li>
						<li class="breadcrumb-item active">Create</li>
					</ol>
				</div>
				
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" data-widget="fullscreen" href="#" role="button">
							<i class="fas fa-expand-arrows-alt"></i>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
							<img src="img/avatar5.png" class='img-circle elevation-2' width="40" height="40" alt="">
						</a>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
							<h4 class="h4 mb-0"><strong>Saayan Biswas</strong></h4>
							<div class="mb-3">example@example.com</div>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<i class="fas fa-user-cog mr-2"></i> Settings								
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<i class="fas fa-lock mr-2"></i> Change Password
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item text-danger">
								<i class="fas fa-sign-out-alt mr-2"></i> Logout							
							</a>							
						</div>
					</li>
				</ul>
			</nav>
			<!-- /.navbar -->
			<!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<!-- Brand Logo -->
				<a href="#" class="brand-link">
					<img src="img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light">LARAVEL SHOP</span>
				</a>
				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user (optional) -->
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<!-- Add icons to the links using the .nav-icon class
								with font-awesome or any other icon font library -->
							<li class="nav-item">
								<a href="dashboard.html" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>Dashboard</p>
								</a>																
							</li>
							<li class="nav-item">
								<a href="categories.html" class="nav-link">
									<i class="nav-icon fas fa-file-alt"></i>
									<p>Category</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="subcategory.html" class="nav-link">
									<i class="nav-icon fas fa-file-alt"></i>
									<p>Sub Category</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="brands.html" class="nav-link">
									<svg class="h-6 nav-icon w-6 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
									  </svg>
									<p>Brands</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="products.html" class="nav-link">
									<i class="nav-icon fas fa-tag"></i>
									<p>Products</p>
								</a>
							</li>
							
							<li class="nav-item">
								<a href="#" class="nav-link">
									<!-- <i class="nav-icon fas fa-tag"></i> -->
									<i class="fas fa-truck nav-icon"></i>
									<p>Shipping</p>
								</a>
							</li>							
							<li class="nav-item">
								<a href="orders.html" class="nav-link">
									<i class="nav-icon fas fa-shopping-bag"></i>
									<p>Orders</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="discount.html" class="nav-link">
									<i class="nav-icon  fa fa-percent" aria-hidden="true"></i>
									<p>Discount</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="users.html" class="nav-link">
									<i class="nav-icon  fas fa-users"></i>
									<p>Users</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="pages.html" class="nav-link">
									<i class="nav-icon  far fa-file-alt"></i>
									<p>Pages</p>
								</a>
							</li>							
						</ul>
					</nav>
					<!-- /.sidebar-menu -->
				</div>
				<!-- /.sidebar -->
         	</aside>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Edit Product</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="products.html" class="btn btn-primary">Back</a>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<form action="" method="post" id="form" enctype="multipart/form-data">
					<div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card mb-3">
                                    <div class="card-body">								
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                <input type="hidden" name="id" value="<?php echo $product["id"]; ?>">
                                                    <label for="title">Title</label>
                                                    <input type="text" value="<?php echo $product['title'];?>" name="title" id="title" class="form-control" placeholder="Title">	
                                                </div>
                                            </div>
											<div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="description">Slug</label>
                                                    <input type="text"  value="<?php echo $product['slug'];?>" name="slug" id="slug" cols="30" rows="10"  placeholder="slug"/>
                                                </div>
                                            </div> 
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="description">Description</label>
                                                    <textarea name="description" id="description" cols="30" rows="10" class="summernote" placeholder="Description"><?php echo $product['description'];?>"</textarea>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>	                                                                      
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h2 class="h4 mb-3">Media</h2>								
                                        <div id="image" class="dropzone dz-clickable">
                                            <div class="dz-message needsclick">    
                                                <br>Drop files here or click to upload.<br><br>                                            
                                            </div>
                                        </div>
                                    </div>	                                                                      
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h2 class="h4 mb-3">Pricing</h2>								
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="price">Price</label>
                                                    <input  type="text" value="<?php echo $product['price'];?>" name="price" id="price" class="form-control" placeholder="Price">	
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="compare_price">Compare at Price</label>
                                                    <input type="text"  value="<?php echo $product['compared_price'];?>" name="compared_price" id="compared_price" class="form-control" placeholder="Compare Price">
                                                    <p class="text-muted mt-3">
                                                        To show a reduced price, move the product’s original price into Compare at price. Enter a lower value into Price.
                                                    </p>	
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>	                                                                      
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h2 class="h4 mb-3">Inventory</h2>								
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="sku">SKU (Stock Keeping Unit)</label>
                                                    <input type="text" name="sku"   value="<?php echo $product['SKU'];?>" id="sku" class="form-control" placeholder="sku">	
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="barcode">Barcode</label>
                                                    <input type="text" name="barcode"  value="<?php echo $product['BARCODE'];?>" id="barcode" class="form-control" placeholder="Barcode">	
                                                </div>
                                            </div>   
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="track_qty" name="track_qty" checked>
                                                        <label for="track_qty" class="custom-control-label">Track Quantity</label>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="number" min="0" name="qty" id="qty" class="form-control" placeholder="Qty">	
                                                </div>
                                            </div>                                         
                                        </div>
                                    </div>	                                                                      
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-body">	
                                        <h2 class="h4 mb-3">Product status</h2>
                                        <div class="mb-3">
                                            <select name="status" id="status" class="form-control">
                                                <option value="1" <?php echo $product['status']==1 ? "selected":''?>>Active</option>
                                                <option value="0" <?php echo $product['status']==0 ? "selected":''?>>Block</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> 
                                <div class="card">
								<div class="card-body">	
                                        <h2 class="h4  mb-3">Product category</h2>
                                        <div class="mb-3">
                                            <label for="category_id">Category</label>
                                            <select name="category_id" id="category_id" class="form-control">
												<option value="">Select Category</option>
												<?php foreach($rows as $row){?>
													<option value="<?php echo $row['id'];?>" <?php echo $product['category_id']==$row['id'] ? "selected":"";?> ><?php echo $row['category'];?></option>

                                                <?php } ?>
												</select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="sub_category_id">Sub category</label>
                                            <select name="sub_category_id" id="sub_category_id" class="form-control">
												<option value=''>select a sub_category</option>
												<?php foreach($subcategories as $sub_category){?>
													<option  <?php echo $product['sub_category_id']==$sub_category['id'] ? "selected":"";?> value="<?php echo $sub_category['id'];?>"><?php echo $sub_category['fname'];?></options>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div> 
                                <div class="card mb-3">
                                    <div class="card-body">	
                                        <h2 class="h4 mb-3">Product brand</h2>
                                        <div class="mb-3">
										<select name="brand_id" id="category" class="form-control">
										<?php foreach($brands as $brand){?>
													<option  value="<?php echo $brand['id'];?>" <?php echo $product['brand_id']==$brand['id'] ? "selected": "";?>><?php echo $brand['brand'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div> 
                                <div class="card mb-3">
                                    <div class="card-body">	
                                        <h2 class="h4 mb-3">Featured product</h2>
                                        <div class="mb-3">
                                            <select name="is_featured" id="is_featured" class="form-control">
                                                <option <?php echo $product['is_featured']==1 ? "selected" :'';?> value="1">Yes</option>
                                                <option <?php echo $product['is_featured']==0 ? "selected" : "";?> value="0">No</option>                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>                                 
                            </div>
                        </div>
						
						<div class="pb-5 pt-3">
							<button type="submit"  class="btn btn-primary">Create</button>
							<a href="products.html" class="btn btn-outline-dark ml-3">Cancel</a>
						</div>
					</div>
				    </form>
					<!-- /.card -->
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<footer class="main-footer">
				
				<strong>Copyright &copy; 2014-2022 AmazingShop All rights reserved.
			</footer>
			
		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src="assets/plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="assets/js/adminlte.min.js"></script>
		<!-- AdminLTE for demo purposes -->
        <!-- Summernote -->
        <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="assets/plugins/dropzone/dropzone.js"></script>
		<script src="assets/js/demo.js"></script>
        <script>
            Dropzone.autoDiscover = false;    
            $(function () {
                // Summernote
                $('.summernote').summernote({
                    height: '300px'
                });
               
                const dropzone = $("#image").dropzone({ 
                    url:  "images.php",
                    maxFiles: 6,
                    addRemoveLinks: true,
                    acceptedFiles: "image/jpeg,image/png,image/gif",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }, success: function(file, response){
                        $("#image_id").val(response.id);
                    }
                });

            });
		$('#category').on('change',function(){
			var category_id=$(this).val();
			alert(category_id);
			$.ajax({
				url:'ajax_onchange.php',
				method:'GET',
				datatype:'json',
				data:{category_id:category_id},
				success:function(response){
					 $('#sub_category_id').html(response);
					console.log(response);
					// var data = JSON.parse(response);
					// var message=data;
					// console.log(message);
					// $('#sub_category').find("option").not(":first").remove();
					// $.each(response['sub_category'],function(key,item){
					// 	$('#sub_category').append(`<option value='${item.id}'>${item.fname}</option>`);	
					// });
				}
			});
		});
			$('#form').submit(function(e){
				alert('te');
				e.preventDefault();
				$('button[type="submit"').prop('disabled',true);
				var arr=$(this).serializeArray();
				$.ajax({
					url:'update_product.php',
					method:'POST',
					data:arr,
					success:function(data){
						$('button[type="submit"').prop('disabled',false);
						if(data['status']==true){
							console.log(data);

						}
					}
				})
			})
			</script>


	</body>
</html>