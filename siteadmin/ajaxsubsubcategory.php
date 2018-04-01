<?php 
	include("../config/config.inc.php");
	include("includes/class.upload.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

 $subcategory = $_REQUEST['subcategory'];


?>
<label>Subsubcategory Name:</label>
<select name="subsubcategory" id="subsubcategory">
   <option value="">Select Subsubcategory</option>
<?php $sqlcat = "SELECT * FROM tbl_category where fld_parentid='$subcategory' and fld_status='Active' order by fld_name";
  $rsCat = $dbquery->query($sqlcat);
  while($rowCat = $rsCat->fetch_object())
  {
?>
<option value="<?php echo $rowCat->fld_id; ?>" ><?php echo $rowCat->fld_name; ?> </option>
<?php }?>
</select>