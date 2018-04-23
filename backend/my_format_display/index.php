<?php
     require_once('../core/session.php');
     require_once('../core/db_conn.php');
     include_once('../controller/date_time.php');
     include_once('../functions/function.inc.php');
     include_once('../subview/head.php');
     include_once('../subview/sidenav.php');

?>          

<div class="content">
     <div class="container">
          <div class="hero" style="height:100px;">
                  <span class="time">
                  <?php echo $index_date;?>
                      <div></div>
                      <em><i id="weather"> 00&deg;C</i></em>
                  </span>
          </div>

          <div class="text-center pt-5">
          <a href="" class="btn btn-info"  data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fas fa-plus"></i> &nbsp;&nbsp;&nbsp; Add new</a>
          </div>


          <div class="mt-5">
          <?php include_once('../subview/bc.php');?>
            
                <table class="main" >
                    <tr>
                        <th><i class="fas fa-key fa-lg"></i></th>
                        <th>Display Name</th>
                        <th>Size</th>
                        <th>Brand</th>                      
                        <th>Specification</th>
                        <th>Broucher</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Created On</th>
                        <th>Last Updated On</th>
                        <th><i class="fas fa-pencil-alt fa-lg"></i></th>
                        <th><i class="far fa-trash-alt fa-lg"></i></th>
                    </tr>
                    <script>let x = 1; </script>
                    <?php 
                    require_once('../controller/my_format_display.php');     
                    foreach ($getRows as $row) {    
                       $id = $row["my_id"];
                    ?>
                    <tr class="first">
                          <td>
                            <script>document.write(x++);</script>
                          </td>
                          <td><?php echo $row["my_display_name"];?></td>
                          <td><?php echo $row["my_display_size"];?></td>
                          <td><?php echo $row["my_display_brand"];?></td>
                          <td><?php echo $row["my_display_specification"];?></td>
                          <td><?php echo $row["my_display_broucher"];?></td>
                          <td><?php echo $row["my_display_image"];?></td>
                          <td><?php echo $row["my_display_status"];?></td>
                          <td><?php
                          if($row["my_display_created_at"]>'0'){
                            date_default_timezone_set('Asia/Kolkata');
                           $created_date =  date("dS M Y,  h:ia ",$row["my_display_created_at"]);
                           echo $created_date;
                          }else{
                            echo "<span style='color:red'>null</span>";
                          }
                           ?>
                           </td>
                          <td><?php
                          if($row["my_display_updated_at"]>'0'){                        
                          $updated_date = date("dS M Y,  h:ia ",$row["my_display_updated_at"]);
                          echo $updated_date;
                          }else{
                            echo "<span style='color:red'>null</span>";
                          }
                          
                          ?></td>

                          <td>
                              <b><?php echo "<a href='my_format_display_edit.php?id=$id'> Edit </a>"?></b>
                              
                              </td><td>

                              <b><a href="my_format_display_delete.php?id=<?php echo $id; ?>" onClick="return confirm('Are you sure you want to delete?');"> Delete </a></b>
                              
                          </td>
                      </tr>
                <?php
                    }?>
                </table>
                    
         </div>

         
</div>



<!--Model-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="width:100%!important;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ask me anything</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-5">

      <form action="" method="POST">
          <input type="text" name="name" class="form-control input_bar" placeholder="Display name">
          <input type="text" name="size" class="form-control input_bar" placeholder="Display size">         
          <input type="text" name="brand" class="form-control input_bar" placeholder="Display brand">    
          <input type="text" name="specification" class="form-control input_bar" placeholder="Display specification">
          <input type="text" name="broucher" class="form-control input_bar" placeholder="Display broucher">
          <input type="text" name="image" class="form-control input_bar" placeholder="Display Image">



          <!-- <input type="text" name="status" class="form-control input_bar" id="" placeholder="Display status"> -->

          <select class="form-control" name="status" id="">
                    <option value="">Choose</option>
                    <option value="active">Active</option>
                    <option value="Inctive">Inctive</option>
          </select>


          <button type="submit" class="mt-5 btn btn-success pl-5 pr-5"><i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp; save </button>
        </form>
      </div>
     </div>
  </div>
</div>








<?php
     include_once('../subview/footer.php');
?>
