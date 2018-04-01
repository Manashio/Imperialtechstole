<?php 
	include("../config/config.inc.php");
	include("includes/class.upload.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$sldid = $_REQUEST['sldid'];
$pageid = $_REQUEST['pageid'];
$imagepath = "../images/gallery/";
  $thumbimgpath = "../images/gallery/thumb/";

 if(isset($_REQUEST['submit']))
 {
     $sldid = $_REQUEST['sldid'];
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
       move_uploaded_file($fileTmp,"../images/gallery/".$namefile);
 
         if($_FILES['fld_image']['name']!='')
		 {	
 				$sqlimage = "SELECT fld_image FROM tbl_gallery where fld_id='$catid'";
				$rsimage = $dbquery->query($sqlimage) or die("Unlink Image Error:" . $dbquery->error);
				$numimage = $rsimage->num_rows;
				if($numimage > 0)
				{
					$rowimage = $rsimage->fetch_object();
					$galimage = $rowimage->fld_catimage;
					if($galimage!="")
					{
						unlink($thumbimgpath . $galimage);
 						
					}
				}
				$handle = new Upload($_FILES['fld_image']);
				$name = explode(".",$_FILES['fld_image']['name']);
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
 					$handle->Process($thumbimgpath);
					if ($handle->processed)
					{
						$file = $handle->file_dst_name; 
						
					}
			
			}
				move_uploaded_file( $_FILES['fld_image']['tmp_name'] ,$imagepath.$filename2Save.'.'.$name[1]);
				
				
				if($file)
				{
					$fileName = $file;
					  $sql = "update tbl_category set fld_catimage='$fileName' where fld_id='$catid'"; 
					$result = $dbquery->query($sql) or die('Image Error: ' . $dbquery->error);	
					
					 
					 
				}
				
		}
				
		if($sldid > 0)
		{
			$sqlUpdate = "UPDATE  tbl_gallery set fld_image = '$namefile' where fld_id='$sldid'";
			$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
			$updts = 2;
		}
		else
		{
 
			    $sqlInsert = "INSERT INTO tbl_gallery SET fld_image  = '$namefile'";
		  	$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
			$articlesid = $dbquery->insert_id;
			$updts = 1;
		}
		 
		 
		
		 
		 
		if($updts > 0)
		{
			
				echo "<script>document.location.href='gallery-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
				exit;


 
		}
	
}
##Show Detail
$sqlDisp = " SELECT * FROM tbl_gallery WHERE fld_id='$sldid'";
$rsDisp = $dbquery->query($sqlDisp) or die("Display Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp = $rsDisp->fetch_object();
	$sliderid = $rowDisp->fld_id;
  }


//$getcatstree = getPerentsUniversity($dbquery,0);
$selectedPage = 1;
$ceditor = 1;
?>





<?php include('common/admheader.php'); ?>


<script>

function validate1() {
	$("#file_error").html("");
	$("fld_image").css("border-color","#F0F0F0");
	var file_size = $('#fld_image')[0].files[0].size;
	if(file_size>2097152) {
		$("#file_error").html("File size is greater than 2MB");
		$(".demoInputBox").css("border-color","#FF0000");
		return false;
	} 
	return true;
}
</script>
	<section class="middlepart">
		<div class="leftsection"><div class="left-panel"></div></div>
		<div class="right-panel">
			<aside class="rightsection iframe dboard">
				<h2><?php if($sldid=="") { echo "Add"; } else { echo "Edit"; } ?> Gallery <?php if($messageText!="") { ?><div class="errormsg"><?php echo $messageText; ?></div><?php } ?></h2>
				<div class="divider"></div>
				<div class="form">
				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" onSubmit="return validate();">
				<input type="hidden" name="sldid" value="<?php echo $sldid; ?>" />
				<input type="hidden" name="pageid" value="<?php echo $pageid; ?>" />
					<ul>
						 
						
							<li>
							<label>Image:</label>
							<?php if($sldid!="") {  ?>
							<img height="100" width="100" src="../images/gallery/<?php echo $rowDisp->fld_image;?>" />
								<br />
								<br />
								<?php }?>
								<input type="hidden" name="fld_image1" id="fld_image1" value="<?php echo $rowDisp->fld_image;?>"  />
							<input type="file" name="fld_image" id="fld_image" value="<?php echo $rowDisp->fld_image;?>"  required /> <span id="file_error"></span>
						</li>	
						
						
						
						 
						<li>
							<label></label>
							<input name="submit" type="submit" value="Save & Update">
						</li>
					</ul>
					</form>
				</div>
			</aside>
		</div>
	</section>


<?php include("common/admfooter.php"); ?>
