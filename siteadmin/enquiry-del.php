<?php

include('../config/config.inc.php');

$applied_id = $_REQUEST['applied_id'];
$pageid = $_REQUEST['pageid'];
$status = $_REQUEST['status'];
$task = $_REQUEST['task'];
$impcategoryid = implode(",",getAllCategoryIds($dbquery,$catid));

if($applied_id > 0)
{
	if($task=="chk")
	{
		$sqlsts = "UPDATE tbl_appliedfor set status='$status' where id='".$applied_id."'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	elseif($task=="del")
	{
				$originalimgpath = "../images/originalimg/";
				
		
		$sqlDel = "DELETE FROM tbl_appliedfor where id IN($applied_id)";
		$rsDel = $dbquery->query($sqlDel) or die("Delete Error:" . $dbquery->error);

		$updts = 4;
	}
}
echo "<script>document.location.href='enquiry.php?pageid=".$pageid."';</script>";
exit;


?>