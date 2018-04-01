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
$parentcatid = $_REQUEST['parentcatid'];
$main_id = $_REQUEST['catparentid'];
$categoryName = $dbquery->real_escape_string($_REQUEST['categoryName']);
 $showmegamenu = $_REQUEST['showmegamenu'];
if($_REQUEST['showmegamenu']==""){
$showmegamenu = 0;
}

  $catimgpath = "../images/catimg/";
  $thumbcatpath = "../images/catimg/thumbcatimg/";

  
 if($categoryName!="")
{
	if($parentcatid > 0)
	{
		$whrid = " AND fld_parentid='$parentcatid'";
	}
	 $sqlDup = "SELECT count(*) as cnt from tbl_category where fld_name='$categoryName' $whrid";  
	$rsDup = $dbquery->query($sqlDup) or die("Duplicate Error:" . $dbquery->error);
	$rowDup = $rsDup->fetch_object();
	$numDup = $rowDup->cnt;
	if($numDup > 0 && $catid=='')
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
		
 

		 #University Logo Resize and upload
		 if($_FILES['catimage']['name']!='')
		 {	
 				$sqlimage = "SELECT fld_catimage FROM tbl_category where fld_id='$catid'";
				$rsimage = $dbquery->query($sqlimage) or die("Unlink Image Error:" . $dbquery->error);
				$numimage = $rsimage->num_rows;
				if($numimage > 0)
				{
					$rowimage = $rsimage->fetch_object();
					$catimage = $rowimage->fld_catimage;
					if($catimage!="")
					{
						unlink($thumbcatpath . $catimage);
 						
					}
				}
				$handle = new Upload($_FILES['catimage']);
				$name = explode(".",$_FILES['catimage']['name']);
				$filename2Save = $name[0]."IMG" . date('YHis') . rand(1,1000);
				if ($handle->uploaded)
				{	
 					##thumbPath
					$handle->image_resize            = true;
	
					$size = getUpImageSize($_FILES['catimage']);
 				 
					$old_x = $size['x']; // Width
					$old_y = $size['y']; // Height
					
					if($old_x > CATIMG_WIDTH_SIZE && $old_y > CATIMG_HEIGHT_SIZE)
					{
						//$handle->image_ratio_y           = false;
						$handle->image_x                 = CATIMG_WIDTH_SIZE;
 						$handle->image_y                 = CATIMG_HEIGHT_SIZE;
					}
					
 					
					$handle->image_ratio_no_zoom_in 	 = true;
					$handle->file_new_name_body = $filename2Save;
 					$handle->Process($thumbcatpath);
					if ($handle->processed)
					{
						$file = $handle->file_dst_name; 
						
					}
			
			}
				move_uploaded_file( $_FILES['catimage']['tmp_name'] ,$catimgpath.$filename2Save.'.'.$name[1]);
				
				
				if($file)
				{
					$fileName = $file;
					  $sql = "update tbl_category set fld_catimage='$fileName' where fld_id='$catid'"; 
					$result = $dbquery->query($sql) or die('Image Error: ' . $dbquery->error);	
					
					 
					 
				}
				
		}
				
		
		if($updts > 0 && $parentcatid!='')
		{
		
		echo "<script>document.location.href='subcategory-mgmt.php?msgupd=".$updts."&pageid=".$pageid."&catid=".$parentcatid."&parentcatid=".$parentcatid."';</script>";
		exit;

			 
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
 	$parentid = $rowDisp->fld_parentid;
	$categoryName = $rowDisp->fld_name;
	$parentcatid = $parentid;
	
	$catimage = $rowDisp->fld_catimage;

 }
 


$getcatstree = getPerentsCategory($dbquery,0);
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
				<input type="hidden" name="parentcatid" value="<?php echo $parentcatid; ?>" />
				
					<ul>
						
						 
						<li>
							<label>Category Name:</label>
							<input type="text" name="categoryName" id="categoryName" value="<?php echo $categoryName;?>" size="60" required />
						</li>
						 <?php
						 if($parentcatid > 0)
						 {
						 ?>
						<li>
							<label>Thumb image:</label>
							<input type="file" name="catimage" id="catimage" value="<?php echo $catimage;?>" size="60" />
							<?php
							if($catimage!='')
							{
							?>
							<img src="<?php echo $thumbcatpath.$catimage;?>" />
							<?php
							}
							?>
						</li>
						 <?php
						 }
						 ?>
						 	 
						 
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
