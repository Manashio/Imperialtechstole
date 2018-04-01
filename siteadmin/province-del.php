<?php

include('../config/config.inc.php');

$id = $_REQUEST['id'];
$pageid = $_REQUEST['pageid'];
$status = $_REQUEST['status'];
$task = $_REQUEST['task'];
 
if($id > 0)
{
	if($task=="chk")
	{
		$sqlsts = "UPDATE tbl_province set fld_status='$status' where fld_id='$id'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	elseif($task=="del")
	{
				
		
			$sqlDel1 = "DELETE FROM tbl_province where fld_id='$id'";
		$rsDel1 = $dbquery->query($sqlDel1) or die("Delete Error:" . $dbquery->error);

		$updts = 4;
	}
}
 echo "<script>document.location.href='province-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
exit;


?>