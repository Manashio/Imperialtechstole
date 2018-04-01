<?php 
	include("../config/config.inc.php");
	include("includes/class.upload.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

 $city = $_REQUEST['city'];


?>
<label>District:</label>
<select name="district" id="district" >
<option value="">Select District</option>
<?php $sqlcat = "SELECT * FROM tbl_district where fld_cityid='$city' and fld_status='1' order by fld_district";
  $rsCat = $dbquery->query($sqlcat);
  while($rowCat = $rsCat->fetch_object())
  {
?>
<option value="<?php echo $rowCat->fld_id; ?>" ><?php echo $rowCat->fld_district; ?> </option>
<?php }?>
</select>