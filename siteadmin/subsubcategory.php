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
$parentid = $_REQUEST['parentid'];

$categoryName = $dbquery->real_escape_string($_REQUEST['categoryName']);
 $fld_image = $_FILES['fld_image']['name'];  
     $fileTmp = $_FILES['fld_image']['tmp_name'];
	 
	 
	 	if($_FILES['fld_image']['name']!='')
		{	
			$uplodFileName = $_FILES['fld_image']['name'];
			
			$ext = pathinfo($uplodFileName, PATHINFO_EXTENSION);
		
			$namefile = "AERO".rand(1,9999).time().".".$ext;
		} else {
			$namefile = $_POST['fld_image1'];
		 }
       move_uploaded_file($fileTmp,"../images/category/".$namefile);

  
 if($categoryName!="")
{
	
	 $sqlDup = "SELECT count(*) as cnt from tbl_category where fld_name='$categoryName' and fld_parentid='$parentid'";  
	$rsDup = $dbquery->query($sqlDup) or die("Duplicate Error:" . $dbquery->error);
	$rowDup = $rsDup->fetch_object();
	$numDup = $rowDup->cnt;
	
	 $sqlurl = "SELECT count(*) as cnt from tbl_category where fld_name='$categoryName'";  
	$rsUrl = $dbquery->query($sqlurl) or die("Duplicate Error:" . $dbquery->error);
	$rowUrl = $rsUrl->fetch_object();
	$numUrl = $rowUrl->cnt;

	if($numUrl > 0)
	{
	
	$url = MakeSeoUrl($categoryName)."_".$numUrl;
	
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
			$sqlUpdate = "UPDATE tbl_category set fld_name='$categoryName', fld_parentid='$parentid',fld_image = '$namefile',fld_layer=3 where fld_id='$catid'";
			$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
			$updts = 2;
		}
		else
		{
		 	$sqlInsert = "INSERT INTO tbl_category SET fld_name='$categoryName',fld_seo_url='$url', fld_image  = '$namefile' ,fld_parentid='$parentid',fld_layer=3"; 
			$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
			$catid = $dbquery->insert_id;
			$updts = 1;
			
		
		}
		
 

		if($updts > 0)
		{
		
		echo "<script>document.location.href='subsubcategory-mgmt.php?msgupd=".$updts."&pageid=".$pageid."&parentid=".$parentid."';</script>";
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
				<h2><?php if($catid=="") { echo "Add"; } else { echo "Edit"; } ?> Subcategory <?php if($messageText!="") { ?><div class="errormsg"><?php echo $messageText; ?></div><?php } ?></h2>
				<div class="divider"></div>
				<div class="form">
				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
				<input type="hidden" name="catid" value="<?php echo $catid; ?>" />
				<input type="hidden" name="pageid" value="<?php echo $pageid; ?>" />
                <input type="hidden" name="parentid" value="<?php echo $parentid;?>"  />
				<ul>
						
						 
						<li>
							<label>Subcategory Name:</label>
							<input type="text" name="categoryName" id="categoryName" value="<?php echo $categoryName;?>" size="60" required />
						</li>
						<li>
							<label>Image:</label>
							
							<input type="file" name="fld_image" id="fld_image" value="<?php echo $rowDisp->fld_image;?>"   /> 
                           
                            <span style="width:50%; margin:2px 0px 0px 7px;; color:#f00; float:left;">Recomended image dimension 575X445</span> 
                            
                            <?php if($catid!="") {  ?>
                         
							<img height="100" width="100" src="../images/category/<?php echo $rowDisp->fld_image;?>" />
								
								<?php }?>
								<input type="hidden" name="fld_image1" id="fld_image1" value="<?php echo $rowDisp->fld_image;?>"  />
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
