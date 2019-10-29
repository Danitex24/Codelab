<?php
  include("connection.php");
  include("topbar.php");


if(isset($_POST ['send'])){
  $id=time().rand();
  $session=$_POST['session'];
  
  $insert=mysqli_query($connection,"insert into session (id, session) values('$id', '$session')")or die (mysqli_error($connection));
    
    if($insert){
    echo"<script>alert('session successfull created thank you')
    location='home.php';</script> ";

  }else
  echo"<script>alert('session not created  you are not athourise to perform this function pls contact the admin for full access')location='index.php';</script> ";
}
?>
<br><br><br>


<!DOCTYPE html>
<html>
<head>
	<title>Create session</title>
</head>
<body>
	<div>

	<form class="form" method="POST">
		<table class="table table-bordered"  width="100%" cellspacing="0" cellpadding="0"  style="align-content: center;">
			<thead>
				<th>Enter Session</th>
				<th>Period</th>
			</thead>
			<tr align="left">
				<td><input type="text" name="session" placeholder="Enter Session" required="required"></td>
				<td><input type="text"  placeholder="2019" readonly="yes"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="send" value="submit now">
				</td>
			</tr>
		</table>
	</form>
	</div>

</body>
</html>