<?php 
	include("../config/config.inc.php");
	include("includes/class.upload.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$universityid = $_REQUEST['universityid'];
$pageid = $_REQUEST['pageid'];

$name			= $dbquery->real_escape_string($_REQUEST['name']);
$contactName	= $dbquery->real_escape_string($_REQUEST['contactName']);
$address		= $dbquery->real_escape_string($_REQUEST['address']);
$city			= $dbquery->real_escape_string($_REQUEST['city']);
$state			= $dbquery->real_escape_string($_REQUEST['state']);
$postalCode		= $dbquery->real_escape_string($_REQUEST['postalCode']);
$email			= $dbquery->real_escape_string($_REQUEST['email']);
$phone 			= $dbquery->real_escape_string($_REQUEST['phone']);
$mobile 		 = $dbquery->real_escape_string($_REQUEST['mobile']);
$aboutUniversity = $dbquery->real_escape_string($_REQUEST['aboutUniversity']);
$featured = $dbquery->real_escape_string($_REQUEST['featured']);
$getlogoName = $_POST['getLogoName'];

  $logopath = "../images/universitylogo/";
  $thumblogopath = "../images/universitylogo/thumblogopath";

 
  
 if($name!="")
{
	if($universityid > 0)
	{
		$whrid = " AND fld_id!='$universityid'";
	}
	$sqlDup = "SELECT count(*) as cnt from tbl_university where fld_name='$name' $whrid";
	$rsDup = $dbquery->query($sqlDup) or die("Duplicate Error:" . $dbquery->error);
	$rowDup = $rsDup->fetch_object();
	$numDup = $rowDup->cnt;
	if($numDup > 0)
	{
		$updts = 0;
		$messageText = "Sorry, University already exists!";
	}
	else
	{
		if($universityid > 0)
		{
			$sqlUpdate = "UPDATE tbl_university set  
			   fld_name		='$name',
			   fld_contactname	='$contactName',
			   fld_address		='$address',
			   fld_city			='$city', 
			   fld_state		='$state', 
			   fld_zipcode		='$postalCode', 
			   fld_email		='$email', 
			   fld_phone		='$phone', 
			   fld_mobile		='$mobile',  
 			   fld_featured		='$featured',  
			   fld_aboutuniv	='$aboutUniversity' 
			    where fld_id='$universityid'";
			$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
			$updts = 2;
		}
		else
		{
 
			    $sqlInsert = "INSERT INTO tbl_university SET
			   fld_name			='$name',
			   fld_contactname	='$contactName',
			   fld_address		='$address',
			   fld_city			='$city', 
			   fld_state		='$state', 
			   fld_zipcode		='$postalCode', 
			   fld_email		='$email', 
			   fld_phone		='$phone', 
			   fld_mobile		='$mobile',  
 			   fld_featured		='$featured',  
  			   fld_aboutuniv	='$aboutUniversity',  
			   fld_addedon		='".date("d-m-Y")."', 
 			   fld_status		='Active'"; 
			
			$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
			$universityid = $dbquery->insert_id;
			$updts = 1;
		}
		 
		 #University Logo Resize and upload
		 if($_FILES['universityLogo']['name']!='')
		 {	
 				$sqlimage = "SELECT fld_universitylogo FROM tbl_university where fld_id='$universityid'";
				$rsimage = $dbquery->query($sqlimage) or die("Unlink Error:" . $dbquery->error);
				$numimage = $rsimage->num_rows;
				if($numimage > 0)
				{
					$rowimage = $rsimage->fetch_object();
					$universityLogo = $rowimage->fld_universityLogo;
					if($universityLogo!="")
					{
						unlink($logopath . $universityLogo);
 						
					}
				}
				$handle = new Upload($_FILES['universityLogo']);
				$name = explode(".",$_FILES['universityLogo']['name']);
				$filename2Save = $name[0]."IMG" . date('YHis') . rand(1,1000);
				if ($handle->uploaded)
				{	
 					##thumbPath
					$handle->image_resize            = true;
	
					$size = getUpImageSize($_FILES['universityLogo']);
 				 
					$old_x = $size['x']; // Width
					$old_y = $size['y']; // Height
					
					if($old_x > IMG_UNILOGO_WIDTH_SIZE && $old_y > IMG_UNILOGO_HEIGHT_SIZE)
					{
						//$handle->image_ratio_y           = false;
						$handle->image_x                 = IMG_UNILOGO_WIDTH_SIZE;
 						$handle->image_y                 = IMG_UNILOGO_HEIGHT_SIZE;
					}
					
 					
					$handle->image_ratio_no_zoom_in 	 = true;
					$handle->file_new_name_body = $filename2Save;
 					$handle->Process($thumblogopath);
					if ($handle->processed)
					{
						$file = $handle->file_dst_name; 
						
					}
			
			}
				move_uploaded_file( $_FILES['universityLogo']['tmp_name'] ,$logopath.$filename2Save.'.'.$name[1]);
				
				
				if($file)
				{
					$fileName = $file;
					  $sql = "update tbl_university set fld_universitylogo='$fileName' where fld_id='$universityid'"; 
					$result = $dbquery->query($sql) or die('Image Error: ' . $dbquery->error);	
					
					 
					 
				}
			
		}
		
		 
		 
		if($updts > 0)
		{
			
				echo "<script>document.location.href='university-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
				exit;


 
		}
	}
}



##Show Detail
$sqlDisp = " SELECT * FROM tbl_university WHERE fld_id='$universityid'";
$rsDisp = $dbquery->query($sqlDisp) or die("Display Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp = $rsDisp->fetch_object();
	$universityid = $rowDisp->fld_id;
  }


//$getcatstree = getPerentsUniversity($dbquery,0);
$selectedPage = 2;
$ceditor = 1;
?>





<?php include('common/admheader.php'); ?>



	<section class="middlepart">
		<div class="leftsection"><div class="left-panel"></div></div>
		<div class="right-panel">
			<aside class="rightsection iframe dboard">
				<h2><?php if($universityid=="") { echo "Add"; } else { echo "Edit"; } ?> University <?php if($messageText!="") { ?><div class="errormsg"><?php echo $messageText; ?></div><?php } ?></h2>
				<div class="divider"></div>
				<div class="form">
				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
				<input type="hidden" name="universityid" value="<?php echo $universityid; ?>" />
				<input type="hidden" name="pageid" value="<?php echo $pageid; ?>" />
					<ul>
						 
						<li>
							<label>Name:</label>
							<input type="text" name="name" id="name" value="<?php echo $rowDisp->fld_name;?>" size="60" placeholder="university name" required />
						</li>
						 <li>
							<label>Contact Name:</label>
							<input type="text" name="contactName" id="contactName" value="<?php echo $rowDisp->fld_name;?>" size="60" placeholder="contact name"  />
						</li>

						<li>
							<label>Address:</label>
							<input type="text" name="address" id="address" value="<?php echo $rowDisp->fld_address;?>" placeholder="university address" size="60"  />
						</li>
						<li>
							<label>City:</label>
							<input type="text" name="city" id="city" value="<?php echo $rowDisp->fld_city;?>" placeholder="city" size="60" required />
						</li>
						<li>
							<label>State:</label>
							<input type="text" name="state" id="state" value="<?php echo $rowDisp->fld_state;?>" placeholder="state" size="60" required />
						</li>
						<li>
							<label>Postal Code:</label>
							<input type="text" name="postalCode" id="postalCode" value="<?php echo $rowDisp->fld_zipcode;?>" placeholder="postal code" size="60"  />
						</li>
						<li>
							<label>Email:</label>
							<input type="email" name="email" id="email" value="<?php echo $rowDisp->fld_email;?>" placeholder="email address" size="60" required  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
						</li>
						<li>
							<label>Phone:</label>
							<input type="text" name="phone" id="phone" value="<?php echo $rowDisp->fld_phone;?>" placeholder="phone number" size="60"   />
						</li>
						<li>
							<label>Mobile:</label>
							<input type="text" name="mobile" id="mobile" value="<?php echo $rowDisp->fld_mobile;?>" placeholder="mobile number" size="60"  />
						</li>
						
					<li>
							<label>University Logo:</label>
							<div style="width:50%; margin:0 auto;">
							<?php
 							
							if($rowDisp->fld_universitylogo!='')
							{
							?>
							<img src="<?php echo "../".UNIVERST_LOGOPATH.$rowDisp->fld_universitylogo;?>" />
							<?php
							}
							?>
							<input type="file" name="universityLogo" id="universityLogo" value="<?php echo $rowDisp->fld_universitylogo;?>" placeholder="University Logo" size="60"  />						Size(130 X 50) Pixels
							</div>
							<input type="hidden" name="getLogoName" value="<?php echo $rowDisp->fld_universitylogo;?>" />
						</li>
						
							<li>
							<label>Featured:</label>
							<input type="checkbox" name="featured" id="featured" <?php echo ($rowDisp->fld_featured==1 ? 'checked' : '');?> value="1" size="60"  />
						</li>			    



						<li>
							<label>About University:</label>
								<br />
								<br />
								<textarea type="text" name="aboutUniversity" id="aboutUniversity" rows="3" cols="50" ><?php echo $rowDisp->fld_aboutuniv;?></textarea>
<script>
		CKEDITOR.replace( 'aboutUniversity', {
			height: 260
		} );
	</script>
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
