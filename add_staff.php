<?php
    include("connection.php");
    //include("auth.php");  

if(isset($_POST ['send'])){
    $id=time().rand();
    $email=$_POST['email'];
    $surname=$_POST['surname'];
    $firstname=$_POST['firstname'];
    $midname=$_POST['midname'];
    $dob=$_POST['dob'];
    $maritalstatus=$_POST['maritalstatus'];
    $nationality=$_POST['nationality'];
    $stateoforigin=$_POST['stateoforigin'];
    $lga=$_POST['lga'];
    $hometown=$_POST['hometown'];
    $title=$_POST['title'];
    $religion=$_POST['religion'];
      $mobileno=$_POST['mobileno'];
        $peradd=$_POST['peradd'];
          $contactadd=$_POST['contactadd'];
            $referee=$_POST['referee'];
              $refereeadd=$_POST['refereeadd'];
              $refereemobileno=$_POST['refereemobileno'];
                $disability=$_POST['disability'];
                    $otheractivity=$_POST['otheractivity'];
                    $hubby=$_POST['hubby'];
                $faculty=$_POST['faculty'];
            $dep=$_POST['dep'];
        $qualification=$_POST['qualification'];

    $status="active";
    

    $insert=mysqli_query($connection,"insert into Staff (email, surname, firstname, midname, sex, dob, maritalstatus, nationality, stateoforigin, lga, hometown, title, religion, mobileno, peradd, contactadd, referee, refereeadd, refereemobileno, disability, otheractivity, hubby, faculty, dep, qualification) values('$email', '$surname', '$firstname', '$midname', '$sex', '$dob', '$maritalstatus', '$nationality', '$stateoforigin', '$lga', '$hometown', '$title', '$religion', '$mobileno', '$peradd', '$contactadd', '$referee', '$refereeadd', '$refereemobileno', '$disability', '$otheractivity', '$hubby', '$faculty', '$dep', '$qualification')")or die (mysqli_error($connection));
        
        if($insert){
        echo"<script>alert('Staff successfull created thank you')
        location='admin.php';</script>";

    }else
    echo"<script>alert('Staff not created  you are not athourise to perform this function pls contact the admin for full access')</script>";
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="images/logo.png" rel="icon"/>
        <title>School Management System</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script type="text/javascript">
                $(document).ready(function()
                {

                        $('#doctorlist').show();
                        $('.doctor li:first-child a').addClass('active');
                        $('.doctor li a').click(function(e){

                                var tabDiv=this.hash;
                                $('.doctor li a').removeClass('active');
                                $(this).addClass('.active');
                                $('.switchgroup').hide();
                                $(tabDiv).fadeIn();
                                e.preventDefault();

                        });


                });
        </script>
    </head>

    <body>
        <div class="container-fluid">
            
        <!--- Header Start -------->
        <div class="row header">

            <div class="col-md-10">
                    <h2 >School Mangement System</h3>
                        <h4 style="color: yellow"><marquee>Welcome to our online school management system</marquee></h4>
            </div>

            <div class="col-md-2 ">
                <ul class="nav nav-pills ">
                    <li class="dropdown dmenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                            <ul class="dropdown-menu ">
                                <li><a href="profile.html">Change Profile</a></li>
                                <li role="separator" class="divider"></li>
                                 <li><a href="index.html">Logout</a></li>
                            </ul>
                     </li>
                </ul>
            </div>
        </div>
  <!--- Header Ends --------->
       
        <div class="row">
    
        <!----- Menu Area Start ------>
        <div class="col-md-2 menucontent">
          
            <a href="#"><h1>Dashboard</h1></a>
                
                <ul class="nav nav-pills nav-stacked">
                  <li role="presentation"><a href="#">Faculty</a></li>
                  <li role="presentation"><a href="department.html">Department</a></li>
                  <li role="presentation"><a href="#">Course</a></li>
                  <li role="presentation"><a href="addstaff.php">Staff</a></li>
                  <li role="presentation"><a href="patients.html">Student</a></li>
                  <li role="presentation"><a href="nurse.html">Qualifications</a></li>
                  <li role="presentation"><a href="profile.html">Programe</a></li>
                </ul>
        </div>
       
    <!------ Staff Edit Info Modal Start Here ---------->


              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                       
                    
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Staff Information</h4>
                        </div>
                        
                        <div class="modal-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                             <form class="form-horizontal" action="editDoct.jsp" method="post">




                                <div class="form-group">
                                <label  class="col-sm-2 control-label">email Id:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="id" value="<?php echo $fetch['id']; ?>" placeholder="ID" readonly="yes" >
                                </div>
                                </div>

                                <div class="form-group">
                                <label  class="col-sm-2 control-label">Sur Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="surname" value="<?php echo $fetch['surname']; ?>"  placeholder="Sur Name" >
                                </div>
                                </div>

                                <div class="form-group">
                                      <label class="col-sm-2 control-label">First Name</label>
                                      <div class="col-sm-10">
                                          <input type="email" class="form-control" name="email" placeholder="First Name" >
                                      </div>
                                </div>

                    <div class="form-group">
                          <label class="col-sm-2 control-label">Midle Name</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control" name="pwd" placeholder="Midle Name" >
                          </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Sex</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="add" placeholder="Sex" readonly="yes">
                        </div>
                    </div>

                     <div class="form-group">
                        <label  class="col-sm-2 control-label">Date of Birth</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="phon" placeholder="Date of Birth"  readonly="yes">
                        </div>
                    </div>

                     <div class="form-group">
                        <label  class="col-sm-2 control-label">Marital Status</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="phon" placeholder="Marital Status" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Nationality</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="phon" placeholder="Nationality" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">State</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="stateoforigin"
                          value="<?php echo $fetch['stateoforigin']; ?>" placeholder="State" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Local Govt</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="phon" placeholder="Local Govt" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Mobile No.</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="phon" placeholder="Mobile Number" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Contact Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="phon" placeholder="Address" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Religion</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="phon" placeholder="Religion" >
                        </div>
                    </div>
              
             
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Department</label>
                        <div class="col-sm-10">

                        <select class="form-control" name="dept">
                        <option selected="selected">Depatrtment</option>
                        
                        <option> Computer Scince</option>
                        <option> Psycology</option>
                        <option> Maths</option>
                        <option> Agriculture</option>
                   
                              
                        </select>
                        </div>
                    </div>                                                        
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" value="Update"></button>
                                 </div>
                            </form>
                             </div>
                         </div>
                         </div>
                    </div>
                 </div>
               </div>
          
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>