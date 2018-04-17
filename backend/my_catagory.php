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
          <div class="hero">
                  <span class="time">
                  <?php echo $index_date;?>
                      <div></div>
                      <em>Ghy <i id="weather"> 00&deg;C</i></em>
                  </span>
                  <h1 class="text-center cards_p">Admin</h1>
                  
          </div>

            <a href="" class="btn btn-info"  data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Add new</a>

          <div class="mt-5">
            
                <table class="main" >
                    <tr>
                        <th>App Key</th>
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>Posted At</th>
                        <th>Link</th>
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
               <button type="submit" class="btn mt-3 btn-danger">Save</button>
        </form>


      </div>
     </div>
  </div>
</div>








<?php
     include_once('views/footer.php');
?>
