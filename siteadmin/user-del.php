<?php

include('../config/config.inc.php');

$universityid = $_REQUEST['universityid'];
$pageid = $_REQUEST['pageid'];
$status = $_REQUEST['status'];
$task = $_REQUEST['task'];
 
 if($universityid > 0)
{
	if($task=="chk")
	{
		$sqlsts = "UPDATE tbl_university set fld_status='$status' where fld_id='$universityid'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	elseif($task=="del")
	{
			
		$sqlDel = "DELETE FROM tbl_university where fld_id IN($universityid)";
		$rsDel = $dbquery->query($sqlDel) or die("Delete Error:" . $dbquery->error);

		$updts = 4;
	}
}
echo "<script>document.location.href='university-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
exit;


?>