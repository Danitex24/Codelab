<?php
	include("connection.php");
	$email=$_GET["email"];
	$delete=mysqli_query($connection, "DELETE FROM staff WHERE username='$email'")or die(mysqli_error($connection));
			if($delete==1){
				echo"<script>alert('staff successfuly deleted thank you')
				location='viewstaff.php';
				</script>";
			}else{
				echo"<script>alert('staff not deleted You are not athurise to perform this function pls contact the admin')
				location='index.php';
				</script>";	}
			?>