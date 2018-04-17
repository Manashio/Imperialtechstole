<?php
     $id = $_GET['id'];
     require_once('core/db_conn.php');
     $getRow = $db->getRow("SELECT * FROM cmp_log WHERE id =? ", [$id]);


     if(empty($getRow)){
          header("Location: logbook.php");
        }else{
          $appKey = $getRow['appKey'];
          $name = $getRow['name'];
          $phone  = $getRow['phone'];
          $date_e  = $getRow['date_e'];
          $address  = $getRow['address'];
          $vehicle  = $getRow['vehicle'];
          $category  = $getRow['category'];
          $complain  = $getRow['complain'];
          $forward  = $getRow['forward'];
          $taken  = $getRow['taken'];
          $cmp_through  = $getRow['cmp_through'];
          $posted = $getRow['posted'];
        }
     ?>

