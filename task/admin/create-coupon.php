<?php
$host = "localhost";
    $username = "root";
    $password = "";
    $database = "bike_models";
    
    $conn = new mysqli($host, $username, $password, $database);
    $sql="SELECT * FROM brand";
    $rows=mysqli_query($conn,$sql);
    
	$conn = new mysqli($host, $username, $password, $database);
    $sql="SELECT * FROM brand";
    $brands=mysqli_query($conn,$sql);

?>
<?php
$host = "localhost";
    $username = "root";
    $password = "";
    $database = "bike_models";
    
    $conn = new mysqli($host, $username, $password, $database);
    $sql="SELECT * FROM category";
    $rows=mysqli_query($conn,$sql);

	$conn = new mysqli($host, $username, $password, $database);
    $sql="SELECT * FROM sub_category";
    $datas=mysqli_query($conn,$sql);
	
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
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
        <!-- Include jQuery UI -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
					<span class="brand-text font-weight-light">SHOP</span>
				</a>
				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user (optional) -->
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<!-- Add icons to the links using the .nav-icon class
								with font-awesome or any other icon font library -->
							<li class="nav-item">
								<a href="dashboard.php" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>Dashboard</p>
								</a>																
							</li>
							<li class="nav-item">
								<a href="categories.php" class="nav-link">
									<i class="nav-icon fas fa-file-alt"></i>
									<p>Category</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="sub_category.php" class="nav-link">
									<i class="nav-icon fas fa-file-alt"></i>
									<p>Sub Category</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="brand_list.php" class="nav-link">
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
								<h1>Create Coupon</h1>
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
					<form action="" method="post" id="discount">
					<div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card mb-3">
                                    <div class="card-body">								
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="Code">Code</label>
                                                    <input type="text" name="code" id="code" class="form-control" placeholder="Code">	
                                                </div>
                                            </div>
											<div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="Name">Name</label>
                                                    <input type="text" name="name" id="name" cols="30" rows="10"  placeholder="Name"/>
                                                </div>
                                            </div> 
                                            <div class="col-md-12">
                                                
                                            </div> 
											<label for="type">Type</label>
                                            <select name="type" id="type" class="form-control">
                                            <option value="percent">Percent</option>
                                            <option value="fixed">Fixed</option>
                                           </select>
										   <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">Block</option>
                                           </select>                                     
                                        </div>
                                    </div>	                                                                      
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h2 class="h4 mb-3">Pricing</h2>								
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="max_uses">Max uses</label>
                                                    <input type="text" name="max_uses" id="max_uses" class="form-control" placeholder="Price">	
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="discount_amount">Discount Amount</label>
                                                    <input type="text" name="discount_amount" id="discount_amount" class="form-control" placeholder="Compare Price">
                                                    <p class="text-muted mt-3">
                                                        To show a reduced price, move the product’s original price into Compare at price. Enter a lower value into Price.
                                                    </p>	
                                                </div>
                                            </div>                                            
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
                    maxFiles: 5,
                    addRemoveLinks: true,
                    acceptedFiles: "image/jpeg,image/png,image/gif",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }, success: function(file, response){
                        $("#image_id").val(response.id);
                    }
                });

            });
        </script>
		<script>
		$('#category').on('change',function(){
			var category_id=$(this).val();
			$.ajax({
				url:'ajax_onchange.php',
				method:'GET',
				data:{category_id:category_id},
				success:function(response){
					$('#sub_category_id').html(response);
					console.log(response);
					// var data = JSON.parse(response);
					// var message=data;
					// console.log(message);
					// $('#sub_category_id').find("option").not(":first").remove();
					// $.each(response['sub_categories'],function(key,item){
					// 	$('#sub_category_id').append(`<option value='${item.id}'>${item.fname}</option>`);	
					// });
				}
			});
		});

		$('#discount').submit(function(e){
			e.preventDefault();
			$('button[type="submit"').prop('disabled',true);
			var arr=$(this).serializeArray();
			$.ajax({
				url:'discount_sub.php',
				method:'post',
				data:arr,
				success:function(response){
					$('button[type="submit"').prop('disabled',false);
					if(response['status']==true){
						console.log(response);

					}
				}
			})
		});
		
			</script>


	</body>
</html>