<?php
    require_once('functions/function.php');
    $select="SELECT * FROM user WHERE role_id='3' ORDER BY id DESC";
    $Q=mysqli_query($con,$select);
    // $Query=mysqli_fetch_assoc($Q);
?>

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
        
   
        <!-- Contents -->




        <div class="container recommendation_container"> 
                <hr>
                <div class="row">
                <div class="card-body">
                    <?php
                        foreach($Q as $data){
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center recommendation_spot_title text-light"><b><?= $data['name'] ?></b></h2>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-1">
                        
                        </div>
                        <div class="col-md-3">
        
                        </div>

                        <div class="col-md-4">
                            <?php 
                                if($data['photo']!=''){

                            ?>
                                <img src="uploads/<?=$data['photo']?>" alt="User photo" class="img-fluid mx-auto d-block profile-img img-thumbnail" height="85px" width="85px">							
                            <?php 
                                }else{
                            ?>
                                <img src="assets/img/avatar.jpg" alt="User photo" class="img-fluid mx-auto d-block profile-img img-thumbnail" height="85px" width="85px">
                            <?php 
                            }
                            
                            ?>

                            <br>
                            <table class="table">							
                                <tr> 
                                    <td><b>Email </b></td>

                                    <td><b>:</b></td>

                                    <td><?= $data['email'] ?></td>
                                </tr>
                                
                        
                                <tr>
                                    <td><b>Mobile </b></td>
                                    <td><b>:</b></td>
                                    <td><?= $data['mobile'] ?></td>
                                </tr>
                                
                                
                                <tr>    
                                    <td><b>Address </td>
                                    
                                    <td><b>:</b></td>

                                    <td><?= $data['address'] ?></td>
                                </tr>
                                <tr>    

                                    <td><b>Study </td>
                                    
                                    <td><b>:</b></td>

                                    <td><?= $data['study'] ?></td>
                                
                                </tr>
                                <tr>

                                    <td></td>
                                    <td></td>
                                    <td></td>

                                </tr>

                            </table>
                        </div>

                        <div class="col-md-1">
                        </div>
                        
                        <div class="col-md-2">
                            <br><br><br><br><br>       
                            <a href="service-request.php?s=<?= $data['id'] ?>" class="btn btn-md btn-dark text-white text-center">Send Request</a>
                        
                        
                        </div>
                    
                    </div>


                    <br>
                    
                    
                    <hr class="recommendation_hr">
                    <?php
                        
                    }
                    
                    ?>
                </div>
                </div>
                
        </div>


        <!-- Footer Start -->


        <div class="fotter">
            <div class="container">
                <div class="fotter-grids">
                <div class="col-md-4 fotter-left">
                    <p style="text-align:justify"></p>
                </div>
                <div class="col-md-4 fotter-middle">

                    <h3></h3>
                    <div class="footer-list">
                        <h3></h3>
                        <div class="footer-list">
                        </div>
                    </div>
                    <div class="col-md-4 fotter-right" style="padding-left:10px">
                        <h3></h3>
    
    
                        <br/>
                        <div class="footer-list">
                        </div>
                    </div>
                    <div class="social-icons">
                        <a href="#"><span class="facebook"> </span></a>
                        <a href="#"><span class="twitter"> </span></a>
                        <a href="#"><span class="googleplus"> </span></a>
                        <a href="#"><span class="pinterest"> </span></a>
    
    
                        <a href="#"><span class="instagram"> </span></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                </div>
            </div>
        </div>
        
        <div class="copyright text-right">
            <p style="padding-right:100px"></p>
        
        </div>
        <!-- Footer End -->
        <!-- js -->
        <script src="websites-assets/js/bootstrap.min.js"></script>
        <script src="websites-assets/js/bootstrap.bundle.min.js"></script>
    
    </body>
    



</html>










