<?php

include('../config/config.inc.php');

$newsletterid = $_REQUEST['newsletterid'];
$pageid = $_REQUEST['pageid'];
$status = $_REQUEST['status'];
$task = $_REQUEST['task'];
$impcategoryid = implode(",",getAllCategoryIds($dbquery,$catid));

if($newsletterid > 0)
{
	if($task=="chk")
	{
		$sqlsts = "UPDATE tbl_newsletter set fld_status='$status' where fld_id='$newsletterid'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	elseif($task=="del")
	{
		
		
		$sqlDel = "DELETE FROM tbl_newsletter where fld_id IN($newsletterid)";
		$rsDel = $dbquery->query($sqlDel) or die("Delete Error:" . $dbquery->error);

		$updts = 4;
	}
}
echo "<script>document.location.href='newsletter-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
exit;


?>