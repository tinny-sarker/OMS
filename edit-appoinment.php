<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();
  doctor();

  $id=$_GET['e'];
  $select="SELECT * FROM services WHERE service_slug='$id'";

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
  
              <b>Appointment</b>
  
            </div>
              <div class="col-md-2 card_header_for_one_button">
                
              </div>
            </div>
          </div>

          <form method="post" action="submit-edit-appointment.php" enctype="multipart/form-data">
            
          <input type="hidden" class="form-control" id="" name="slug" value="<?= $id ?>" required>
          <div class="card-body">
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Appointment Date <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" id="" name="appointment_date" value="<?=$data['appointment_date']?>" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Appointment Time <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  
                  <input type="time" class="form-control" id="" name="appointment_time" value="<?=$data['appointment_time']?>" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
          </div>
          
          <div class="card-footer text-muted text-center">
            <button type="submit" class="btn btn-danger">Appointment</button>
          </div>
          </form>
        </div>
      </div>        
      <!-- /.content -->

    </div>

    <!-- /.content-wrapper -->
  
<?php
  get_footer();
?>

