<?php
     require_once('core/session.php');
     require_once('core/db_conn.php');
     include_once('controller/date_time.php');
     include_once('functions/function.inc.php');
     include_once('views/head.php');
     include_once('views/sidenav.php');
?>          

<div class="content">
     <div class="container">
          <div class="hero" style="height:100px;">
                  <span class="time">
                  <?php echo $index_date;?>
                      <div></div>
                      <em>Ghy <i id="weather"> 00&deg;C</i></em>
                  </span>
          </div>

          <div class="text-center pt-5">
          <a href="" class="btn btn-info"  data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fas fa-plus"></i> &nbsp;&nbsp;&nbsp; Add new</a>
          </div>


          <div class="mt-5">
            
                <table class="main" >
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>SEO Name</th>
                        <th>Page Name</th>                      
                        <th>Status</th>
                    </tr>
                    <?php require_once('controller/my_catagory.php'); ?>
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

      <form action="" method="post">
                <input type="text" name="name" id="" class="form-control input_bar" placeholder="Name">
                <input type="text" name="seo" id="" class="form-control input_bar" placeholder="Seo">
                <input type="text" name="pagename" class="form-control input_bar" id="" placeholder="Pagename">
                <!-- <input type="text" name="status" id="" placeholder="Active / Disable"> -->
               
               <button type="submit" class="mt-5 btn btn-success pl-5 pr-5"><i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp; save </button>
        </form>


      </div>
     </div>
  </div>
</div>








<?php
     include_once('views/footer.php');
?>
