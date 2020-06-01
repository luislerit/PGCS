<?php
	session_start();
	error_reporting(0);

	$dbhost = 'localhost:8111';
	$dbuser = 'root';
	$dbpass = '';
	$db_database = 'dental_clinic';
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db_database);

	if ($conn->connect_error) {
		die("Connection failed: ".$conn->connect_error);
	}

	echo '<link href = "css/style.css" rel = "stylesheet">';
	if(isset($_SESSION['session_id'])) {
		$user = $_SESSION['session_id'];
		$id = $_GET['id'];
	}
?>