<?php
  require_once('functions/function.php');
  needtologin();  

  $slug=$_GET['s'];
  $select="SELECT * FROM services where service_slug='$slug'";
  $Query=mysqli_query($con,$select);
  $data=mysqli_fetch_assoc($Query);
  $service_id=$data['service_id'];
  
  $select_msg="SELECT * FROM service_messenger INNER JOIN user ON service_messenger.sender_id=user.id WHERE service_id='$service_id' ORDER BY service_messenger_id ASC";
  $messages=mysqli_query($con,$select_msg);

  ?>

    <?php
        foreach($messages as $message){
            if($message['sender_id']==$_SESSION['id']){ 
    ?>
        <tr class="bg-success text-white">
            <?php
            }
            
            else{
                ?>
                <tr class="bg-dark text-white">
                <?php
            }
            if($message['sender_id']==$_SESSION['id']){ 
            ?>
            <td><b>Me</b></td>
            <?php
            }else{
            ?>
            <td><b><?= $message['name']; ?></b></td>
            <?php
            }
            ?>
            <td><b><?= $message['messages']; ?></b><br><br><span class="text-right"><?= $message['message_time']; ?> | <?= $message['message_date']; ?></span></td>
        </tr>
    <?php
        }
    
    ?>
    