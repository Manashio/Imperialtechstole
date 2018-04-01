<?php
include('../config/config.inc.php');
$bakid = $_REQUEST['bakid'];

$sqlDel = "select fld_backupname from tbl_backup where fld_id='$bakid'";
$runDel = $dbquery->query($sqlDel) or die('Error Backup file :'. $dbquery->error);
$resultDel = $runDel->fetch_object();
$bakfile = $resultDel->fld_backupname;
if($bakfile!="")
{		
	$delbackupfile = "db_backup/".$bakfile;
	unlink($delbackupfile);
}		
$sqlDel = "DELETE FROM tbl_backup where fld_id='$bakid'";
$rsDel = $dbquery->query($sqlDel) or die("Gallery Delete Error:" . $dbquery->error);
$updts=2;
echo "<script>document.location.href='db_backup.php?msgupd=2';</script>";
exit;
?>