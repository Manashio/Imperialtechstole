<?php

include('../config/config.inc.php');

$productid = $_REQUEST['productid'];
$id = $_REQUEST['id'];
$status = $_REQUEST['status'];
$task = $_REQUEST['task'];


if($id > 0)
{
	if($task=="chk")
	{
		$sqlsts = "UPDATE tbl_product_images set fld_status='$status' where fld_id='$productid'";
		$rssts = $dbquery->query($sqlsts) or die("Status Error:" . $dbquery->error);
		$updts = 3;
	}
	elseif($task=="del")
	{
			$imagepath = "../images/document/";
	             

				
				$sqlimage = "SELECT * FROM tbl_product_images where fld_id='$id'";
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
		
		
		$sqlDel = "DELETE FROM tbl_product_images where fld_id='$id'";
		$rsDel = $dbquery->query($sqlDel) or die("Delete Error:" . $dbquery->error);

		$updts = 4;
	}
}
echo "<script>document.location.href='product_addon_image_mngmt.php?msgupd=".$updts."&productid=".$productid."';</script>";
exit;


?>