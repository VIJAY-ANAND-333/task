<?php

$server="localhost";
$username='root';
$password='';
$dbname='bike_models';

$conn = new mysqli($server, $username, $password, $dbname);


$id = $_GET["id"];
$sql = "SELECT * FROM coupon WHERE id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Administrative Panel</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="assets/css/adminlte.min.css">
		<link rel="stylesheet" href="assets/css/custom.css">
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
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
						<li class="breadcrumb-item"><a href="categories.html">Categories</a></li>
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
							<h4 class="h4 mb-0"><strong>Mohit Singh</strong></h4>
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
								<h1>EDIT Coupon</h1s>
							</div>
							<div class="col-sm-6 text-right">
								<a href="categories.html" class="btn btn-primary">Back</a>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="container-fluid">
						<div class="card">
							<div class="card-body">								
								<div class="row">
								<form action="edit-coupon.php"  method="post">
									<div class="col-md-6">
										<div class="mb-3">
                                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
											<label for="name">Name</label>
											<input type="text" name="name" value="<?php echo $row['name'];?>" id="name" class="form-control" placeholder="Name">	
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="code">Code</label>
											<input type="text" value="<?php echo $row['code'];?>" name="code" id="code" class="form-control" placeholder="Price">	
										</div>
									</div>
                                    <div class="col-md-6">
										<div class="mb-3">
											<label for="discount">Discount</label>
											<input type="number" value="<?php echo $row['discount_amount'];?>"  name="discount_amount" id="discount_amount" class="form-control" placeholder="discount">	
										</div>
									</div>	
                                    <div class="col-md-6">
										<div class="mb-3">
                                        <label for="Max uses">Max Uses</label>
											<input type="number" value="<?php echo $row['max_uses'];?>"  name="max_uses" id="max_uses" class="form-control" placeholder="discount">	
										</div>
									</div>
                                    <div class="col-md-6">
										<div class="mb-3">
                                        <label for="type">Type</label>
                                        <select name="type" id="type" class="form-control">
                                            <?php echo $row['type'];?>
											<option value="percent" <?php echo $row['type']=="Percent" ? "selected": "";?>>Percent</option>
                                            <option value="fixed" <?php echo $row['type'] =="Fixed" ? 'selected':'';?>>Fixed</option>
                                        </select>
										</div>
									</div>
                                    <div class="col-md-6">
										<div class="mb-3">
											<label for="status">Status</label>
                                            <select name="status" id="status" class="form-control">
                                            <option value="1"<?php echo ($row['status'] ==1) ? 'selected':'';?>>Active</option>
                                            <option value="0" <?php echo ($row['status'] ==0) ? 'selected':'';?>>Block</option>
                                           </select>
										</div>
									</div>								
								</div>
								<div class="form-group">
								<button>Upload</button>
                                </form>
							</div>							
						</div>
						
					</div>
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
		<script src="assets/js/demo.js"></script>
	</body>
        <script>
        // $(document).ready(function() {
        //     $('#createform').submit(function(e) {
        //         e.preventDefault(); // Prevent the form from submitting normally
        //         var formData = $(this).serialize(); // Serialize form data
        //         $.ajax({
        //             type: 'POST',
        //             url: 'form_submit.php', // PHP script to handle form data
        //             data: formData,
        //             success: function(response) {
        //                 $('#result').html(response);
        //             }
        //         });
        //     });
        // });
    </script>
	<script>
		document.addEventListener("DOMContentLoaded", function () {
    const submitBtn = document.getElementById("submitBtn");
    const imageForm = document.getElementById("imageForm");
    const responseDiv = document.getElementById("response");

    submitBtn.addEventListener("click", function (event) {
		event.preventDefault();
        const formData = new FormData(imageForm);

        const xhr = new XMLHttpRequest();
        xhr.open("POST", "form_submit.php", true);

        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    responseDiv.innerHTML = xhr.responseText;
                } else {
                    responseDiv.innerHTML = "An error occurred.";
                }
            }
        };

        xhr.send(formData);
    });
});


    </script>

</html>