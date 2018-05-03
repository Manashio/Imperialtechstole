<?php
require_once('core/db_conn.php');
  $id = $_GET['id'];
  $db->updateData("DELETE FROM tbl_main WHERE id = ?", [$id]);
  header("location: index.php");