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
            <div class="page_card">             
                <ul class="page_card_ul">
                    <li><a href="my_catagory/my_catagory.php">Catagory</a></li>
                    <li><a href="my_format_display/my_format_display.php">Display</a></li>
                    <li><a href="my_projector/my_projector.php">Projector</a></li>
                    <li><a href="my_subcatagory/my_subcatagory.php">Sub catagory</a></li>
                    <li><a href="my_videoconferencing/my_videoconferencing.php">Video conferencing</a></li>
                </ul>
            </div>
  
       </div>
</div>

<?php
     include_once('views/footer.php');
?>