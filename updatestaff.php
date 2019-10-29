<?php
    include("connection.php");
    //include("auth.php");
    $id=$_GET['id'];
    

if(isset($_POST ['send'])){
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

        $update=mysqli_query($connection,"UPDATE staff SET email='$email', surname='$surname', firstname='$firstname', midname='$midname', sex='$sex', dob='$dob', maritalstatus='$maritalstatus', nationality='$nationality', stateoforigin='$stateoforigin', lga='$lga', hometown='$hometown', title='$title', religion='$religion', mobileno='$mobileno', peradd='$peradd', contactadd='$contactadd', referee='$referee', refereeadd='$refereeadd', refereemobileno='$refereemobileno', disability='$disability', otheractivity='$otheractivity', hubby='$hubby', faculty='$faculty', dep='$dep', qualification='$qualification' WHERE surname='$id'")or die (mysqli_error($connection));
        
        if($update){
        echo"<script>alert('Staff information updated successfuly thank you')
        location='addstaff.php'
        </script>";

    }else
    echo"<script>alert('Staff information not updated Pleas make sure you provide  us with correct data')</script>";
}

?>  
