<?php

  include("connection.php");
  session_start();
  $id=$_SESSION['id'];
  if(isset($_POST['submit'])){
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $select=mysqli_query($connection,"SELECT * FROM users WHERE username='$user' AND password='$pass'")or die(mysqli_error($connection));
    $fetch=mysqli_fetch_array($select, MYSQLI_ASSOC);
    if($user==$fetch['username'] and $pass==$fetch['password']){
      $_SESSION['loggin']=1;
      $_SESSION['logged']=true;
      $_SESSION['id']=$fetch['id'];
      $_SESSION['role']=$fetch['role'];

      if($fetch['role']=="Administrator"){
        header("location:home.php");
      }elseif($fetch['role']=="Staff"){
        header("location:staffboard.php");
      }elseif($fetch['role']=="monitor"){
        header("location:monitorboard.php");
      }else{
        echo "invalid username or password please make sure your account is created before you can login";
      }
      
    }
  
}

?>






<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>STAFF PES - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Staff PES -Login Area</div>
      <div class="card-body">
        <form class="form" method="POST">
          <div class="form-group">
            <div class="form-label-group">
              Username
            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              Password
              <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
              </div>
            </div>
            <div class="form-group">
            <div class="checkbox">
              <label>
                Role
               <select name="role" required="yes">
                <option selected="selected">Select User</option>
                 <option name="Administrator">Administrator</option>
                 <option name="Staff">Staff</option>
                 <option name="Monitor">Monitor</option>
               </select>
              </label>
              </div>
            </div>
          </div>
          <input class="btn btn-primary btn-block" type="submit" name="submit" value="Login" >
        </form>
        <div class="text-center">
          <h4>STAFF PES &copy 2019</h4>
          <strong>Designed by: ADASHO DANIEL</strong>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
