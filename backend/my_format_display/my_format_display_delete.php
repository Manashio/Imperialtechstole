<?php
require_once('../core/db_conn.php');
  $id = $_GET['id'];
  $db->updateData("DELETE FROM my_format_display WHERE my_id = ?", [$id]);
  header("location: my_format_display.php");