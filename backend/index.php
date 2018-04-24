<?php
     require_once('core/session.php');
     require_once('core/db_conn.php');
     include_once('controller/date_time.php');
     include_once('functions/function.inc.php');
     include_once('views/head.php');
     include_once('views/sidenav.php');

     include_once('controller/my_catagory.php');
     include_once('controller/my_subcatagory.php');
     include_once('controller/my_projector.php');
     include_once('controller/my_format_display.php');
     include_once('controller/my_videoconferencing.php');
     
     
     
?>
   

<div class="content">
     <div class="container">
          <div class="hero">
                  <span class="time">
                  <?php echo $index_date;?>
                      <div></div>
                      <em><i id="weather"> 00&deg;C</i></em>
                  </span>
                  <h1 class="text-center cards_p">Admin</h1>
                  
          </div>
          <?php
                // $result = $conn->query("show tables");
                // while ($row = $result->fetch(PDO::FETCH_NUM)) {
                //     foreach ($row as $key => $value) {
                //         echo $value;
                //     }
                // }
          ?>

          <div class="row mt-5 text-center">     
              <div class="col-md-4">
                   <a href="my_catagory/index.php">
                   <div class="page_card">
                        <big><i class="fas fa-list-ul"></i> </big>
                         <br><br> Catagory &dash; <big><?php echo $row_count_cata;?></big></div></a>  
              </div>

              <div class="col-md-4">
                    <a href="my_format_display/index.php">
                        <div class="page_card">
                            <big><i class="fas fa-tv"></i></big>
                             <br><br> Display &dash; <big><?php echo $row_count_dis;?></big>
                        </div>
                    </a> 
              </div>

               <div class="col-md-4">
                    <a href="my_projector/index.php">
                        <div class="page_card">
                            <big><i class="fas fa-video"></i></big>
                             <br><br> Projector &dash; <big><?php echo $row_count_proj;?></big></div></a> 
                </div>

              <div class="col-md-4">
                    <a href="my_subcatagory/index.php">
                        <div class="page_card">
                            <big><i class="fas fa-ellipsis-v"></i></big>
                             <br><br> Sub catagory &dash; <big><?php echo $row_count_scat;?></big></div></a> 
                </div>

               <div class="col-md-4">
                    <a href="my_videoconferencing/index.php">
                        <div class="page_card">
                            <big><i class="fas fa-video"></i></big>
                             <br><br>  Video conferencing &dash; <big><?php echo $row_count_video;?></big></div></a> 
                </div>

       </div>
</div>

<?php
     include_once('views/footer.php');
?>