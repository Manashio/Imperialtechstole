<?php 
	include("../config/config.inc.php");
	include("includes/class.upload.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$catid = $_REQUEST['catid'];
$pageid = $_REQUEST['pageid'];

$categoryName = $dbquery->real_escape_string($_REQUEST['categoryName']);

  
 if($categoryName!="")
{
	
	 $sqlDup = "SELECT count(*) as cnt from tbl_category where fld_name='$categoryName'";  
	$rsDup = $dbquery->query($sqlDup) or die("Duplicate Error:" . $dbquery->error);
	$rowDup = $rsDup->fetch_object();
	$numDup = $rowDup->cnt;
	if($numDup > 0)
	{
	
	$url = MakeSeoUrl($categoryName)."_".$numDup;
	
	}
	else
	{
	$url = MakeSeoUrl($categoryName);
	}
	if($numDup > 0 && $catid=='')
	{
		$updts = 0;
		$messageText = "Sorry, Category already exists!";
	}
	else
	{
		if($catid > 0)
		{
			$sqlUpdate = "UPDATE tbl_category set fld_name='$categoryName', fld_parentid='0',fld_layer=1 where fld_id='$catid'";
			$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
			$updts = 2;
		}
		else
		{
			$sqlInsert = "INSERT INTO tbl_category SET fld_name='$categoryName',fld_seo_url='$url', fld_parentid='0',fld_layer=1"; 
			$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
			$catid = $dbquery->insert_id;
			$updts = 1;
		}
		
 

		if($updts > 0)
		{
		
		echo "<script>document.location.href='category-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
		exit;

			 
		}
	}
}



##Show Detail
$sqlDisp = " SELECT * FROM tbl_category WHERE fld_id='$catid'";
$rsDisp = $dbquery->query($sqlDisp) or die("Display Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp = $rsDisp->fetch_object();
	$catid = $rowDisp->fld_id;
 	
	$categoryName = $rowDisp->fld_name;
	
 }

$selectedPage = 1;
$ceditor = 1;
?>





<?php include('common/admheader.php'); ?>



	<section class="middlepart">
		<div class="leftsection"><div class="left-panel"></div></div>
		<div class="right-panel">
			<aside class="rightsection iframe dboard">
				<h2><?php if($catid=="") { echo "Add"; } else { echo "Edit"; } ?> Category <?php if($messageText!="") { ?><div class="errormsg"><?php echo $messageText; ?></div><?php } ?></h2>
				<div class="divider"></div>
				<div class="form">
				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
				<input type="hidden" name="catid" value="<?php echo $catid; ?>" />
				<input type="hidden" name="pageid" value="<?php echo $pageid; ?>" />
				
				
					<ul>
						
						 
						<li>
							<label>Category Name:</label>
							<input type="text" name="categoryName" id="categoryName" value="<?php echo $categoryName;?>" size="60" required />
						</li>
						
						 	 
						 
						<li>
							<label></label>
							<input name="" type="submit" value="Save & Update">
						</li>
					</ul>
					</form>
				</div>
			</aside>
		</div>
	</section>


<?php include("common/admfooter.php"); ?>
