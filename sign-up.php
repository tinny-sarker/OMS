<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Online Medical Service Providing System  </title>
        <!-- add icon link -->
        <!-- css -->
        <link rel = "icon" href ="websites-assets/img/icon_logo.png" type = "image/x-icon">
        <link rel="stylesheet" href="websites-assets/css/all.min.css">
        <link rel="stylesheet" href="websites-assets/css/all.css">
        <link rel="stylesheet" href="websites-assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="websites-assets/css/style.css">
        <!--js--> 
        <script src="websites-assets/js/jquery-3.4.1.min.js"></script>
        <script src="websites-assets/js/sweetalert2.all.min.js"></script> 
        <script src="websites-assets/js/custom.js"></script> 
    </head>
    <body>    
        <!--header-->
        <!--sticky-->
        <!-- Menu Start -->
        <div class="">
            <!--container-->
            <div class="container">
                <div class="top-nav">
                    <nav class="navbar fixed-top navbar-expand-md navbar-primary header-top">

                    <!-- icon & target for collapse -->

                    <button type="button" class="navbar-toggler button_custom" data-toggle="collapse" data-target="#menus" > <!-- target id collapse -->
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="menus">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a href="index.php" class="nav-link"> Home</a></li>
                            <li class="nav-item"><a href="index.php#section-2" class="nav-link"> About</a></li>
                            
                            
                            <li class="nav-item"><a href="web-doctor.php" class="nav-link"> Doctor</a></li>
                            <li class="nav-item"><a href="web-review.php" class="nav-link"> Reviews</a></li>
                            
                            <li class="nav-item"><a href="index.php#section-5" class="nav-link"> Contact</a></li>                            
                            <li class="nav-item"><a href="dashboard.php" class="nav-link"> Log In</a></li>
                            
                            <li class="nav-item"><a href="sign-up.php" class="nav-link"> Sign up</a></li>
                            <div class="clearfix"></div>

                        </ul>

                      </div>
                    </nav>
                </div>

                <div class="clearfix"> </div>
            </div>

            <!--/container-->

        </div>
        <!-- Menu End -->


        <!--/sticky-->















<!-- Main content -->
  <div class="container-fluid signup">
    <!-- Main row -->
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-7">
    <div class="card">
      <div class="card-header bg-light">
        <div class="row">
          <div class="col-md-4 card_header_text"><b>
            Sign Up
          </b>  
          </div>
          <div class="col-md-8 card_header_for_one_button float-sm-right">
          <?php
          require_once('functions/function.php');

          if(!empty($_POST))
          {
            $slug=uniqid('USER');

            $name=$_POST['name'];
            $email=$_POST['email'];
            $mobile=$_POST['mobile'];
            $address=$_POST['address'];
            $nid=$_POST['nid'];
            $password=md5($_POST['password']);
            $repass=md5($_POST['repassword']);
            $insert="insert into user(name,email,mobile,address,nid,password,slug,role_id) 
            values ('$name','$email','$mobile','$address','$nid','$password','$slug','4')";
            
            if($password==$repass){

              $signup=mysqli_query($con,$insert);
              
              // Login
              $select="SELECT * FROM user WHERE email='$email' AND password='$password'";
              $Q=mysqli_query($con,$select);
              $Q_data=mysqli_fetch_assoc($Q);

              if($signup && $Q_data){
                $_SESSION['id']=$Q_data['id'];
                $_SESSION['email']=$Q_data['email'];
                $_SESSION['name']=$Q_data['name'];
                $_SESSION['photo']=$Q_data['photo'];
                $_SESSION['role_id']=$Q_data['role_id'];
                $_SESSION['slug']=$Q_data['slug'];
                $_SESSION['password']=$Q_data['password'];
                $_SESSION['mobile']=$Q_data['mobile'];
                $_SESSION['study']=$Q_data['study'];
                $_SESSION['success_alert']='0';

                header('Location: my-profile.php');
              }else{
                echo '<span class="text-danger"><b>Your registration failed!<b></span>';
                //header('Location: login.php');
              
              }
            }else{
              
              echo '<span class="text-danger"><b>Your registration failed! Password confirmation did not match.<b></span>';
            
            
            }
            
          }
          ?>
          </div>
        </div>
      </div>
      <form method="post" action="">
        
      <div class="card-body">
          <div class="form-group row">

          <label for="" class="col-sm-3 col-form-label"><b>Name <span class="text-danger">*</span></b></label>

          <div class="col-sm-8">
              <input type="text" class="form-control" id="" name="name" required>
            </div>

            <div class="col-sm-1"></div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"><b>Email <span class="text-danger">*</span></b></label>

            <div class="col-sm-8">
              <input type="email" class="form-control" id="" name="email" required>

            </div>
            <div class="col-sm-1"></div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"><b>Mobile <span class="text-danger">*</span></b></label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="" name="mobile" required>
            </div>

            <div class="col-sm-1"></div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"><b>Address <span class="text-danger">*</span></b></label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="" name="address" required>
            </div>
            <div class="col-sm-1"></div>

          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"><b>NID <span class="text-danger">*</span></b></label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="" name="nid" required>
            </div>
            <div class="col-sm-1"></div>        
          </div>

          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"><b>Password <span class="text-danger">*</span></b></label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="col-sm-1"></div>
          </div>

          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"><b>Confirm Password <span class="text-danger">*</span></b></label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="repassword" name="repassword" required>
            </div>
            <div class="col-sm-1"></div>
          </div>
      </div>
      
      <div class="card-footer text-muted text-center">
        <button type="submit" class="btn btn-danger">Sign Up</button>
      </div>

    </form>
    </div>
  
    <div class="col-md-2"></div>
  
  </div>        
  </div>
    <!-- all js link -->

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/bootstrap-validate.js"></script>
    

    <script src="assets/js/custom.js"></script>
  </body>

</html>





<br><br><br><br><br>























