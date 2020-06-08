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
									<h1 class="m-0 text-dark">Users</h1>
								</div>
								<div class="col-sm-6">
									<ol class="breadcrumb float-sm-right">
										<li class="breadcrumb-item"><a href="sample.html">Home</a></li>
										<li class="breadcrumb-item active">Users</li>
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
									<h5 class="m-0">Add Student</h5>
								</div>
								<div class="card-body">
									<h6 class="card-title"></h6>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudent"> Add Student </button>
								</div>
							</div>
						</div>

						<div class="modal fade" id="addStudent" role="dialog" aria-labelledby="addStudentLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="addStudentLabel">Add Student</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<label for="studentID">Student ID</label>
											<input type="text" class="form-control col-sm-6" id="studentID" placeholder="Auto-generate">
										</div>
										<div class="form-group">
											<label for="learnerReferenceNumber">Learner Reference Number</label>
											<input type="text" class="form-control col-sm-6" id="learnerReferenceNumber" placeholder="Enter LRN: Refer to LIS ">
										</div>
										<div class="form-group">
											<label for="studentName">Student Name *</label>
											<input type="text" class="form-control" id="studentName" placeholder="Enter Student Name: Surname, First Name M.I.">
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label for="studentGradeLevel">Grade Level*</label>
													<select class="form-control" id="studentGradeLevel">
													<?php
														$sql = "SELECT * FROM gradelevel";
														$values = $conn -> query($sql);

														if (($values -> num_rows) > 0){
															while ($result = $values -> fetch_assoc()){
																echo '<option>'.$result['GRADE_LEVEL'].'</option>';
																	
															}
														}
													?>
													</select>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label for="modeOfPayment">Mode of Payment *</label>
													<select class="form-control" id="modeOfPayment">
														<option> </option>
														<option>Cash</option>
														<option>Semi-Annual</option>
														<option>Quarterly</option>
														<option>Monthly</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="startAccountBalance">Start Account Balance</label>
											<input type="decimal" class="form-control col-sm-6" id="startAccountBalance" placeholder="Enter Start Account Balance">
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label for="lastPayment">Last Payment Amount</label>
													<input type="email" class="form-control" id="lastPayment" placeholder="Auto-generate from latest payments.amountPaid">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label for="lastPaymentDate">Last Payment Date</label>
													<input type="email" class="form-control" id="lastPaymentDate" placeholder="Auto-generate from latest payments.date">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="remainingBalance">Remaining Account Balance</label>
											<input type="decimal" class="form-control col-sm-6" id="remainingBalance" placeholder="Auto-generate from latest payments.remainingBalance">
										</div>

										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label for="preferredPayment1">Preferred Payment 1 *</label>
													<select class="form-control" id="preferredPayment1">
														<option> </option>
														<option>Gcash</option>
														<option>Paymaya</option>
														<option>BPI</option>
														<option>BDO</option>
														<option>Metrobank</option>
														<option>RCBC</option>
														<option>Eastwest</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label for="preferredPayment2">Preferred Payment 2</label>
													<select class="form-control" id="preferredPayment2">
														<option> </option>
														<option>Gcash</option>
														<option>Paymaya</option>
														<option>BPI</option>
														<option>BDO</option>
														<option>Metrobank</option>
														<option>RCBC</option>
														<option>Eastwest</option>
													</select>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label for="studentEmailAddress1">Student Email Address 1 *</label>
													<input type="email" class="form-control" id="studentEmailAddress1" placeholder="Enter Email Address">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label for="studentEmailAddress2">Student Email Address 2 *</label>
													<input type="email" class="form-control" id="studentEmailAddress2" placeholder="Enter Email Address">
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
											<button type="button" class="btn btn-primary">Add</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="m-0">Add Employee</h5>
								</div>
								<div class="card-body">
									<h6 class="card-title"></h6>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEmployee"> Add Employee </button>
								</div>
							</div>
						</div>
					</div>
				</div>

						
				<div class="modal fade" id="openStudent" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Dela Rosa, Pancratius S.</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

							<div class="modal-body">
								<div class="form-group">
									<label for="studentID">Student ID</label>
									<input type="text" class="form-control col-sm-6" id="studentID" placeholder="100001" disabled>
								</div>
								<div class="form-group">
									<label for="learnerReferenceNumber">Learner Reference Number</label>
									<input type="text" class="form-control col-sm-6" id="learnerReferenceNumber" placeholder="09277944517">
								</div>
								<div class="form-group">
									<label for="studentName">Student Name *</label>
									<input type="text" class="form-control" id="studentName" placeholder="Dela Rosa, Pancratius S.">
								</div>

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="studentGradeLevel">Grade Level *</label>
											<select class="form-control" id="studentGradeLevel">
												<option> </option>
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
									<div class="col-sm-6">
										<div class="form-group">
											<label for="modeOfPayment">Mode of Payment *</label>
											<select class="form-control" id="modeOfPayment">
												<option> </option>
												<option>Cash</option>
												<option>Semi-Annual</option>
												<option>Quarterly</option>
												<option>Monthly</option>
											</select>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="startAccountBalance">Start Account Balance</label>
									<input type="decimal" class="form-control col-sm-6" id="startAccountBalance" placeholder="P29,000.00" disabled>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="lastPayment">Last Payment Amount</label>
											<input type="email" class="form-control" id="lastPayment" placeholder="P2,000.00" disabled>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="lastPaymentDate">Last Payment Date</label>
											<input type="email" class="form-control" id="lastPaymentDate" placeholder="5/17/2020" disabled>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="remainingBalance">Remaining Account Balance</label>
									<input type="decimal" class="form-control col-sm-6" id="remainingBalance" placeholder="P27,000.00" disabled>
								</div>

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="preferredPayment1">Preferred Payment 1 *</label>
											<select class="form-control" id="preferredPayment1">
												<option> </option>
												<option>Gcash</option>
												<option>Paymaya</option>
												<option>BPI</option>
												<option>BDO</option>
												<option>Metrobank</option>
												<option>RCBC</option>
												<option>Eastwest</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="preferredPayment2">Preferred Payment 2</label>
											<select class="form-control" id="preferredPayment2">
												<option> </option>
												<option>Gcash</option>
												<option>Paymaya</option>
												<option>BPI</option>
												<option>BDO</option>
												<option>Metrobank</option>
												<option>RCBC</option>
												<option>Eastwest</option>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="studentEmailAddress1">Student Email Address 1 *</label>
											<input type="email" class="form-control" id="studentEmailAddress1" placeholder="test@gmail.com">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="studentEmailAddress2">Student Email Address 2 *</label>
											<input type="email" class="form-control" id="studentEmailAddress2" placeholder="test@gmail.com">
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-info"><i class="fas fa-print"> Print</i></button>
									<button type="button" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="addEmployee" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Employee</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label for="studentID">Login ID *</label>
									<input type="email" class="form-control col-sm-6" id="studentID" placeholder="Auto-generate ">
								</div>
								<div class="form-group">
									<label for="employeeName">Employee Name *</label>
									<input type="email" class="form-control col-sm-6" id="employeeName" placeholder="Enter Employee Name">
								</div>
								<div class="form-group col-sm-6">
									<label for="designation">Designation *</label>
									<select class="form-control" id="designation">
										<option> </option>
										<option>President</option>
										<option>Program Director</option>
										<option>Payroll & External and Internal Relations</option>
										<option>Marketing Manager</option>
										<option>School Administrator</option>
									</select>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<button type="button" class="btn btn-primary">Add</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="openEmployee" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Dela Rosa, Pancratius S.</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label for="studentID">Login ID *</label>
									<input type="email" class="form-control col-sm-6" id="studentID" placeholder="PGCS01">
								</div>
								<div class="form-group">
									<label for="employeeName">Employee Name *</label>
									<input type="email" class="form-control col-sm-6" id="employeeName" placeholder="Dela Rosa, Pancratius S.">
								</div>
								<div class="form-group col-sm-6">
									<label for="designation">Designation *</label>
									<select class="form-control" id="designation">
										<option> </option>
										<option>President</option>
										<option>Program Director</option>
										<option>Payroll & External and Internal Relations</option>
										<option>Marketing Manager</option>
										<option>School Administrator</option>
									</select>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Students</h3>
								<div class="card-header float-right">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#openStudent"><i class="fas fa-folder-open"> Open Student</i></button>
									<button type="button" class="btn btn-primary"><i class="fas fa-file-excel"> Extract List</i></button>
									<button type="button" class="btn btn-primary"><i class="fas fa-search"> Search Student</i></button>
								</div>
							</div>

							<div class="card-body table-responsive p-0" style="height: 300px;">
								<table class="table table-head-fixed text-nowrap">
									<thead>
										<tr>
											<th>Student ID</th>
											<th>LRN</th>
											<th>Student Name</th>
											<th>Student Grade Level</th>
											<th>Mode of Payment</th>
											<th>Start Account Balance</th>
											<th>Last Payment</th>
											<th>Last Payment Date</th>
											<th>Balance</th>
											<th>Preferred Payment 1</th>
											<th>Preferred Payment 2</th>
											<th>Email Address 1</th>
											<th>Email Address 2</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>100001</td>
											<td>09277944517</td>
											<td>Dela Rosa, Pancratius S.</td>
											<td>Grade 6</td>
											<td>C</td>
											<td>P29,000.00</td>
											<td>P2,000.00</td>
											<td>5/17/2020</td>
											<td>P27,000.00</td>
											<td>Gcash</td>
											<td>BPI</td>
											<td>test@gmail.com</td>
											<td>test@gmail.com</td>
										</tr>
										<tr>
											<td>100002</td>
											<td>09277944517</td>
											<td>Dela Rosa, Ma. Nathalie</td>
											<td>Grade 5</td>
											<td>SA</td>
											<td>P29,000.00</td>
											<td>P2,000.00</td>
											<td>5/17/2020</td>
											<td>P27,000.00</td>
											<td>BDO</td>
											<td>Paymaya</td>
											<td>test@gmail.com</td>
											<td>test@gmail.com</td>
										</tr>
										<tr>
											<td>100003</td>
											<td>09277944517</td>
											<td>Dela Rosa, Ma. Faye</td>
											<td>Grade 4</td>
											<td>Q</td>
											<td>P29,000.00</td>
											<td>P2,000.00</td>
											<td>5/17/2020</td>
											<td>P27,000.00</td>
											<td>Metrobank</td>
											<td>BDO</td>
											<td>test@gmail.com</td>
											<td>test@gmail.com</td>
										</tr>
										<tr>
											<td>100004</td>
											<td>09277944517</td>
											<td>Dela Rosa, Ma. Gracles</td>
											<td>Grade 3</td>
											<td>C</td>
											<td>P27,000.00</td>
											<td>P2,000.00</td>
											<td>5/17/2020</td>
											<td>P25,000.00</td>
											<td>Gcash</td>
											<td>BPI</td>
											<td>test@gmail.com</td>
											<td>test@gmail.com</td>
										</tr>
										<tr>
											<td>100005</td>
											<td>09277944517</td>
											<td>Dela Rosa, Bernardita</td>
											<td>Grade 2</td>
											<td>M</td>
											<td>P27,000.00</td>
											<td>P2,000.00</td>
											<td>5/17/2020</td>
											<td>P25,000.00</td>
											<td>Gcash</td>
											<td>BPI</td>
											<td>test@gmail.com</td>
											<td>test@gmail.com</td>
										</tr>
										<tr>
											<td>100006</td>
											<td>09277944517</td>
											<td>Dela Rosa, Romeo B.</td>
											<td>Kinder</td>
											<td>C</td>
											<td>P24,000.00</td>
											<td>P2,000.00</td>
											<td>5/17/2020</td>
											<td>P22,000.00</td>
											<td>Gcash</td>
											<td>BPI</td>
											<td>test@gmail.com</td>
											<td>test@gmail.com</td>
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
								<h3 class="card-title">Employees</h3>
								<div class="card-header float-right">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#openEmployee"><i class="fas fa-folder-open"> Open Employee</i></button>
									<button type="button" class="btn btn-primary"><i class="fas fa-search"> Search Employee</i></button>
								</div>
							</div>

							<div class="card-body table-responsive p-0" style="height: 300px;">
								<table class="table table-head-fixed text-nowrap">
									<thead>
										<tr>
											<th>Login ID</th>
											<th>Employee Name</th>
											<th>Designation</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>PGCS01</td>
											<td>Dela Rosa, Pancratius</td>
											<td>President</td>
										</tr>
										<tr>
											<td>PGCS02</td>
											<td>Dela Rosa, Ma. Nathalie</td>
											<td>Program Director</td>
										</tr>
										<tr>
											<td>PGCS03</td>
											<td>Dela Rosa, Ma. Faye</td>
											<td>Payroll & Survey Manager</td>
										</tr>
										<tr>
											<td>PGCS04</td>
											<td>Dela Rosa, Ma. Gracles</td>
											<td>Marketing Manager</td>
										</tr>
										<tr>
											<td>PGCS05</td>
											<td>Dela Rosa, Bernardita</td>
											<td>School Administrator</td>
										</tr>
										<tr>
											<td>6</td>
											<td>Dela Rosa, Romeo</td>
											<td>School Administrator</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
	<?php include 'Footer.html'; ?>
</html>
