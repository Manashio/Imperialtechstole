<?php

include('../config/config.inc.php');
$companyid = $_REQUEST['companyid'];
$productid = $_REQUEST['productid'];
$pageid = $_REQUEST['pageid'];
$status = $_REQUEST['status'];
$task = $_REQUEST['task'];


if($productid > 0)
{
	if($task=="chk")
	{
		$sqlsts = "UPDATE tbl_service set fld_status='$status' where fld_id='$productid'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	else if($task=="top")
	{
		$sqlsts = "UPDATE tbl_service set fld_top='$status' where fld_id='$productid'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 5;
	}
	elseif($task=="del")
	{
		$imagepath = "../images/packages/";
      	$sqlimage = "SELECT fld_image FROM tbl_service where fld_id='$productid'";
				$rsimage = $dbquery->query($sqlimage) or die("Unlink Image Error:" . $dbquery->error);
				$numimage = $rsimage->num_rows;
				if($numimage > 0)
				{
					$rowimage = $rsimage->fetch_object();
					$galimage = $rowimage->fld_image;
					$iconimage = $rowimage->fld_icon;
					if($galimage!="")
					{
						unlink($imagepath . $galimage);
					
					
 						
					}
					if($iconimage!="")
					{
						
						unlink($imagepath . $iconimage);
					
 						
					}
				}
		$sqlDel = "DELETE FROM tbl_service where fld_id='".$productid."'";
		$rsDel = $dbquery->query($sqlDel) or die("Delete Error:" . $dbquery->error);
		$updts = 4;
	}
}
echo "<script>document.location.href='service-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
exit;


?>