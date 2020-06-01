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
									<h1 class="m-0 text-dark">Invoice</h1>
								</div>
								<div class="col-sm-6">
									<ol class="breadcrumb float-sm-right">
										<li class="breadcrumb-item"><a href="sample.html">Home</a></li>
										<li class="breadcrumb-item active">Invoice</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
									
					<div class="content">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-6">
									<div class="card">
										<div class="card-header">
											<h5 class="m-0">Create Invoice</h5>
										</div>
										<div class="card-body">
											<h6 class="card-title"></h6>
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createInvoice">Create Invoice</button>
										</div>
									</div>
								</div>
							</div>
						</div>
											
						<div class="modal fade" id="createInvoice" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Create Invoice</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<label for="StudentID">Student ID *</label>
										</div>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text">@</span>
											</div>
											<input type="text" class="form-control" id="StudentID" placeholder="Enter Student ID">
										</div>
										<div class="form-group">
											<label for="GradeLevel">Grade Level </label>
											<input type="email" class="form-control col-sm-6" id="GradeLevel" placeholder="">
										</div>
										<div class="form-group">
											<label for="ModeOfPayment">Mode of Payment </label>
											<input type="email" class="form-control col-sm-6" id="ModeOfPayment" placeholder="">
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="MonthPeriod">Month Period *</label>
												<select class="form-control" id="MonthPeriod">
													<option> </option>
													<option>January</option>
													<option>February</option>
													<option>March</option>
													<option>April</option>
													<option>May</option>
													<option>June</option>
													<option>July</option>
													<option>August</option>
													<option>September</option>
													<option>October</option>
													<option>November</option>
													<option>December</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="PreparedBy">Prepared By *</label>
												<select class="form-control" id="PreparedBy">
													<option> </option>
													<option>Dela Rosa, Pancratius</option>
													<option>Dela Rosa, Ma. Nathalie</option>
													<option>Dela Rosa, Ma. Faye</option>
													<option>Dela Rosa, Ma. Gracles</option>
													<option>Dela Rosa, Bernardita</option>
													<option>Dela Rosa, Romeo</option>
												</select>
											</div>
										</div>

										<div class="container">
											<div class="row clearfix">
												<div class="col-md-12">
													<table class="table table-bordered table-hover" id="tab_logic">
														<thead>
															<tr>
																<th class="text-center"> ID </th>
																<th class="text-center"> Product / Service </th>
																<th class="text-center"> Amount </th>
															</tr>
														</thead>
														<tbody>
															<tr id='addr0'>
																<td><input type="text" name='product[]'  placeholder='+' class="form-control"/></td>
																<td><input type="number" name='qty[]' placeholder='+' class="form-control qty" step="0" min="0"/></td>
																<td><input type="number" name='price[]' placeholder='Auto' class="form-control price" step="0.00" min="0"/></td>
															</tr>
															<tr id='addr1'></tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-md-12">
													<button id="add_row" class="btn btn-default pull-left">Add Row</button>
													<button id='delete_row' class="pull-right btn btn-default">Delete Row</button>
												</div>
											</div>
										</div>


										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
											<button type="button" class="btn btn-primary">Create</button>
										</div>
									</div>
								</div>
							</div>
						</div>
								
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Grade 6</h3>
										<div class="card-header float-right">
											<button type="button" class="btn btn-primary"><i class="fas fa-folder-open"> Open</i></button>
											<button type="button" class="btn btn-primary"><i class="fas fa-eraser"> Delete</i></button>
											<button type="button" class="btn btn-primary"><i class="fas fa-file-pdf"> Extract</i></button>
											<button type="button" class="btn btn-primary"><i class="fas fa-search"> Search</i></button>
										</div>
										<p class="card-text"></p>
										<div class="card-tools">
											<ul class="pagination pagination-sm float-right">
												<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
												<li class="page-item"><a class="page-link" href="#">All</a></li>
												<li class="page-item"><a class="page-link" href="#">January</a></li>
												<li class="page-item"><a class="page-link" href="#">February</a></li>
												<li class="page-item"><a class="page-link" href="#">March</a></li>
												<li class="page-item"><a class="page-link" href="#">April</a></li>
												<li class="page-item"><a class="page-link" href="#">May</a></li>
												<li class="page-item"><a class="page-link" href="#">June</a></li>
												<li class="page-item"><a class="page-link" href="#">July</a></li>
												<li class="page-item"><a class="page-link" href="#">August</a></li>
												<li class="page-item"><a class="page-link" href="#">September</a></li>
												<li class="page-item"><a class="page-link" href="#">October</a></li>
												<li class="page-item"><a class="page-link" href="#">November</a></li>
												<li class="page-item"><a class="page-link" href="#">December</a></li>
												<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
											</ul>
										</div>
									</div>
																  
									<div class="card-body table-responsive p-0" style="height: 300px;">
										<table class="table table-head-fixed text-nowrap">
											<thead>
												<tr>
													<th>Invoice ID</th>
													<th>Student Name</th>
													<th>Grade Level</th>
													<th>Mode of Payment</th>
													<th>Month Period</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>10001</td>
													<td>Dela Rosa, Pancratius S.</td>
													<td>Grade 6</td>
													<td>Cash</td>
													<td>January</td>
													<td>Created</td>
												</tr>
												<tr>
													<td>10002</td>
													<td>Dela Rosa, Pancratius S.</td>
													<td>Grade 6</td>
													<td>Cash</td>
													<td>February</td>
													<td>Ready</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
												
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Grade 5</h3>
										<div class="card-header float-right">
											<button type="button" class="btn btn-primary"><i class="fas fa-folder-open"> Open</i></button>
											<button type="button" class="btn btn-primary"><i class="fas fa-eraser"> Delete</i></button>
											<button type="button" class="btn btn-primary"><i class="fas fa-file-pdf"> Extract</i></button>
											<button type="button" class="btn btn-primary"><i class="fas fa-search"> Search</i></button>
										</div>
										<p class="card-text"></p>
										<div class="card-tools">
											<ul class="pagination pagination-sm float-right">
												<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
												<li class="page-item"><a class="page-link" href="#">All</a></li>
												<li class="page-item"><a class="page-link" href="#">January</a></li>
												<li class="page-item"><a class="page-link" href="#">February</a></li>
												<li class="page-item"><a class="page-link" href="#">March</a></li>
												<li class="page-item"><a class="page-link" href="#">April</a></li>
												<li class="page-item"><a class="page-link" href="#">May</a></li>
												<li class="page-item"><a class="page-link" href="#">June</a></li>
												<li class="page-item"><a class="page-link" href="#">July</a></li>
												<li class="page-item"><a class="page-link" href="#">August</a></li>
												<li class="page-item"><a class="page-link" href="#">September</a></li>
												<li class="page-item"><a class="page-link" href="#">October</a></li>
												<li class="page-item"><a class="page-link" href="#">November</a></li>
												<li class="page-item"><a class="page-link" href="#">December</a></li>
												<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
											</ul>
										</div>
									</div>

									<div class="card-body table-responsive p-0" style="height: 300px;">
										<table class="table table-head-fixed text-nowrap">
											<thead>
												<tr>
													<th>Invoice ID</th>
													<th>Student Name</th>
													<th>Grade Level</th>
													<th>Mode of Payment</th>
													<th>Month Period</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>10001</td>
													<td>Dela Rosa, Pancratius S.</td>
													<td>Grade 6</td>
													<td>Cash</td>
													<td>January</td>
													<td>Created</td>
												</tr>
												<tr>
													<td>10002</td>
													<td>Dela Rosa, Pancratius S.</td>
													<td>Grade 6</td>
													<td>Cash</td>
													<td>February</td>
													<td>Ready</td>
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
	<?php include 'Footer.html'; ?>
</html>