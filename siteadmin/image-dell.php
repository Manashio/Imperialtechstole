<?php

include('../config/config.inc.php');

$sldid = $_REQUEST['sldid'];
$pageid = $_REQUEST['pageid'];
$status = $_REQUEST['status'];
$task = $_REQUEST['task'];
$impcategoryid = implode(",",getAllCategoryIds($dbquery,$catid));

if($sldid > 0)
{
	if($task=="chk")
	{
		$sqlsts = "UPDATE tbl_slider set fld_status='$status' where fld_id='$sldid'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	elseif($task=="del")
	{
			$imagepath = "../images/slider/";
	             

				
				$sqlimage = "SELECT * FROM tbl_slider where fld_id='$sldid'";
				$rsimage = $dbquery->query($sqlimage) or die("Unlink Error:" . $dbquery->error);
				$numimage = $rsimage->num_rows;
				if($numimage > 0)
				{
					$rowimage = $rsimage->fetch_object();
					$image = $rowimage->fld_image;
					if($image!="")
					{
						
						unlink($imagepath . $image);
						
					}
				}
		
		
		$sqlDel = "DELETE FROM tbl_slider where fld_id IN($sldid)";
		$rsDel = $dbquery->query($sqlDel) or die("Delete Error:" . $dbquery->error);

		$updts = 4;
	}
}
echo "<script>document.location.href='slider-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
exit;


?>