<?php
  require_once('functions/function.php');
  needtologin();
  admin();
  if(!empty($_POST))
  {

    $slug=$_POST['slug'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $study=$_POST['study'];
    $working_place=$_POST['working_place'];
    $nid=$_POST['nid'];
    $joining_date=$_POST['joining_date'];
    
    if(empty($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name'])){      
    
    $imageName=$_POST['old_photo'];;
    
    $update="UPDATE user SET name='$name',email='$email',mobile='$mobile',address='$address',study='$study',working_place='$working_place',nid='$nid',joining_date='$joining_date',photo='$imageName' WHERE slug='$slug'";
  
    $Q=mysqli_query($con,$update);

    if($Q){
    
      $_SESSION['success_alert']='2';
    
      header('Location: all-doctor.php');
    }

    }else{
    
    $image=$_FILES['photo'];


    $imageName='doctor_'.time().'_'.rand(100000,1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  

    $update="UPDATE user SET name='$name',email='$email',mobile='$mobile',address='$address',study='$study',working_place='$working_place',nid='$nid',joining_date='$joining_date',photo='$imageName' WHERE slug='$slug'";  
    $Q_image=mysqli_query($con,$update);

    if($Q_image){
    move_uploaded_file($image['tmp_name'], 'uploads/'.$imageName);
    $_SESSION['success_alert']='2';
    header('Location: all-doctor.php');
    }

  }

  }    
?>


