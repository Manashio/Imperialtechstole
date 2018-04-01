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
		$sqlsts = "UPDATE tbl_selloffer set fld_status='$status' where fld_id='$productid'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	elseif($task=="del")
	{
		$imagepath = "../images/product/";
         $imagethumbpath = "../images/product/thumb/";		
		$sqlimage = "SELECT fld_image FROM tbl_selloffer where fld_id='$productid'";
				$rsimage = $dbquery->query($sqlimage) or die("Unlink Image Error:" . $dbquery->error);
				$numimage = $rsimage->num_rows;
				if($numimage > 0)
				{
					$rowimage = $rsimage->fetch_object();
					$galimage = $rowimage->fld_image;
					if($galimage!="")
					{
						unlink($imagepath . $galimage);
						unlink($imagethumbpath . $galimage);
 						
					}
				}
		$sqlDel = "DELETE FROM tbl_selloffer where fld_id='".$productid."'";
		$rsDel = $dbquery->query($sqlDel) or die("Delete Error:" . $dbquery->error);

		$updts = 4;
	}
}
echo "<script>document.location.href='selloffer-mgmt.php?companyid=".$companyid."&msgupd=".$updts."&pageid=".$pageid."';</script>";
exit;


?>