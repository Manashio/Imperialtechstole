<?php

     require_once('../core/session.php');
     require_once('../core/db_conn.php');
     include_once('../controller/date_time.php');
     include_once('../functions/function.inc.php');
     include_once('../subview/head.php');
     include_once('../subview/sidenav.php');

     
     $id = $_GET['id'];
     require_once('../controller/my_videoconferencing.php'); 
   
?>          

<div class="content">
     <div class="container">
          <div class="mt-5">
                <form action="my_videoconferencing_update.php" method="post">
                <input type="hidden" name="id" class="form-control input_bar" value ="<?php echo $getRow['my_id']; ?>">
                <input type="text" name="name" class="form-control input_bar" value ="<?php echo $getRow['my_videoconference_name']; ?>">
                <input type="text" name="image" class="form-control input_bar" value ="<?php echo $getRow['my_images']; ?>"> 

                  <textarea name="point" id=""  rows="4" class="form-control input_bar">
                  <?php echo $getRow['my_point_desc']; ?>
                  </textarea>

                  <textarea name="multipart" id="" rows="4" class="form-control input_bar">
                  <?php echo $getRow['my_multipart_desc']; ?>
                  </textarea>

                <input type="text" name="brand" class="form-control input_bar" value ="<?php echo $getRow['my_brand']; ?>">
                <input type="text" name="status" class="form-control input_bar" value ="<?php echo $getRow['my_status']; ?>">
                <button type="submit" class="mt-5 btn btn-success pl-5 pr-5"><i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp; save </button>
           
        </form>

          
       </div>
</div>

<?php
     include_once('../subview/footer.php');

     
?>