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
$main_id = $_REQUEST['catparentid'];
$categoryName = $dbquery->real_escape_string($_REQUEST['categoryName']);
 $showmegamenu = $_REQUEST['showmegamenu'];
if($_REQUEST['showmegamenu']==""){
$showmegamenu = 0;
}
 
 if($categoryName!="")
{
	if($catid > 0)
	{
		$whrid = " AND fld_id!='$catid'";
	}
	$sqlDup = "SELECT count(*) as cnt from tbl_category where fld_name='$categoryName' $whrid";
	$rsDup = $dbquery->query($sqlDup) or die("Duplicate Error:" . $dbquery->error);
	$rowDup = $rsDup->fetch_object();
	$numDup = $rowDup->cnt;
	if($numDup > 0)
	{
		$updts = 0;
		$messageText = "Sorry, Category already exists!";
	}
	else
	{
		if($catid > 0)
		{
			$sqlUpdate = "UPDATE tbl_category set fld_name='$categoryName', fld_parentid='$main_id' where fld_id='$catid'";
			$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
			$updts = 2;
		}
		else
		{
			$sqlInsert = "INSERT INTO tbl_category SET fld_name='$categoryName', fld_parentid='$main_id', fld_addedon='".date("d-m-Y")."', fld_status='Active'"; 
			
			$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
			$catid = $dbquery->insert_id;
			$updts = 1;
		}
		 
		if($updts > 0)
		{
			header("location:category-mgmt.php?pageid=".$pageid."&msgupd=".$updts."");
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
 	$parentid = $rowDisp->fld_parentid;
	$categoryName = $rowDisp->fld_name;
 }


$getcatstree = getPerentsCategory($dbquery,0);
$selectedPage = 2;
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
							<label>Select Category:</label>
							<select name="catparentid" style="width:150px;" <?php if($catparentid > 0){?>required <?php }?>>
							<option value="0">Main Category</option>
							<?php
							while($row = $getcatstree->fetch_assoc())
								{
									$categotyName = $row['fld_name'];
									$catid = $row['fld_id'];
									$parentid = $row['fld_parentid'];
									if($catid==$parentid)
									{
											$strcatsel = 'selected="selected"';
 									}
									echo '<option value="'.$catid.'" '.$strcatsel.'>'.$categotyName.'</option>' . '\n';

								}
								 
							?>
							</select>
						</li>
						 
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
