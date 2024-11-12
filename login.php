<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Online Medical Service Providing System </title>
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

  <div class="container-fluid login">
    <!-- Main row -->
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <div class="card">
      <div class="card-header bg-light">
        <div class="row">
          <div class="col-md-6 card_header_text"><b>
            Log In
          </b>  
          </div>
          <div class="col-md-6 card_header_for_one_button float-sm-right">
          <?php
          require_once('functions/function.php');

          if(!empty($_POST))
          {
            $email=$_POST['email'];
            $password=md5($_POST['password']);
            
            $select="SELECT * FROM user WHERE email='$email' AND password='$password'";
            $Q=mysqli_query($con,$select);
            $Q_data=mysqli_fetch_assoc($Q);
    
            $select_sa="SELECT * FROM super_admin WHERE sa_email='$email' AND sa_password='$password'";
            $Q_sa=mysqli_query($con,$select_sa);
            $Q_sa_data=mysqli_fetch_assoc($Q_sa);
                        
            if($Q_data){
                                
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

                  if($Q_data['role_id']=='1'){
                    header('Location: dashboard.php');
                  }else{
                    header('Location: my-profile.php');

                  }
                }elseif($Q_sa_data){

                    $_SESSION['id']="SA1";
                    $_SESSION['email']=$Q_sa_data['sa_email'];
                    $_SESSION['name']="Admin";
                    $_SESSION['photo']="";
                    $_SESSION['role_id']=$Q_sa_data['role_id'];
                    $_SESSION['sa_password']=$Q_sa_data['sa_password'];
                    $_SESSION['success_alert']='0';

                    header('Location: dashboard.php');       
                }else{
                    echo '<span class="text-danger"><b>Your email or password did not match!<b></span>';
                    //header('Location: login.php');
                }
          }
          ?>
          </div>
        </div>
      </div>
      <form method="post" action="">
        
      
      <div class="card-body">
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"><b>Email <span class="text-danger">*</span></b></label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="" name="email" required>
            </div>
            <div class="col-sm-1"></div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"><b>Password <span class="text-danger">*</span></b></label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="" name="password" required>
            </div>
            <div class="col-sm-1"></div>
          </div>
      </div>
      
      <div class="card-footer text-muted text-center">
        <button type="submit" class="btn btn-danger">Log in</button>
      </div>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>        
  </div>
    <!-- all js link -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/custom.js"></script>
  
  </body>
</html>




