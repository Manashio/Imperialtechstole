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
		$sqlsts = "UPDATE tbl_faq set fld_status='$status' where fld_id='$catid'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	elseif($task=="del")
	{
				
		
		$sqlDel = "DELETE FROM tbl_faq where fld_id ='$catid'";
		$rsDel = $dbquery->query($sqlDel) or die("Delete Error:" . $dbquery->error);
		
		

		$updts = 4;
	}
}
 echo "<script>document.location.href='faq-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
exit;


?>