<?php

     require_once('../core/session.php');
     require_once('../core/db_conn.php');
     include_once('../controller/date_time.php');
     include_once('../functions/function.inc.php');
     include_once('../subview/head.php');
     include_once('../subview/sidenav.php');

     
     $id = $_GET['id'];
     require_once('../controller/my_format_display.php'); 
   
?>          

<div class="content">
     <div class="container">

          <div class="mt-5">
    
                <form action="my_format_display_update.php" method="post">
                <input type="text" name="id" class="form-control input_bar" value ="<?php echo $getRow['my_id']; ?>">
                <input type="text" name="name" class="form-control input_bar" value ="<?php echo $getRow['my_display_name']; ?>">
                <input type="text" name="size" class="form-control input_bar" value ="<?php echo $getRow['my_display_size']; ?>">         
                <input type="text" name="brand" class="form-control input_bar" value ="<?php echo $getRow['my_display_brand']; ?>">    
                <input type="text" name="specification" class="form-control input_bar" value ="<?php echo $getRow['my_display_specification']; ?>">
                <input type="text" name="broucher" class="form-control input_bar" value ="<?php echo $getRow['my_display_broucher']; ?>">
                <input type="text" name="image" class="form-control input_bar" value ="<?php echo $getRow['my_display_image']; ?>">
                <input type="text" name="status" class="form-control input_bar" value ="<?php echo $getRow['my_display_status']; ?>">
                
                <!-- <input type="text" name="status" class="form-control input_bar" id="" placeholder="Display status"> -->
                <button type="submit" class="mt-5 btn btn-success pl-5 pr-5"><i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp; save </button>
           
        </form>

          
       </div>
</div>

<?php
     include_once('../subview/footer.php');

     
?>