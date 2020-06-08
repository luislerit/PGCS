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
									<h1 class="m-0 text-dark">Transaction Information</h1>
								</div>
								<div class="col-sm-6">
									<ol class="breadcrumb float-sm-right">
										<li class="breadcrumb-item"><a href="sample.html">Home</a></li>
										<li class="breadcrumb-item active">Transaction Information</li>
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
									<h5 class="m-0">Update Balance</h5>
								</div>
								<div class="card-body">
									<h6 class="card-title"></h6>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateBalance">Update Balance</button>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="m-0">Update Mass Balance</h5>
								</div>
								<div class="card-body">
									<h6 class="card-title"></h6>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateMassBalance">Update Mass Balance</button>
								</div>
							</div>
						</div>
					</div>

				
					<div class="modal fade" id="updateBalance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Update Balance</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label for="StudentID">Student Name *</label>
									</div>
									<div class="card-body">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text">@</span>
											</div>
											<input type="text" class="form-control" id="StudentID" placeholder="Enter Student Name">
										</div>
										<div class="form-group">
											<label for="GradeLevel">Grade Level</label>
											<input type="email" class="form-control col-sm-6" id="GradeLevel" placeholder="">
										</div>
										<div class="form-group">
											<label for="Add Balance">Add Balance *</label>
											<input type="email" class="form-control col-sm-6" id="AmountPaid" placeholder="Add Balance">
										</div>
										<div class="form-group col-sm-6">
											<label for="productOrService">Product or Service *</label>
											<select class="form-control" id="paymentChannel">
												<option>Choose here </option>
												<option>Tuition</option>
												<option>Miscellaneous</option>
												<option>School Uniform</option>
												<option>School Service</option>
												<option>....</option>
												<option>....</option>
												<option>....</option>
												<option>....</option>
											</select>
										</div>

										<div class="form-group">
											<label for="Balance">Remarks</label>
											<input type="email" class="form-control" id="Balance" placeholder="Enter Remarks">
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<button type="button" class="btn btn-primary">Update</button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="modal fade" id="updateMassBalance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Update Mass Balance</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="studentGradeLevel">Grade Level *</label>
											<select class="form-control" id="studentGradeLevel">
												<option>Choose</option>
												<option>Junior Nursery</option>
												<option>Senior Nursery</option>
												<option>Kindergarten</option>
												<option>Grade 1</option>
												<option>Grade 2</option>
												<option>Grade 3</option>
												<option>Grade 4</option>
												<option>Grade 5</option>
												<option>Grade 6</option>
											</select>
										</div>
									</div>
									<div class="form-group col-sm-6"">
										<label for="studentName">Add balance *</label>
										<input type="text" class="form-control" id="studentName" placeholder="Enter Balance Account">
									</div>
									<div class="form-group col-sm-6">
										<label for="productOrService">Product or Service *</label>
										<select class="form-control" id="paymentChannel">
											<option>Choose here </option>
											<option>Tuition</option>
											<option>Miscellaneous</option>
											<option>School Uniform</option>
											<option>School Service</option>
											<option>....</option>
											<option>....</option>
											<option>....</option>
											<option>....</option>
										</select>
									</div>
									<div class="form-group"">
										<label for="studentName">Remarks</label>
										<input type="text" class="form-control" id="studentName" placeholder="Enter Remarks">
									</div>
								</div>  
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<button type="button" class="btn btn-primary">Update</button>
								</div>
							</div>
						</div>
					</div>
				
					<div class="modal fade" id="openTransaction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Transaction Information - [Student]</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label for="studentName">Student</label>
										<input type="text" class="form-control" id="studentName" placeholder="Dela Rosa, Pancratius S." disabled>
									</div>
									<div class="form-group col-sm-6"">
										<label for="studentName">Grade Level</label>
										<input type="text" class="form-control" id="studentName" placeholder="Grade 6" disabled>
									</div>
										<div class="form-group col-sm-6"">
										<label for="studentName">Balance</label>
										<input type="text" class="form-control" id="studentName" placeholder="P26,500.00" disabled>
									</div>
								</div>
								<div class="modal-body">
									<table id="classTable" class="table table-bordered">
										<thead>
											<tr>
												<th>Date</th>
												<th>Transaction</th>
												<th>Amount</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>5/17/2020</td>
												<td>Starting Balance</td>
												<td>P29,000.00</td>
											</tr>
											<tr>
												<td>5/18/2020</td>
												<td>Payment</td>
												<td>(P2,000.00)</td>
											</tr>
											<tr>
												<td>5/21/2020</td>
												<td>Payment</td>
												<td>(P2,000.00)</td>
											</tr>
											<tr>
												<td>5/25/2020</td>
												<td>School Uniform</td>
												<td>P1,500.00</td>
											</tr>
											<tr>
												<td></td>
												<td>Total</td>
												<td>P26,500.00</td>
											</tr>
										</tbody>
									</table>
								</div>    
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Generate PDF</button>
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
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#openTransaction"><i class="fas fa-folder-open"> Open</i></button>
										<button type="button" class="btn btn-primary"><i class="fas fa-file-excel"> Extract</i></button>
										<button type="button" class="btn btn-primary"><i class="fas fa-search"> Search</i></button>
									</div>
									<p class="card-text"></p>
								</div>
														
								<div class="card-body table-responsive p-0" style="height: 300px;">
									<table class="table table-head-fixed text-nowrap">
										<thead>
											<tr>
												<th>Student ID</th>
												<th>Student Name</th>
												<th>Remaining Balance</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1000001</td>
												<td>Dela Rosa, Pancratius S.</td>
												<td>P 2,000.00</td>
											</tr>
											<tr>
												<td>1000002</td>
												<td>Doe, John S.</td>
												<td>P 21,000.00</td>
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
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#openTransaction"><i class="fas fa-folder-open"> Open</i></button>
										<button type="button" class="btn btn-primary"><i class="fas fa-file-excel"> Extract</i></button>
										<button type="button" class="btn btn-primary"><i class="fas fa-search"> Search</i></button>
									</div>
									<p class="card-text"></p>
								</div>
								<div class="card-body table-responsive p-0" style="height: 300px;">
									<table class="table table-head-fixed text-nowrap">
										<thead>
											<tr>
												<th>Student ID</th>
												<th>Student Name</th>
												<th>Remaining Balance</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1000001</td>
												<td>Dela Rosa, Pancratius S.</td>
												<td>P 2,000.00</td>
											</tr>
											<tr>
												<td>1000002</td>
												<td>Doe, John S.</td>
												<td>P 21,000.00</td>
											</tr>
										</tbody>
									</table>
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