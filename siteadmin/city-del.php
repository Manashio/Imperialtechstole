<?php

include('../config/config.inc.php');

$id = $_REQUEST['id'];
 $provinceid = $_REQUEST['provinceid'];
$pageid = $_REQUEST['pageid'];
$status = $_REQUEST['status'];
$task = $_REQUEST['task'];
 
if($id > 0)
{
	if($task=="chk")
	{
		$sqlsts = "UPDATE tbl_city set fld_status='$status' where fld_id='$id'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	elseif($task=="del")
	{
				
		
			$sqlDel1 = "DELETE FROM tbl_city where fld_id='$id'";
		$rsDel1 = $dbquery->query($sqlDel1) or die("Delete Error:" . $dbquery->error);

		$updts = 4;
	}
}
 echo "<script>document.location.href='city-mgmt.php?provinceid=".$provinceid."&msgupd=".$updts."&pageid=".$pageid."';</script>";
exit;


?>