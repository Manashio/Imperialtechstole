<?php 
	include("../config/config.inc.php");
	include("includes/class.upload.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

 $state = $_REQUEST['state'];


?>
<label>City:</label>
<select name="city" id="city" onchange="return districtlist();">
<option value="">Select City</option>
<?php $sqlcat = "SELECT * FROM tbl_city where fld_provinceid='$state' and fld_status='1' order by fld_city";
  $rsCat = $dbquery->query($sqlcat);
  while($rowCat = $rsCat->fetch_object())
  {
?>
<option value="<?php echo $rowCat->fld_id; ?>" ><?php echo $rowCat->fld_city; ?> </option>
<?php }?>
</select>