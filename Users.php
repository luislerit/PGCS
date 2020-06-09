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
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudent" onclick="studentNoIncrement(1)"> Add Student </button>
								</div>
							</div>
						</div>

									
						<div class="modal fade" id="addStudent" role="dialog" aria-labelledby="addStudentLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<form method="post" action="AddStudent.php">
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
											<input type="text" class="form-control col-sm-6" id="studentID" name="studentID" placeholder="Auto-generate">
										</div>
										<div class="form-group">
											<label for="learnerReferenceNumber">Learner Reference Number</label>
											<input type="text" class="form-control col-sm-6" id="learnerReferenceNumber" name="learnerReferenceNumber" placeholder="Enter LRN: Refer to LIS ">
										</div>
										<div class="form-group">
											<label for="studentName">Student Name *</label>
											<input type="text" class="form-control" id="studentName" name="studentName" placeholder="Enter Student Name: Surname, First Name M.I.">
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label for="studentGradeLevel">Grade Level*</label>
													<select class="form-control" id="studentGradeLevel" name="studentGradeLevel">
													<?php
														$sql = "SELECT * FROM GradeLevel";
														$values = $conn -> query($sql);

														if (($values -> num_rows) > 0){
															while ($result = $values -> fetch_assoc()){
																echo '<option name="studentGradeLevel" value='.$result['GRADE_LEVEL_NO'].'>'.$result['GRADE_LEVEL'].'</option>';
																	
															}
														}
													?>
													</select>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label for="modeOfPayment">Mode of Payment *</label>
													<select class="form-control" id="modeOfPayment" name="modeOfPayment">
													<?php
														$sql = "SELECT * FROM ModePayment";
														$values = $conn -> query($sql);

														if (($values -> num_rows) > 0){
															while ($result = $values -> fetch_assoc()){
																echo '<option name="modeOfPayment" value='.$result['MODE_PAYMENT_NO'].'>'.$result['MODE_PAYMENT'].'</option>';
																	
															}
														}
													?>
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
													<select class="form-control" id="preferredPayment1" name="preferredPayment1">
													<?php
														$sql = "SELECT * FROM PreferredPayment";
														$values = $conn -> query($sql);

														if (($values -> num_rows) > 0){
															while ($result = $values -> fetch_assoc()){
																echo '<option name="preferredPayment1" value='.$result['PREF_PAYMENT_NO'].'>'.$result['PREF_PAYMENT'].'</option>';
															}
														}
													?>
													</select>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label for="preferredPayment2">Preferred Payment 2</label>
													<select class="form-control" id="preferredPayment2" name="preferredPayment2">
													<?php
														$sql = "SELECT * FROM PreferredPayment";
														$values = $conn -> query($sql);

														if (($values -> num_rows) > 0){
															while ($result = $values -> fetch_assoc()){
																echo '<option name="preferredPayment2" value='.$result['PREF_PAYMENT_NO'].'>'.$result['PREF_PAYMENT'].'</option>';
																	
															}
														}
													?>
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
											<button type="submit" class="btn btn-primary" id="addStudentForm" name="addStudentForm">Add</button>
										</div>
									</div>
								</form>
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

<!-- 						
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
				</div> -->

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
									<label for="employeeID">Login ID *</label>
									<input type="email" class="form-control col-sm-6" id="employeeID" placeholder="Auto-generate ">
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
									<button type="submit" class="btn btn-primary">Add</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- <div class="modal fade" id="openEmployee" tabindex="-1" role="dialog" aria-hidden="true">
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
				</div> -->

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
										<?php
											$sql = "SELECT A.STUDENT_ID, A.LEARN_REF_NO, A.STUDENT_NAME, C.GRADE_LEVEL, B.MODE_PAYMENT, A.INI_ACCT_BAL, D.PREF_PAYMENT PREF_PAYMENT_1, E.PREF_PAYMENT PREF_PAYMENT_2, A.STUDENT_EMAIL_ADD_1, A.STUDENT_EMAIL_ADD_2 FROM Student A, ModePayment B, GradeLevel C, PreferredPayment D, PreferredPayment E WHERE A.MODE_PAYMENT = B.MODE_PAYMENT_NO AND A.STUDENT_GRD_LVL = C.GRADE_LEVEL_NO AND A.PREF_PAYMENT_1 = D.PREF_PAYMENT_NO AND A.PREF_PAYMENT_2 = E.PREF_PAYMENT_NO";
											$values = $conn -> query($sql);

											if (($values -> num_rows) > 0){
												while ($result = $values -> fetch_assoc()){
													echo '<tr>';
													echo '<td>'.$result['STUDENT_ID'].'</td>';
													echo '<td>'.$result['LEARN_REF_NO'].'</td>';
													echo '<td>'.$result['STUDENT_NAME'].'</td>';
													echo '<td>'.$result['GRADE_LEVEL'].'</td>';
													echo '<td>'.$result['MODE_PAYMENT'].'</td>';
													echo '<td>'.$result['INI_ACCT_BAL'].'</td>';
													echo '<td>'.$result['PREF_PAYMENT_1'].'</td>';
													echo '<td>'.$result['PREF_PAYMENT_2'].'</td>';
													echo '<td>'.$result['STUDENT_EMAIL_ADD_1'].'</td>';
													echo '<td>'.$result['STUDENT_EMAIL_ADD_1'].'</td>';
													echo '</tr>';
												}
											}
										?>
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

<script type="text/javascript">
function studentNoIncrement(id) {
	// alert(id);
	// var dproc_id = "dentalproc" + id;
	// var qty_id = "quantity" + id;
	// var chg_id = "dentalchg" + id;
	// var remarks_id = "remarks" + id;

	// var dproc = document.getElementById(dproc_id).innerHTML;
	// var qty = document.getElementById(qty_id).innerHTML;
	// var chg = document.getElementById(chg_id).innerHTML;
	// var rmks = document.getElementById(remarks_id).innerHTML;

	document.getElementById("studentID").value = id;
	// document.getElementById("dental_proc").value = dproc;
	// document.getElementById("quantity").selectedIndex = qty; 
	// document.getElementById("dentalcharges").value = chg;
	// document.getElementById("remarks").value = rmks;
}
</script>