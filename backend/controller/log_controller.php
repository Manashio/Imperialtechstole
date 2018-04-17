<?php
     require_once('core/db_conn.php');
     $getRows = $db->getRows("SELECT id,appKey,name,phone,posted FROM cmp_log ORDER BY id DESC");
     foreach ($getRows as $row) {
          $id = $row['id'];
          $appKey = $row['appKey'];
          $name = $row["name"];
          $phone = $row["phone"];
          $posted = $row["posted"];
          ?>
     <tr class="first">
          <td><?php echo $appKey ;?></td>
          <td><?php echo $name ;?></td>
          <td><?php echo $phone ;?></td>
          <td><?php echo $posted ;?></td>
          <td>
              <b><?php echo "<a href='getlog.php?id=$id'> View </a>"?></b>
              <span></span>
          </td>
      </tr>
      <?php
      }
?>