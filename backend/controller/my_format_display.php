<?php
require_once('core/db_conn.php');
     $getRows = $db->getRows("SELECT * FROM my_format_display");
     echo"<h3>my_format_display - Table  data</h3>";
     print_r($getRows);
?>