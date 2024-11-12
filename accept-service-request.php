<?php
  require_once('functions/function.php');
  needtologin();

  $slug=$_GET['s'];
  $update="UPDATE services SET service_request_pending_status='0' WHERE service_slug='$slug'";

  $Q=mysqli_query($con,$update);

  if($Q){
    $_SESSION['success_alert']='1';
    

    if($_SESSION['role_id']=="2"){
    }elseif($_SESSION['role_id']=="3"){
      header('Location: doctor-approved-requests.php');
    }
    
  }else{
    
    $_SESSION['success_alert']='5';

    if($_SESSION['role_id']=="2"){

    }elseif($_SESSION['role_id']=="3"){
      header('Location: doctor-pending-requests.php');
    }
    
  }


  

?>


