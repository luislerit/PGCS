<?php include 'Connection.php'; ?>

<!DOCTYPE html>
<html>
<?php include 'Headlinks.html'; ?>
<body class="hold-transition sidebar-mini layout-fixed">
	<?php include 'Navbar.html'; ?>

  
	<section class="content">
		<div class="container-fluid">
			<div class="content-wrapper">	
				<div class="content-header">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1 class="m-0 text-dark">Products and Services</h1>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
									<li class="breadcrumb-item"><a href="sample.html">Home</a></li>
									<li class="breadcrumb-item active">Products & Services</li>
								</ol>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Products and Services</h3>							
								<div class="modal fade" id="addProdService" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Add Product or Service</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="card-body">
													<div class="form-group">
														<label for="serviceProductID">Product or Service ID *</label>
														<input type="email" class="form-control col-sm-6" id="serviceProductID" placeholder="Enter Product or Service ID">
													</div>
													<div class="form-group">
														<label for="productServiceName">Product or Service *</label>
														<input type="email" class="form-control" id="productServiceName" placeholder="Enter Product or Service Name">
													</div>
													<div class="form-group">
														<label for="amount">Amount *</label>
														<input type="email" class="form-control col-sm-6" id="amount" placeholder="Enter Amount">
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
														<button type="button" class="btn btn-primary">Add</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
													
								<div class="modal fade" id="openProdService" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">[Product or Service Name]</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="card-body">
													<div class="form-group">
														<label for="ServiceProductID">Product or Service ID *</label>
														<input type="email" class="form-control col-sm-6" id="ServiceProductID" placeholder="1001">
													</div>
													<div class="form-group">
														<label for="ProductServiceName">Product or Service *</label>
														<input type="email" class="form-control" id="ProductServiceName" placeholder="Nursery Cash Tuition">
													</div>
													<div class="form-group">
														<label for="Amount">Amount *</label>
														<input type="email" class="form-control col-sm-6" id="Amount" placeholder="P11,587.00">
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Save</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

																			
								<div class="card-header float-right">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProdService"><i class="fas fa-plus"> Add</i></button>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#openProdService"><i class="fas fa-folder-open"> Open</i></button>
									<button type="button" class="btn btn-primary"><i class="fas fa-eraser"> Delete</i></button>
									<button type="button" class="btn btn-primary"><i class="fas fa-file-excel"> Extract</i></button>
									<button type="button" class="btn btn-primary"><i class="fas fa-search"> Search</i></button>
								</div>
														  
														  
														  
								<div class="card-body table-responsive p-0" style="height: 300px;">
									<table class="table table-head-fixed text-nowrap">
										<thead>
											<tr>
												<th>Product/Service ID</th>
												<th>Product/Service Name</th>
												<th>Amount</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1001</td>
												<td>Nursery Cash Tuition</td>
												<td>P11,587.00</td>
											</tr>
											<tr>
												<td>1002</td>
												<td>Registration</td>
												<td>P1,500.00</td>
											</tr>
											<tr>
												<td>1003</td>
												<td>Nursery Cash Educational Sys & Misc</td>
												<td>P5,400.00</td>
											</tr>
											<tr>
												<td>1004</td>
												<td>Nursery Cash Textbooks, E-books & LK</td>
												<td>P3,500.00</td>
											</tr>
											<tr>
												<td>1005</td>
												<td>Nursery Semi-Annual 1 Tuition</td>
												<td>P6,150.00</td>
											</tr>
											<tr>
												<td>1006</td>
												<td>Nursery Semi-Annual 1 Educational Sys & Misc</td>
												<td>P2,850.00</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
</body>
<?php 'Footer.php'; ?>
</html>