<?php

include('../config/config.inc.php');

$testimonialid = $_REQUEST['testimonialid'];
$pageid = $_REQUEST['pageid'];
$status = $_REQUEST['status'];
$task = $_REQUEST['task'];
$impcategoryid = implode(",",getAllCategoryIds($dbquery,$catid));

if($testimonialid > 0)
{
	if($task=="chk")
	{
		$sqlsts = "UPDATE tbl_testimonial set fld_status='$status' where fld_id='$testimonialid'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	elseif($task=="del")
	{
		
		
		$sqlDel = "DELETE FROM tbl_testimonial where fld_id IN($testimonialid)";
		$rsDel = $dbquery->query($sqlDel) or die("Delete Error:" . $dbquery->error);

		$updts = 4;
	}
}
 echo "<script>document.location.href='testimonial-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
exit;


?>