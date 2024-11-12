<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();
  doctor();

  $id=$_SESSION['id'];
  $select="SELECT * FROM services INNER JOIN user ON services.user_id=user.id WHERE service_request_pending_status='0' AND servicer_id='$id' ORDER BY service_id DESC";
  $Query=mysqli_query($con,$select);

  $select="SELECT * FROM user WHERE id='$id'";
  
  $Q_emp=mysqli_query($con,$select);
  $data_emp=mysqli_fetch_assoc($Q_emp);
    
  if($_SESSION['success_alert']=='1'){
  ?>
    <script>
      swal({title: "Done!", text: "Doctor service request accepted successfully!", icon: "success", button: "OK",});
    </script>


  <?php

    $_SESSION['success_alert']='0';
  

  }

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
                    <b>All Approved Doctor Service Requests</b>
                  </div>
                  <div class="col-md-2 card_header_for_one_button">
                    
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable">
                  <thead>

                    <tr>
                      <th>Service Details</th>
    
                      <th>Sender</th>
                      <th>Photo</th>
                      <th>Sending Date</th>
                      <th>Appoinment Date</th>
                      <th>Appoinment Time</th>
                      <th>Appoinment</th>
                      <!-- <th>Prescription</th> -->
                      <th>Messenger</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                      foreach($Query as $data){
                    ?>
                      <tr>
                        <td><?= $data['service_details']; ?></td>
                        <td><?= $data['name']; ?></td>
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
                        <td><?= $data['service_request_sending_date']; ?></td>
                        <td><?= $data['appointment_date']; ?></td>
                        
                        <td><?php if($data['appointment_time']!=''){ $date = strtotime($data['appointment_time']); echo date('g:i A', $date); } ?></td>
                    
                        <td>
                        <a href="edit-appoinment.php?e=<?= $data['service_slug']; ?>" class="btn btn-info">Appoinment</a>
                        </td>
                        <!-- <td>
                        <a href="edit-prescription.php?e=<?= $data['service_slug']; ?>" class="btn btn-primary">Prescription</a>
                        </td> -->
                        
                        
                        <td>
                        
                        
                        <a href="service-messenger.php?s=<?= $data['service_slug']; ?>" class="btn btn-success"><i class="fas fa-comments"></i></a>
                        
                        </td>
                      </tr>


                    <?php
                      }
                    
                  
                    ?>
                
                
                </tbody>
                
                </table>
                </div>
              </div>

              <div class="card-footer text-muted">

              </div>
            </div>
          </div>
        </div>        
      <!-- /.content -->
      </div>
    <!-- /.content-wrapper -->

<?php

  get_footer();

?>



<script>

  $(document).ready(function(){

    
    $('#dataTable').DataTable();

  
  });



</script>








