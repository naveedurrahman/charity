


<?php
	session_start();
	include 'dbcon.php';


	$did = $_GET['did'];

	$delete = "DELETE FROM `sponser` WHERE `id`='$did'";
	$result = mysqli_query($con,$delete);
	if ($result==true) {
		
		$_SESSION['success_msg'] = "Your Record is deleted successfully";
		?>

		 <script>window.open('sponser_dis.php','_self');</script>
		 <?php
	}
	else
	{
		$_SESSION['error_msg'] = "Your Record is not deleted there is some error";
		?>
		 <script>window.open('sponser_dis.php','_self');</script>
		 <?php
	}
?>