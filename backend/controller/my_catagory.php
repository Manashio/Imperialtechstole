<?php
     $getRows = $db->getRows("SELECT * FROM my_catagory");
     foreach ($getRows as $row) {
          $my_id = $row['my_id'];
          $my_catagory_name = $row["my_catagory_name"];
          $my_pagename = $row["my_pagename"];
          $my_catagory_status = $row["my_catagory_status"];
          $my_catagory_created_at = $row["my_catagory_created_at"];
     ?>
     <ul class="list-group" style="display:none;">
                    <li class="list-group-item"><?php echo $my_id;?></li>
                    <li class="list-group-item"><?php echo  $my_catagory_name;?></li>
                    <li class="list-group-item"><?php echo  $my_pagename;?></li>
                    <li class="list-group-item"><?php echo $my_catagory_status ;?></li>
                    <li class="list-group-item"><?php echo $my_catagory_created_at;?></li>
     </ul>
     <?php
     }
     echo"<h3>my_catagory - Table  data</h3>";
     print_r($getRows);
?>
