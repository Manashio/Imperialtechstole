<?php

include('../config/config.inc.php');

$companyid = $_REQUEST['companyid'];
$pageid = $_REQUEST['pageid'];
$status = $_REQUEST['status'];
$task = $_REQUEST['task'];
//$impcategoryid = implode(",",getAllCategoryIds($dbquery,$catid));

if($companyid > 0)
{
	if($task=="chk")
	{
		$sqlsts = "UPDATE tbl_ecomm set fld_status='$status' where fld_id='$companyid'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	elseif($task=="del")
	{
	
        
	
		
		$sqlDel = "DELETE FROM tbl_ecomm where fld_id='".$companyid."'";
		$rsDel = $dbquery->query($sqlDel) or die("Delete Error:" . $dbquery->error);

		$updts = 4;
	}
}
echo "<script>document.location.href='ecomm-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
exit;


?>