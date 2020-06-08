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
					<h1 class="m-0 text-dark">Payments</h1>
				  </div>
				  <div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					  <li class="breadcrumb-item"><a href="sample.html">Home</a></li>
					  <li class="breadcrumb-item active">Payments</li>
					</ol>
				  </div>
				</div>
			  </div>
			</div>
			
			
			<div class="content">
			  <div class="container-fluid">
				
				  
				  <div class="col-lg-6">
					<div class="card">
					  <div class="card-header">
						<h5 class="m-0">Create Payment</h5>
					  </div>
					  <div class="card-body">
						<h6 class="card-title"></h6>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createPaymentForm"> Create Payment </button>
					  </div>
				  </div>
				  
				</div>


				
				<div class="modal fade" id="createPaymentForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Create Payment</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<div class="form-group">
						<label for="studentName">Student Name *</label>
					  </div
						  <div class="card-body">
							<div class="input-group mb-3">
							  <div class="input-group-prepend">
								<span class="input-group-text">@</span>
							  </div>
							  <input type="text" class="form-control" id="studentName" placeholder="Enter Student ID">
							</div>
							<div class="form-group">
								<label for="studentGradeLevel">Grade Level</label>
								<input type="email" class="form-control col-sm-6" id="studentGradeLevel" placeholder="Auto generate">
							</div>
							<div class="form-group">
							  <label for="paymentDate">Date *</label>
								<div class="input-group date col-sm-6" id="paymentDate" data-target-input="nearest">
									<input type="text" class="form-control datetimepicker-input" data-target="#paymentDate"/>
									<div class="input-group-append" data-target="#paymentDate" data-toggle="datetimepicker">
										<div class="input-group-text"><i class="fa fa-calendar"></i></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="amountPaid">Amount Paid *</label>
								<input type="email" class="form-control col-sm-6" id="amountPaid" placeholder="Enter amount paid">
							</div>
							
							<div class="form-group col-sm-6">
								<label for="paymentChannel">Payment Channel *</label>
								<select class="form-control" id="paymentChannel">
								  <option>Choose here </option>
								  <option>Cash Payment</option>
								  <option>Gcash</option>
								  <option>Paymaya</option>
								  <option>BPI</option>
								  <option>BDO</option>
								  <option>Metrobank</option>
								  <option>RCBC</option>
								  <option>Eastwest</option>
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label for="paymentChannel">Employee Name *</label>
								<select class="form-control" id="paymentChannel">
									<option>Choose here </option>
									<option>Dela Rosa, Pancratius S.</option>
									<option>Dela Rosa, Ma. Nathalie S.</option>
									<option>Dela Rosa, Ma. Faye S.</option>
									<option>.....</option>
									<option>....</option>
									<option>....</option>
									<option>....</option>
									<option>....</option>
								</select>
							</div>
							<div class="form-group">
								<label for="remainingBalance">Designation</label>
								<input type="email" class="form-control col-sm-6" id="remainingBalance" placeholder="Auto">
							</div>
							<div class="form-group">
								<label for="remainingBalance">Add Product</label>
								<input type="email" class="form-control col-sm-6" id="remainingBalance" placeholder="*** Same Invoice**">
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


				<div class="modal fade" id="generateReceipt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
					  <div class="modal-content">
						<div class="modal-header">
						  <h5 class="modal-title" id="exampleModalLabel">Generate Report</h5>
						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
						<div class="modal-body">
						  <div class="form-group">
						  <label for="studentName">Student Name *</label>
						</div
						<div class="card-body">
							  <div class="input-group mb-3">
								<div class="input-group-prepend">
								  <span class="input-group-text">@</span>
								</div>
								<input type="text" class="form-control" id="studentName" placeholder="Enter Student ID">
							  </div>
							  <div class="form-group">
								  <label for="studentEmailAddress1">Student Email Address 1</label>
								  <input type="email" class="form-control col-sm-6" id="studentGradeLevel" placeholder="Auto generate">
							  </div>
							  <div class="form-group">
								<label for="studentEmailAddress2">Student Email Address 2</label>
								<input type="email" class="form-control col-sm-6" id="studentGradeLevel" placeholder="Auto generate">
							  </div>
								<div class="form-group col-sm-6">
									<label for="paymentChannel">Employee Name *</label>
									<select class="form-control" id="paymentChannel">
									<option>Choose here </option>
									<option>Dela Rosa, Pancratius S.</option>
									<option>Dela Rosa, Ma. Nathalie S.</option>
									<option>Dela Rosa, Ma. Faye S.</option>
									<option>.....</option>
									<option>....</option>
									<option>....</option>
									<option>....</option>
									<option>....</option>
									</select>
								</div>
							  
							  <div class="form-group">
								  <label for="amountPaid">Amount Paid *</label>
								  <input type="email" class="form-control col-sm-6" id="amountPaid" placeholder="Enter amount paid">
							  </div>
							  
							  
							  
							  <div class="form-group">
								  <label for="remainingBalance">Balance</label>
								  <input type="email" class="form-control col-sm-6" id="remainingBalance" placeholder="Auto generated">
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
								<button type="button" class="btn btn-primary"><i class="fas fa-file-excel"> Extract</i></button>
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
								  <th>Payment ID</th>
								  <th>Student Name</th>
								  <th>Date</th>
								  <th>Amount Paid</th>
								  <th>Payment Channel</th>
								  <th>Remaining Balance</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td>1000001</td>
								  <td>Dela Rosa, Pancratius S.</td>
								  <td>5/17/2020</td>
								  <td>P2,000.00</td>
								  <td>BPI</td>
								  <td>P27,000.00</td>
								</tr>
								<tr>
								  <td>1000002</td>
								  <td>Doe, John S.</td>
								  <td>5/17/2020</td>
								  <td>P2,000.00</td>
								  <td>Cash Payment</td>
								  <td>P27,000.00</td>
								</tr>
								
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
								<button type="button" class="btn btn-primary"><i class="fas fa-file-excel"> Extract</i></button>
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
								  <th>Payment ID</th>
								  <th>Student Name</th>
								  <th>Date</th>
								  <th>Amount Paid</th>
								  <th>Payment Through</th>
								  <th>Remaining Balance</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td>1000001</td>
								  <td>Dela Rosa, Pancratius S.</td>
								  <td>5/17/2020</td>
								  <td>P2,000.00</td>
								  <td>BPI</td>
								  <td>P27,000.00</td>
								</tr>
								<tr>
								  <td>1000002</td>
								  <td>Doe, John S.</td>
								  <td>5/17/2020</td>
								  <td>P2,000.00</td>
								  <td>Cash Payment</td>
								  <td>P27,000.00</td>
								</tr>
								
								</tr>
							  </tbody>
							</table>
						  </div>
						  
						</div>
						
					  </div>
				</div>	
					
					
		</div>
    </section>









    
    
  </div>
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  
  <aside class="control-sidebar control-sidebar-dark">
    
  </aside>
  
</div>



<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/jquery-ui/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="plugins/chart.js/Chart.min.js"></script>

<script src="plugins/sparklines/sparkline.js"></script>

<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>

<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="plugins/summernote/summernote-bs4.min.js"></script>

<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="dist/js/adminlte.js"></script>

<script src="dist/js/pages/dashboard.js"></script>

<script src="dist/js/demo.js"></script>
</body>
</html>
