<?php
  include("connection.php");
  //include("auth.php");
if(isset($_POST ['send'])){
  $id=time();
  $status="active";
  $username=$_POST['username'];
  $password=$_POST['password'];
  $entrance_period=$_POST['entrance_period'];
  $role=$_POST['role'];
  

  $insert=mysqli_query($connection,"insert into users (id, username, password, status, entrance_period, role) values('$id', '$username','$password', '$status','$entrance_period','$role')")or die (mysqli_error($connection));
    
    if($insert){
    echo"<script>alert('user successfull created thank you')
    location='home.php';</script>";

  }else
  echo"<script>alert('user not created  you are not athourise to perform this function pls contact the admin for full access')location='index.php';</script>";
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

  <title>STAFF PES</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">STAFF PES</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
     
   
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addstaff.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Register Staff </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addstudent.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Register Student </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_user.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Create User </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="upload-course.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Upload course </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>View courses </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="allocate-course.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Allocate course </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Select staff courses </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">create user</li>
        </ol>
          <div class="card-body">
            <div class="table-responsive">
              <!--create user form begins-->
              <form class="form" method="POST">
              <table class="table table-bordered"  width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Entrance Period</th>
                    <th>Select Role</th>
                  </tr>
                </thead>
                
                <tbody>
                  <tr>
                    <td>
                      <input type="text" name="username" placeholder="Enter username here!" required="yes" >
                    </td>
                    <td>
                      <input type="text" name="password" placeholder="Enter password here!" required="yes" >
                    </td>
                    <td>
                      <select name="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        </select>
                    </td>
                    <td>
                      <input type="text" name="entrance_period" placeholder=" sample Y-M-D " required="yes" >
                    </td>
                    <td><select name="role">
                      <option selected="selected">Select User</option>
                        <option >Administrator</option>
                        <option >Staff</option>
                        <option >monitor</option>
                        </select>
                  </td>
                </tbody>
              </table>
              <!--end of form-->
              <input type="submit" name="send" value="Create User" class="btn btn-primary btn-block">
            </form>
              <div style="background-color: none, color:green">Make sure you enter the date with the following format <strong>year-month-day</strong> else the system will triger errors! and data will not be submited thank you.</div>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © STAFF PES 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
