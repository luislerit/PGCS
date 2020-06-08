<?php
	session_start();
	// error_reporting(0);

	$dbhost = 'localhost:8111';
	$dbuser = 'root';
	$dbpass = '';
	$db_database = 'school_billing_db';
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db_database);

	if ($conn->connect_error) {
		die("Connection failed: ".$conn->connect_error);
	}

	if(isset($_SESSION['session_id'])) {
		$user = $_SESSION['session_id'];
		$id = $_GET['id'];
	}
?>