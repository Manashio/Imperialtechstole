<?php

include('../config/config.inc.php');

$eventid = $_REQUEST['eventid'];
$pageid = $_REQUEST['pageid'];
$status = $_REQUEST['status'];
$task = $_REQUEST['task'];
$impcategoryid = implode(",",getAllCategoryIds($dbquery,$catid));

if($eventid > 0)
{
	if($task=="chk")
	{
		$sqlsts = "UPDATE tbl_events set fld_status='$status' where fld_id='$eventid'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	elseif($task=="del")
	{
				$originalimgpath = "../images/events/";
				$galleryimgpath = "../images/events/gallery";
				
				$sqlimage = "SELECT * FROM tbl_events where fld_id='$eventid'";
				$rsimage = $dbquery->query($sqlimage) or die("Unlink Error:" . $dbquery->error);
				$numimage = $rsimage->num_rows;
				if($numimage > 0)
				{
					$rowimage = $rsimage->fetch_object();
					$image = $rowimage->fld_catimage;
					if($image!="")
					{
						unlink($originalimgpath . $image);
						unlink($galleryimgpath . $image);
						
					}
				}
		
		$sqlDel = "DELETE FROM tbl_events where fld_id IN($eventid)";
		$rsDel = $dbquery->query($sqlDel) or die("Delete Error:" . $dbquery->error);

		$updts = 4;
	}
}
echo "<script>document.location.href='events.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
exit;


?>