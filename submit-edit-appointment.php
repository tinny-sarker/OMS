<?php
  require_once('functions/function.php');
  needtologin();
  doctor();
  if(!empty($_POST))
  {

    $slug=$_POST['slug'];
    $appointment_date=$_POST['appointment_date'];
    $appointment_time=$_POST['appointment_time'];
 
    $update="UPDATE services SET appointment_date='$appointment_date',appointment_time='$appointment_time' WHERE service_slug='$slug'";
  
    $Q=mysqli_query($con,$update);

    if($Q){
    
      $_SESSION['success_alert']='2';
    
      header('Location: doctor-approved-requests.php');
    }


  }    


?>


