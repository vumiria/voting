<?php
	require_once 'admin/dbcon.php';

	if(isset($_POST['User-login'])){
		$idno=$_POST['idno'];

		$result = $conn->query("SELECT * FROM voters WHERE id_number = '$idno' && `account` = 'active' && `status` = 'Unvoted'") or die(mysqli_errno());
		$row = $result->fetch_array();
		$voted = $conn->query("SELECT * FROM `voters` WHERE id_number = '$idno' && `status` = 'Voted'");
		$numberOfRows = $result->num_rows;


		if ($numberOfRows > 0){
			session_start();
			$_SESSION['voters_id'] = $row['voters_id'];
			header('location:vote.php');
		}

		if($voted == 1){
			echo " <br><center><font color= 'red' size='3'>You have Voted</center></font>";
		}
		else{
			echo " <br><center><font color= 'red' size='3'>Login Error, Check well your roll nomber</center></font>";

		}

	}
?>
