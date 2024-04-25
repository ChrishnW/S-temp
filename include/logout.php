<?php
	include('auth.php');
	if(session_destroy()){
		include('connect.php');
		date_default_timezone_set('Asia/Manila');
		header("location: ../index.php");
	}
?>