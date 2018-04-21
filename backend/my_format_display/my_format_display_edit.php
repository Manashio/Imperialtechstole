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

                <input type="hidden" name="id" class="form-control input_bar" value ="<?php echo $getRow['my_id']; ?>">



             <label for="exampleInputEmail1">Display Name</label>
                <input type="text" name="name" class="form-control input_bar" value ="<?php echo $getRow['my_display_name']; ?>">



             <label for="exampleInputEmail1">Display Size</label>
                <input type="text" name="size" class="form-control input_bar" value ="<?php echo $getRow['my_display_size']; ?>"> 



             <label for="exampleInputEmail1">Dispaly Brand</label>   
                <input type="text" name="brand" class="form-control input_bar" value ="<?php echo $getRow['my_display_brand']; ?>">  



             <label for="exampleInputEmail1">Display Specification</label>  
                <input type="text" name="specification" class="form-control input_bar" value ="<?php echo $getRow['my_display_specification']; ?>">



             <label for="exampleInputEmail1">Display Broucher</label>
                <input type="text" name="broucher" class="form-control input_bar" value ="<?php echo $getRow['my_display_broucher']; ?>">


             <label for="exampleInputEmail1">Display image</label>
                <input type="text" name="image" class="form-control input_bar" value ="<?php echo $getRow['my_display_image']; ?>">


                <label class="">Display Status</label>
                <select class="form-control" name="status">
                        <option selected><?php echo $getRow['my_display_status']; ?></option>
                        <option value="<?php if($getRow['my_display_status']=='active'){
                                echo "inactive";
                        }else{
                                echo "active";
                        }?>">
                        <?php if($getRow['my_display_status']=='active'){
                                echo "inactive";
                        }else{
                                echo "active";
                        }?>
                        </option>
                </select>

                

                <button type="submit" class="mt-5 btn btn-success pl-5 pr-5"><i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp; save </button>
           
        </form>

          
       </div>
</div>

<?php
     include_once('../subview/footer.php');

     
?>