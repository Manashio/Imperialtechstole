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
          <div class="mt-5">
            <div class="jumbotron">
                <?php  require_once('controller/my_catagory.php');?>
            </div>

            <div class="jumbotron">
                <?php  require_once('controller/my_format_display.php');?>
            </div>

            <div class="jumbotron">
                <?php  require_once('controller/my_projector.php');?>
            </div>

            <div class="jumbotron">
                <?php  require_once('controller/my_subcatagory.php');?>
            </div>
            

            <div class="jumbotron">
                <?php  require_once('controller/my_videoconferencing.php');?>
            </div>
           

            <div class="jumbotron">
                <?php  require_once('controller/my_videowall.php');?>
            </div>

         <h1>Footer</h1>
      
          

          
       </div>
</div>

<?php
     include_once('views/footer.php');
?>