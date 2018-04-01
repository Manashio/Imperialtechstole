<?php

include('../config/config.inc.php');

$cust_id = $_REQUEST['cust_id'];
$pageid = $_REQUEST['pageid'];
$status = $_REQUEST['status'];
$task = $_REQUEST['task'];
$impcategoryid = implode(",",getAllCategoryIds($dbquery,$catid));

if($cust_id > 0)
{
	if($task=="chk")
	{
	 	$sqlsts = "UPDATE tbl_user set fld_status='$status' where fld_id='".$cust_id."'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	elseif($task=="del")
	{
				$originalimgpath = "../images/originalimg/";
				
		
		$sqlDel = "DELETE FROM tbl_user where fld_id IN($cust_id)";
		$rsDel = $dbquery->query($sqlDel) or die("Delete Error:" . $dbquery->error);

		$updts = 4;
	}
}
 echo "<script>document.location.href='customer.php?pageid=".$pageid."';</script>";
exit;


?>