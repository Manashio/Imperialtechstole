<?php

include('../config/config.inc.php');

$catid = $_REQUEST['catid'];
$parentid = $_REQUEST['parentid'];
$pageid = $_REQUEST['pageid'];
$status = $_REQUEST['status'];
$featured = $_REQUEST['featured'];
$task = $_REQUEST['task'];
//$impcategoryid = implode(",",getAllCategoryIds($dbquery,$catid));

if($catid > 0)
{
	if($task=="chk")
	{
		$sqlsts = "UPDATE tbl_category set fld_status='$status' where fld_id='$catid'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	
	if($task=="set")
	{
		$sqlsts = "UPDATE tbl_category set fld_featured='$featured' where fld_id='$catid'";  
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	
	
	elseif($task=="del")
	{
		
		
		$sqlDel = "DELETE FROM tbl_category where  fld_id='$catid'";
		$rsDel = $dbquery->query($sqlDel) or die("Delete Error:" . $dbquery->error);

		$updts = 4;
	}
}
echo "<script>document.location.href='subcategory-mgmt.php?msgupd=".$updts."&parentid=".$parentid."&pageid=".$pageid."';</script>";
exit;


?>