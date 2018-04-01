<?php

include('../config/config.inc.php');

$articlesid = $_REQUEST['articlesid'];
$pageid = $_REQUEST['pageid'];
$status = $_REQUEST['status'];
$task = $_REQUEST['task'];
$impcategoryid = implode(",",getAllCategoryIds($dbquery,$catid));

if($articlesid > 0)
{
	if($task=="chk")
	{
		$sqlsts = "UPDATE tbl_membership set fld_status='$status' where fld_id='$articlesid'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	elseif($task=="del")
	{
				$originalimgpath = "../images/originalimg/";
				$thumbimgpath = "../images/thumbimg/";
				$sqlimage = "SELECT * FROM tbl_membership where fld_id='$catid'";
				$rsimage = $dbquery->query($sqlimage) or die("Unlink Error:" . $dbquery->error);
				$numimage = $rsimage->num_rows;
				if($numimage > 0)
				{
					$rowimage = $rsimage->fetch_object();
					$image = $rowimage->fld_catimage;
					if($image!="")
					{
						unlink($originalimgpath . $image);
						unlink($thumbimgpath . $image);		
					}
				}
		
		$sqlDel = "DELETE FROM tbl_membership where fld_id IN($articlesid)";
		$rsDel = $dbquery->query($sqlDel) or die("Delete Error:" . $dbquery->error);

		$updts = 4;
	}
}
echo "<script>document.location.href='membership-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
exit;


?>