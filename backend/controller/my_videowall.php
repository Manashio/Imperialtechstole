

<?php
require_once('core/db_conn.php');
     $getRows = $db->getRows("SELECT * FROM my_videowall");
     echo"<h3>my_videowall - Table  data</h3>";
     print_r($getRows);
?>