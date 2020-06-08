<?php include 'Connection.php'; ?>

<!DOCTYPE html>
<html>
	<?php include 'Headlinks.php'; ?>
	
	<body class="hold-transition sidebar-mini layout-fixed">
	<?php include 'Navbar.html'; ?>
		<section class="content">
			<div class="container-fluid">
				<div class="content-wrapper">
					<div class="content-header">
						<div class="container-fluid">
							<div class="row mb-2">
								<div class="col-sm-6">
									<h1 class="m-0 text-dark">Home</h1>
								</div>
								<div class="col-sm-6">
									<ol class="breadcrumb float-sm-right">
										<li class="breadcrumb-item"><a href="Home.php">Home</a></li>
										<li class="breadcrumb-item active">Home</li>
									</ol>
								</div>
							</div>
						</div>
					</div>

					<div class="content">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-3 col-6">
									<div class="small-box bg-info">
										<div class="inner">
											<h3>Home</h3>
											<p>Home</p>
										</div>
										<div class="icon">
											<i class="ion ion-home"></i>
										</div>
										<a href="Home.php" class="small-box-footer">Go to Home <i class="fas fa-arrow-circle-right"></i></a>
									</div>
								</div>
								<div class="col-lg-3 col-6">
								<div class="small-box bg-success">
									<div class="inner">
										<h3>Users</h3>
										<p>Users</p>
									</div>
									<div class="icon">
										<i class="ion ion-person"></i>
									</div>
									<a href="Users.php" class="small-box-footer">Go to Users <i class="fas fa-arrow-circle-right"></i></a>
									</div>
								</div>
								<div class="col-lg-3 col-6">
									<div class="small-box bg-info">
										<div class="inner">
											<h3>Products & Services</h3>
											<p>Products & Services</p>
										</div>
										<div class="icon">
											<i class="ion ion-pie-graph"></i>
										</div>
										<a href="ProductsService.php" class="small-box-footer">Go to Products & Services <i class="fas fa-arrow-circle-right"></i></a>
									</div>
								</div>
								<div class="col-lg-3 col-6">
									<div class="small-box bg-success">
										<div class="inner">
											<h3>Invoice</h3>
											<p>Invoice</p>
										</div>
										<div class="icon">
											<i class="ion ion-pie-graph"></i>
										</div>
										<a href="Invoice.php" class="small-box-footer">Go to Invoice <i class="fas fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
	<?php include 'Footer.html'; ?>
</html>