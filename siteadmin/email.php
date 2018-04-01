<?php 
	include("../config/config.inc.php");
	include("includes/class.upload.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

 $email = $_REQUEST['email'];

$sql = "SELECT * FROM tbl_company where fld_email='".$email."'";
$query = $dbquery->query($sql);
echo $query->num_rows();
if($query->num_rows() > 0)
{
$data = "false";
echo  $data;
}
else
{
$data = "true";
echo  $data;
}
?>
