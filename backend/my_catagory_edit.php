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
          
      
          <table class="main" >
                    <tr>
                        <th>App Key</th>
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>Posted At</th>
                        <th>Link</th>
                    </tr>
                    <?php 
                    $id = $_GET['id'];
                    while ($id == 1) {
                        
                        
                    }
                    require_once('controller/my_catagory.php'); 
                    
                    
                    
                    ?>
                </table>    

          
       </div>
</div>

<?php
     include_once('views/footer.php');
?>