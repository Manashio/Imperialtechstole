<?php 
	include("../config/config.inc.php");
	include("includes/class.upload.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

 $testimonialid = $_REQUEST['testimonialid'];
$pageid = $_REQUEST['pageid'];

$fld_name	= $dbquery->real_escape_string($_REQUEST['fld_name']);
$fld_description = $dbquery->real_escape_string($_REQUEST['fld_description']);
$fld_course = $dbquery->real_escape_string($_REQUEST['fld_course']);
$fld_profession = $dbquery->real_escape_string($_REQUEST['fld_profession']);
 $fld_image = $_FILES['fld_image']['name'];  
$fileTmp = $_FILES['fld_image']['tmp_name'];

if($_FILES['fld_image']['name']!='')
{	
	$uplodFileName = $_FILES['fld_image']['name'];
} else {
	$uplodFileName = $_POST['fld_image1'];
 }
 move_uploaded_file($fileTmp,"../images/testimonials/".$uplodFileName);
 if($fld_name!="")
{
	
	
		if($testimonialid > 0)
		{
			$sqlUpdate = "UPDATE tbl_testimonial set  
			   fld_name		='$fld_name',			     
			   fld_description	='$fld_description',
			   fld_course = '$fld_course',
			   fld_profession ='$fld_profession',
			   fld_image      = '$uplodFileName'
			    where fld_id='$testimonialid'";
			$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
			$updts = 2;
		}
		else
		{
 
			    $sqlInsert = "INSERT INTO tbl_testimonial SET
			   fld_name			='$fld_name',
			   fld_description	='$fld_description',
			      fld_profession ='$fld_profession',
				  fld_image      = '$uplodFileName',
			    fld_course = '$fld_course'";
			   
			
			$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
			$articlesid = $dbquery->insert_id;
			$updts = 1;
		}
		 
		 
		
		 
		 
		if($updts > 0)
		{
			
				echo "<script>document.location.href='testimonial-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
				exit;


 
		}
	
}



##Show Detail
$sqlDisp = " SELECT * FROM tbl_testimonial WHERE fld_id='$testimonialid'";
$rsDisp = $dbquery->query($sqlDisp) or die("Display Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp = $rsDisp->fetch_object();
	$newsletterid = $rowDisp->fld_id;
  }


//$getcatstree = getPerentsUniversity($dbquery,0);
$selectedPage = 5;
$ceditor = 1;
?>





<?php include('common/admheader.php'); ?>



	<section class="middlepart">
		<div class="leftsection"><div class="left-panel"></div></div>
		<div class="right-panel">
			<aside class="rightsection iframe dboard">
				<h2><?php if($testimonialid=="") { echo "Add"; } else { echo "Edit"; } ?> Testimonial <?php if($messageText!="") { ?><div class="errormsg"><?php echo $messageText; ?></div><?php } ?></h2>
				<div class="divider"></div>
				<div class="form">
				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
				<input type="hidden" name="testimonialid" value="<?php echo $testimonialid; ?>" />
				<input type="hidden" name="pageid" value="<?php echo $pageid; ?>" />
					<ul>
						 
						<li>
							<label>Name:</label>
							<input type="text" name="fld_name" id="fld_name" value="<?php echo $rowDisp->fld_name;?>" size="60" placeholder="Name" required />
						</li>
						<li>
							<label>Experience:</label>
							<input type="text" name="fld_course" id="fld_course" value="<?php echo $rowDisp->fld_course;?>" size="60" placeholder="experience" required /> 
						</li>
						<!--<li>
							<label>Course:</label>
							<input type="text" name="fld_course" id="fld_course" value="<?php echo $rowDisp->fld_course;?>" size="60" placeholder="eg. MCA-Roll no. 510811510" required /> 
						</li>
						<li>
							<label>Profession:</label>
							<input type="text" name="fld_profession" id="fld_profession" value="<?php echo $rowDisp->fld_profession;?>" size="60" placeholder="eg. IBM-Oracle Database Administrator, Noida" required /> 
						</li>
						<li>
							<label>Image:</label>
							<input type="file" name="fld_image" id="fld_image" value="<?php echo $rowDisp->fld_image;?>"  />
							<input type="hidden" name="fld_image1" id="fld_image1" value="<?php echo $rowDisp->fld_image;?>"  />
							<?php if($testimonialid > 0) {?>
							<img  src="../images/upload_leaf/<?php echo $rowDisp->fld_image;?>" />
							<?php }?>
						</li>-->	
						
						<li>
							<label>Content:</label>			
<textarea name="fld_description" id="fld_description" rows="5" cols="60" style="border:solid 1px #ccc;"><?php echo $rowDisp->fld_description;?></textarea>							
								
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
