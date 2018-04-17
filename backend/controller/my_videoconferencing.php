<?php
require_once('core/db_conn.php');
     $getRows = $db->getRows("SELECT * FROM my_videoconferencing");
     echo"<h3>my_videoconferencing - Table  data</h3>";
     print_r($getRows);
?>