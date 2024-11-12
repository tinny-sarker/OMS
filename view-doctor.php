<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();
  admin();

  $id=$_GET['v'];
  $select="SELECT * FROM user where slug='$id'";

  $Query=mysqli_query($con,$select);
  $data=mysqli_fetch_assoc($Query);

?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
        <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-light">

          <div class="row">
              <div class="col-md-10 card_header_text">
                
                <b>View Doctor Information</b>
              
              </div>
              <div class="col-md-2 card_header_for_one_button">
                
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <table class="table table-striped table-bordered view_table">
                <tr>
                  <td>Doctor Name</td>
                  <td>:</td>
                  <td>
                      <?=$data['name']?>
                  </td>
                </tr>
                <tr>
                  <td>Doctor Email</td>
                  <td>:</td>
                  <td>
                      <?=$data['email']?>
                  </td>
                </tr>
                <tr>
                  <td>Doctor Mobile</td>
                  <td>:</td>
                  <td>
                      <?=$data['mobile']?>
                  </td>
                </tr>
                <tr>
                  <td>Doctor Address</td>
                  <td>:</td>
                  <td>
                      <?=$data['address']?>
                  </td>
                </tr>
                <tr>
                  <td>Doctor Study</td>
                  <td>:</td>
                  <td>
                      <?=$data['study']?>
                  </td>
                </tr>
                <tr>
                  <td>Doctor Working Place</td>
                  <td>:</td>
                  <td>
                      <?=$data['working_place']?>
                  </td>
                </tr>
                <tr>
                  <td>Doctor NID</td>
                  <td>:</td>
                  <td>
                      <?=$data['nid']?>
                  </td>
                </tr>
                <tr>
                  <td>Doctor Joining Date</td>
                  <td>:</td>
                  <td>
                      <?=$data['joining_date']?>
                  </td>
                </tr>
                <tr>
                  <td>Doctor Photo</td>
                  <td>:</td>
                  <td>
                  <?php 
                    if($data['photo']!=''){
                  ?>
                      <img src="uploads/<?=$data['photo']?>" height="40px" width="40px">
                  <?php 
                    }else{
                  ?>
                      <img src="assets/img/avatar.jpg" height="40px" width="40px">
                  <?php 
                    }
                  ?>  
                  </td>
                </tr>
              </table>
            </div>
            <div class="col-md-2"></div>
            </div>
          </div>
          <div class="card-footer text-muted">

          </div>
        </div>
      </div>        
      <!-- /.content -->
      </div>
    <!-- /.content-wrapper -->
  

<?php

  get_footer();


?>


