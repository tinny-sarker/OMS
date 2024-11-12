<?php
  require_once('functions/function.php');
  needtologin();
  admin();
  if(!empty($_POST))
  {

    $slug=uniqid('DOCTOR');

     $name=$_POST['name'];
     $email=$_POST['email'];
     $mobile=$_POST['mobile'];
     $study=$_POST['study'];
     $working_place=$_POST['working_place'];
     $address=$_POST['address'];
     $nid=$_POST['nid'];
     $joining_date=$_POST['joining_date'];
     $password=md5($_POST['password']);
     $repass=md5($_POST['repassword']);
     $image=$_FILES['photo'];
     $imageName='doctor_'.time().'_'.rand(100000,1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
    
     $insert="insert into user(name,email,mobile,address,study,working_place,nid,joining_date,password,photo,slug,role_id) 
     values ('$name','$email','$mobile','$address','$study','$working_place','$nid','$joining_date','$password','$imageName','$slug','3')";

     if($password==$repass){
  
      $Q=mysqli_query($con,$insert);

      if($Q){
       move_uploaded_file($image['tmp_name'], 'uploads/'.$imageName);
       $_SESSION['success_alert']='1';
       header('Location: all-doctor.php');
      }
     }else{
       $_SESSION['success_alert']='8';
       header('Location: add-doctor.php');
     }

  }    
?>



