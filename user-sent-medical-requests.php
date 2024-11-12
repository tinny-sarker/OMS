<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();
  user();

  $id=$_SESSION['id'];
  $select="SELECT * FROM services INNER JOIN user ON services.servicer_id=user.id WHERE service_request_pending_status='1' AND user_id='$id' ORDER BY service_id DESC";
  $Query=mysqli_query($con,$select);

  $select="SELECT * FROM user WHERE id='$id'";
  
  $Q_emp=mysqli_query($con,$select);
  $data_emp=mysqli_fetch_assoc($Q_emp);
    
  if($_SESSION['success_alert']=='1'){
  ?>
    <script>
      swal({title: "Done!", text: "Service request sent successfully!", icon: "success", button: "OK",});
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
      
                    <b>All Pending Medical Service Requests</b>
                  </div>
                  
                  <div class="col-md-2 card_header_for_one_button">  
                  </div>

                </div>
              </div>
              
              <div class="card-body">
              
                
                <table class="table table-striped table-bordered" id="dataTable">
                  <thead>

                    <tr>
                      <th>Service Details</th>
                
                      <th>Doctor</th>
                      <th>Sending Date</th>
                      
                      <th>Status</th>
                    </tr>

                  
                    

                  </thead>
                  <tbody>
                    <?php

                      foreach($Query as $data){


                        $servicer_id=$data['servicer_id'];
                        $services="SELECT role_id FROM user WHERE id='$servicer_id'";
                        $servicer_role=mysqli_query($con,$services);
                        $servicer_role_id=mysqli_fetch_assoc($servicer_role);
                        if($servicer_role_id['role_id']=='3'){
                    ?>
                      <tr>
                        
                        <td><?= $data['service_details']; ?></td>
                        <td><?= $data['name']; ?></td>
                        <td><?= $data['service_request_sending_date']; ?></td>
                        <td>
                          Pending
                        </td>
                      </tr>
                    <?php
                        
                      }
                      
                      }
                    ?>
                  </tbody>
                </table>
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








