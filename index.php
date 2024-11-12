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

        <!-- Slider Start -->
        <!-- banner -->

        <div id="section-1" class="section">
            <div id="top" class="callbacks_container">
                <ul class="rslides" id="slider4">
                <li>
                    <div class="container-fluid">

                        <div class="row">
                            <img src="websites-assets/img/banner.jpg" width="100%" alt="" class="img-fluid mt-5">
                            <div class="caption">


                            <div class="header-info">
                                <h1><a href="#">Online Medical Service Providing System</a></h1>
                            
                                <lable></lable>
                                <h3><a href="#"></a></h3>
                            </div>

                            </div>
                        </div>

                    </div>
                </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- banner -->	
        <!-- Slider End -->
        <!--About-->
        <div class="about section" id="section-2">
            <div class="about-head text-center">
                <h3 class="text-light">About Us</h3>
            </div>
            <div class="container">
                <div class="col-12 col-md-12">
                    <h4 class="text-center text-light"><b>Online Medical Service Providing System</b></h4>
                    <br>
                    <p align="justify" class="text-white">The Online Medical Service Providing System (OMS) 
                        is a platform that provides medical services to patients. 
                        If a patient wants to receive medical service from a doctor, 
                        they can go to the doctor section and send a service request. 
                        Once accepted by the doctor, they can chat with each other through the 
                        OMS messaging platform, allowing the patient to receive the desired medical service.</p>
                
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--/About-->
        <!-- Contact -->
        <div id="section-5" class="contact-section">
        <div class="contact-head text-center">

        <br>  
        <h3></h3>
        <br>
        <h4 style="color:#000"></h4>
        <br>
        <br>

        <br>  
        <h3 class="text-light">Contact Us</h3>
        <br>
        <h4 style="color:white">Do you have any query?</h4>
        <br>
        <h5 style="color:white">You can write here</h5>
        <div class="">
            <div class="container">
                <div class="col-md-4 address">
                <h4 style="color:#09F"></h4>
                <p style="color:#000">
                
                <br/>
                </p>
                <br/>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" action="submit-contact-us.php" enctype="multipart/form-data">
                                <div class="form-group row mb-3">
                                    <label class="col-12 col-sm-3 col-form-label"><b>Name:</b></label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" name="name" value="" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-sm-3 col-form-label"><b>Mobile:</b></label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" name="mobile" value="" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-sm-3 col-form-label"><b>Email:</b></label>
                                    <div class="col-sm-6">
                                    <input type="email" class="form-control" name="email" value="" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <br>
                                    <label class="col-sm-3 col-form-label"><b>Details</b>:</b></label>
                                    <div class="col-sm-6">
                                    <textarea class="form-control" name="details" rows="3" cols="12" required></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-lg btn-danger">Send</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <br>
        


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


