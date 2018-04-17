<?php
require_once('core/db_conn.php');
     $getRows = $db->getRows("SELECT * FROM my_projector");
     echo"<h3>my_projector - Table  data</h3>";
     print_r($getRows);
?>