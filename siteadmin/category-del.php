<?php

include('../config/config.inc.php');

$catid = $_REQUEST['catid'];
$pageid = $_REQUEST['pageid'];
$status = $_REQUEST['status'];
$task = $_REQUEST['task'];
 
if($catid > 0)
{
	if($task=="chk")
	{
		$sqlsts = "UPDATE tbl_category set fld_status='$status' where fld_id='$catid'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	elseif($task=="del")
	{
				
		
		$sqlDel = "DELETE FROM tbl_category where fld_id ='$catid'";
		$rsDel = $dbquery->query($sqlDel) or die("Delete Error:" . $dbquery->error);
		
		$sqlDel1 = "DELETE FROM tbl_category where fld_parentid='$catid'";
		$rsDel1 = $dbquery->query($sqlDel1) or die("Delete Error:" . $dbquery->error);

		$updts = 4;
	}
}
 echo "<script>document.location.href='category-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
exit;


?>