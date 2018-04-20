<?php
     require_once('../core/session.php');
     require_once('../core/db_conn.php');
     include_once('../controller/date_time.php');
     include_once('../functions/function.inc.php');
     include_once('../subview/head.php');
     include_once('../subview/sidenav.php');

     
     $id = $_GET['id'];
     require_once('../controller/my_catagory.php'); 
   
?>          

<div class="content">
     <div class="container">

         

          <div class="mt-5">
          <?php include_once('../subview/bc.php');?>
    
                <form action="my_catagory_update.php" method="post">
                    <input type="hidden" name="id" id="" class="form-control input_bar" value="<?php echo $getRow['my_id']; ?>" required>                  
                    <input type="text" name="new_name" id="" class="form-control input_bar" value="<?php echo $getRow['my_catagory_name']; ?>" required>
                    <input type="text" name="new_seo" id="" class="form-control input_bar" value="<?php echo $getRow['my_catagory_seo']; ?>" required>
                    <input type="text" name="new_pagename" class="form-control input_bar" id="" value="<?php echo $getRow['my_pagename']; ?>" required>
                    <input type="text" name="new_status" class="form-control input_bar" id="" value="<?php echo $getRow['my_catagory_status']; ?>" required>
                    <!-- <input type="text" name="status" id="" placeholder="Active / Disable"> -->
               <button type="submit" class="mt-5 btn btn-success pl-5 pr-5"><i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp; save </button>
           
        </form>

          
       </div>
</div>

<?php
     include_once('../subview/footer.php');

     
?>