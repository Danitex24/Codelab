<?php
  include("connection.php");
  include("topbar.php");
  //include("auth.php");
if(isset($_POST ['send'])){
  $id=time().rand();
  $matric_no=$_POST['matric_no'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $sex=$_POST['sex'];
  $dob=$_POST['dob'];
  $email=$_POST['email'];
  $level=$_POST['level'];
  $course_option=$_POST['course_option'];
  $dob=$_POST['dob'];
  $session=$_POST['session'];
  $status="active";
  $role="student";
  
  $insert=mysqli_query($connection,"insert into student (id, entry_yr, course_option, session, level, matric_no, fname, lname, sex, dob, email, username, password, role, status) values('$id', '$entry_yr', '$course_option', '$session', '$level', '$matric_no', '$fname', '$lname', '$sex', '$dob', '$email', '$username', '$password', '$role', '$status')")or die (mysqli_error($connection));
    
    if($insert){
    echo"<script>alert('student successfull created thank you')
    location='addstudent.php';</script> ";

  }else
  echo"<script>alert('student not created  you are not athourise to perform this function pls contact the admin for full access')location='index.php';</script> ";
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

               <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Register New Student</li>
        </ol>



<!-- student registration form begins-->
        <form class="form" method="post">
              <table class="table table-bordered"  width="100%" cellspacing="0" cellpadding="0"  style="align-content: center;">
            <thead ><h4>Student Registration Form</h4></thead>
                    <th align="center"> Student Bio data</th>
                    <th align="center">Login info </th>
                    <th align="center">Addtional info</th>
            <tr>
              <td><input type="text" name="fname" placeholder="First Name" required="required"></td>
              <td><input type="text" name="lname" placeholder="Last Name" required="required"></td>
              <td style="background-color: lightgrey; border-color: none; color: white;"><input type="text" value="student" readonly="yes"></td>
            </tr>
            <tr>
             <td ><input type="text" name="username" placeholder="User Name" required="required"></td>
              <td><input type="password" name="password" placeholder="Enter Password" required="required"></td>
              <td ><input type="text" name="email" placeholder="Email Address" required="required"></td>
            </tr>
            <tr>
              <td ><select name="sex">
                      <option>Select Student Gender</option>
                        <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select></td>
              <td ><input type="text" name="matric_no" placeholder="Student Matric Number" required="required"></td>
              <td ><input type="text" name="dob" placeholder="date of birth Y-M-D"></td>
            </tr>

            <tr>
             <td><?php 
                  $session=mysqli_query($connection, "SELECT * FROM session")or die (mysqli_error($connection));
            ?>
            <select value="session" >
            <option>Select session in table</option>
            <option value="session">
            <?php while ($rows=mysqli_fetch_array($session)) {?>
                <?php echo $rows['session'] ?>
              <?php } ?>
          <?php  ?>
            </option>
              </select>
             </td>
              <td><input type="text" name="course_option" placeholder="Course Option " required="required"></td>
              <td><input type="text" name="level" placeholder=" level" required="required"></td>
            </tr> 
            <!--<td> <input type="file" name="fileToUpload" id="fileToUpload"></td>-->
            <td><input type="submit" name="send" value="Submit Now"  class="btn btn-primary btn-block"></td>
            <td></td>
          </table>
        </form>
        <hr style="outline-color: blue;">
        
              <div style="background-color: none, color:green"><marquee ><h4 style="background-color: none; color: blue;">Make sure you enter the date with the following format <strong style="background-color: none; color: red;">year-month-day</strong> else the system will triger errors! and data will not be submited thank you.</h4></marquee></div><hr>
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
