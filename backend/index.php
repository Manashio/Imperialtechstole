<?php
     require_once('core/session.php');
     require_once('core/db_conn.php');
     include_once('controller/date_time.php');
     include_once('functions/function.inc.php');
     include_once('views/head.php');
     include_once('views/sidenav.php');
     include_once('controller/add_controller.php');

    //  include_once('controller/my_catagory.php');
    //  include_once('controller/my_subcatagory.php');
    //  include_once('controller/my_projector.php');
    //  include_once('controller/my_format_display.php');
    //  include_once('controller/my_videoconferencing.php');


     
     
     
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

          <br><br><br>    
          <a href="add.php" class="btn btn-primary"> Add data in main table</a>

          <table class="main" >
                    <tr>
                        <th><i class="fas fa-key fa-lg"></i></th>
                        <th>Page name</th>
                        <th>Name</th>
                        <th>Brand</th>
                        <th>Status</th>
                        <th>Updated at</th>
                        <th><i class="fas fa-pencil-alt fa-lg"></i></th>
                        <th><i class="far fa-trash-alt fa-lg"></i></th>
                    </tr>
                    <script>let x = 1; </script>
                    <?php   
                    foreach ($getRows as $row) {
                      $id = $row['id'];
                    ?>
                    <tr class="first">
                        <td><script>document.write(x++);</script></td>
                          <td><?php echo $row["page_name"];?></td>
                          <td><?php echo $row["name"];?></td>
                          <td><?php echo $row["brand"];?></td>
                          <td><?php echo $row["status"];?></td>
                          <td><?php echo $row["updated_at"];?></td>
                          <td>
                              <b><?php echo "<a href='edit.php?id=$id'> Edit </a>"?></b>
                              </td><td>
                              <b><a href="delete.php?id=<?php echo $id; ?>" onClick="return confirm('Are you sure you want to delete?');"> Delete </a></b>
                          </td>
                      </tr>
                <?php
                    }?>
                </table>

       
       </div>
</div>

<?php
     include_once('views/footer.php');
?>