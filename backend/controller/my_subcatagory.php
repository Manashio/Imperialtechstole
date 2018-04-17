
<?php
require_once('core/db_conn.php');
     $getRows = $db->getRows("SELECT * FROM my_subcatagory");
     echo"<h3>my_subcatagory - Table  data</h3>";
     print_r($getRows);
?>