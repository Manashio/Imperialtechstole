<?php

include('../config/config.inc.php');

$courseid = $_REQUEST['courseid'];
$pageid = $_REQUEST['pageid'];
$status = $_REQUEST['status'];
$task = $_REQUEST['task'];
 
 if($courseid > 0)
{
	if($task=="chk")
	{
		$sqlsts = "UPDATE tbl_courses set fld_status='$status' where fld_id='$courseid'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	elseif($task=="del")
	{
			
		$sqlDel = "DELETE FROM tbl_courses where fld_id IN($courseid)";
		$rsDel = $dbquery->query($sqlDel) or die("Delete Error:" . $dbquery->error);

		$updts = 4;
	}
}
echo "<script>document.location.href='course-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
exit;


?>