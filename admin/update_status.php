<?php
	require_once 'dbcon.php';
	$conn->query("UPDATE voters SET account = 'Active', status = 'Unvoted'")or die(mysql_error());
	echo "<script> window.location='voters.php' </script>";
?>
