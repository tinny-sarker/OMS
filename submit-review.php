<?php
  require_once('functions/function.php');
  needtologin();
  user();
  if(!empty($_POST))
  {
    
    $id=$_SESSION['id'];
    $review=mysqli_real_escape_string($con,$_POST['review']);

    $insert="insert into review(user_id,review) 
    values ('$id','$review')";

    $Q=mysqli_query($con,$insert);

    if($Q){
      $_SESSION['success_alert']='1';
      header("Location: review.php");
    }else{
      $_SESSION['success_alert']='5';
      header("Location: review.php");
    }

  }

?>



