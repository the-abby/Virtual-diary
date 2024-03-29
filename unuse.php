﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="assets/css/inde.css">

    <title>Virtual Diary | Dashboard </title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/skin_color.css">
     <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	 <!-- <div class="text-center">
		<p class="mt-15 mb-0">Don't have an account? <a href="register.html" class="text-warning ms-5">Sign Up</a></p>
	</div> -->
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-warning fixed">
	
 <div class="wrapper">
	<!-- <div id="loader"></div> -->
	
  <header class="main-header">
	<!-- <div class="d-flex align-items-center logo-box justify-content-start">	
			
	</div> -->
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<div class="row">
				<div class="col-md-12">
					<div class="welcome2-inner m-t-60">
						<!-- <div class="header__logo"> -->
							<a href="#">
								<h5 style="color:#ffffff">Virtual Diary</h5>
							</a>
						</div>
						<div class="welcome2-greeting">
							<h1 class="title-6">Hi
								<span></span>, Welcome back</h1>
							<p>Access your data on any device at anytime</p>
						</div>
						
					</div>
				</div>
			</div>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">		  
			<li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i data-feather="search"></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li>
		  
	      <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="waves-effect waves-light dropdown-toggle btn-primary-light" data-bs-toggle="dropdown" title="User">
				<i data-feather="user"></i>
            </a>
            <ul class="dropdown-menu animated flipInX">
              <li class="user-body">
				 <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Profile</a>
				 <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i> My Wallet</a>
				 <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Settings</a>
				 <div class="dropdown-divider"></div>
				 <a class="dropdown-item" href="#"><i class="ti-lock text-muted me-2"></i> Logout</a>
              </li>
            </ul>
          </li>	
        </ul>
      </div>
    </nav>
  </header>
  
   <!-- <aside class="main-sidebar">
     sidebar 
     <section class="sidebar position-relative">	
	  	<div class="multinav">
		 <div class="multinav-scroll" style="height: 100%;">	
			    sidebar menu
				<div class="mx-25 mb-30 p-30 col-xxl-12 text-center bg-primary-light rounded5">
					<img src="assets/images/1.jpg" alt="">
					<h4 class="my-3 fw-500 text-uppercase text-primary col-xxl-12">Talk to me.</h4>
					<span class="fs-12 d-block mb-3 text-black-50 col-xxl-12">Providing a space to rant about your bad days and a space to keep your your goals and aspirations.</span>
				</div>
				<div class="copyright text-center m-25">
					<p><strong class="d-block">Virtual-Diary</strong> © 2021 All Rights Reserved</p>
				</div>
		  </div> 
		</div>
    </section> 
  </aside>  -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<div class="list">
			<div class="todo col-xxl-12">
					  <a href="" class="bord">Add Content</a>
					  <a href="" class="bord">Read</a>
					  <a href="" class="bord">Edit</a>
					  <a href="" class="bord">Delete</a>
			</div>
			<div class="list">
				<div class="todo col-xxl-12">
						  <h2>My 19th birthday</h2>
						  <h4>How i spent the entire day on my birthday.</h4><br>
						  <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
							 Officia nemo repellendus aspernatur quo, rem corrupti exercitationem.
							Numquam corrupti porro fugit ad deleniti qui dicta illo temporibus,
							ratione itaque, laboriosam rem.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis minima magni,
							tenetur veritatis maiores vel odio dolore,
							architecto expedita hic praesentium! Veritatis ratione, 
							temporibus repellat quaerat libero dolor inventore.</h6>
				</div>
		</div>
		<div class="list">
			<div class="todo col-xxl-12">
				<form action="home.php">
					<label for="cc-payment" class="control-label">Title</label>
					<input name="title" type="text" class="form-control">
					<label for="cc-payment" class="control-label">Description</label>
					<input name="descript" type="text" class="form-control">
					<label for="cc-payment" class="control-label">Image</label>
					<input name="file" type="file" class="form-control"><br>
					<button id="payment-button" type="submit">
						<span id="payment-button-amount">Upload To Diary</span>
					</button>
				  </form>
			  </div>
		  </div>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <div class="bea">
  <footer class="main-footer">
	  &copy; 2021 Virtual-Diary. | Developed By Abisola. | All Rights Reserved.
  </footer>
	</div>
 

	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="assets/js/vendors.min.js"></script>
	<script src="assets/js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>	
	
	<script src="assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
	<script src="assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="assets/vendor_components/datatable/datatables.min.js"></script>
	
	<!-- Crypto Admin App -->
	<script src="assets/js/template.js"></script>
	<script src="assets/js/pages/dashboard3.js"></script>
	<script src="assets/js/pages/dashboard3-chart.js"></script>

	<!--Bootstrap-->
	<script src="assets/bootstrap/js/jquery-3.6.0.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	
</body>
</html>
