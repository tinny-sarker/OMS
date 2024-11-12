<?php
  require_once('functions/function.php');
  needtologin();

  if(!empty($_POST))
  {  
     
    $service_slug=$_POST['service_slug'];

    $service_id=$_POST['service_id'];
    $sender_id=$_POST['sender_id'];
    $messages=mysqli_real_escape_string($con,$_POST['message']);
    
    $message_time=date("g:i a");
    $message_date=date("Y-m-d");

    $insert="INSERT INTO service_messenger(sender_id,messages,service_id,message_time,message_date) 
    VALUES ('$sender_id','$messages','$service_id','$message_time','$message_date')";

    $Q=mysqli_query($con,$insert);

    if($Q){

      header("Location: service-messenger.php?s=$service_slug");

    }
  }


?>





