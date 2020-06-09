<?php
	include 'Connection.php';
	if(isset($_POST['addStudentForm'])) {
		echo 'aspok';
		$studentID = $_POST['studentID'];
		$learnerReferenceNumber = $_POST['learnerReferenceNumber'];
		$studentName = $_POST['studentName'];
		$studentGradeLevel = $_POST['studentGradeLevel'];
		$modeOfPayment = $_POST['modeOfPayment'];
		$preferredPayment1 = $_POST['preferredPayment1'];
		$preferredPayment2 = $_POST['preferredPayment2'];

		// $dental_proc = $_POST['dental_proc'];
		// $quantity = $_POST['quantity'];
		// $remarks = $_POST['remarks'];
		// $dentalcharges = $_POST['dentalcharges'];

		// $updateQ = "UPDATE b_dental_charges SET dental_proc = '$dental_proc', quantity = '$quantity', remarks = '$remarks', dental_chg = '$dentalcharges' WHERE dental_proc_index = '$dental_proc_index'";

		// if ($conn -> query($updateQ) === TRUE) {
		//     echo "<script>alert('Dental Procedure Information Updated Successfully!');</script>";
		// } else {
		// 	 echo "<script>alert('Error updating record: " . $conn->error."');</script>";
		// }
	}
?>