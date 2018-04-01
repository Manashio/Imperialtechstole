<?php 
	include("../config/config.inc.php");
	include("includes/class.upload.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$courseid = $_REQUEST['courseid'];
$pageid = $_REQUEST['pageid'];
$categoty			= implode(",",$_REQUEST['categoty']);
$university			= $dbquery->real_escape_string($_REQUEST['university']);
$name				= $dbquery->real_escape_string($_REQUEST['name']);
$fee				= $dbquery->real_escape_string($_REQUEST['fee']);
$duration			= $dbquery->real_escape_string($_REQUEST['duration']);
$modeOfDelhivery	= $dbquery->real_escape_string($_REQUEST['modeOfDelhivery']);
$courseHightlight	= $dbquery->real_escape_string($_REQUEST['courseHightlight']);
$benifits 			= $dbquery->real_escape_string($_REQUEST['benifits']);
$eligibility 		= $dbquery->real_escape_string($_REQUEST['eligibility']);
$curriculum 		= $dbquery->real_escape_string($_REQUEST['curriculum']);
$eligibilityCriteria = $dbquery->real_escape_string($_REQUEST['eligibilityCriteria']);
$featured 			= $dbquery->real_escape_string($_REQUEST['featured']);

$fileName = $_FILES['filename']['name'];  
$fileTmp = $_FILES['filename']['tmp_name'];

if($_FILES['filename']['name']!='')
{	
	$uplodFileName = $_FILES['filename']['name'];
} else {
	$uplodFileName = $_POST['getFileName'];
 }
 move_uploaded_file($fileTmp,"../images/upload_leaf/".$uplodFileName);
		
		
 
  $showmegamenu 	= $_REQUEST['showmegamenu'];
if($_REQUEST['showmegamenu']==""){
$showmegamenu = 0;
}
 
 if($name!="")
{
	if($courseid > 0)
	{
		$whrid = " AND fld_id!='$courseid'";
	}
	$sqlDup = "SELECT count(*) as cnt from tbl_courses where fld_name='$name' $whrid";
	$rsDup = $dbquery->query($sqlDup) or die("Duplicate Error:" . $dbquery->error);
	$rowDup = $rsDup->fetch_object();
	$numDup = $rowDup->cnt;
	if($numDup > 0 && $courseid=='')
	{
		$updts = 0;
		$messageText = "Sorry, Course already exists!";
	}
	else
	{
		if($courseid > 0)
		{
 			  $sqlUpdate = "UPDATE tbl_courses set  
				fld_catid			='$categoty',
				fld_universityid	='$university',
				fld_name			='$name', 
				fld_fee				='$fee', 
				fld_duration		='$duration', 
				fld_eligibility_criteria	='$eligibilityCriteria',
				fld_modeofdelhivery	='$modeOfDelhivery',
				fld_featured		='$featured',
				fld_coursehighlight	='$courseHightlight', 
				fld_benifits		='$benifits', 
				fld_eligibilityinfo	='$eligibility', 
				fld_curriculum		='$curriculum',  
				fld_uploadfile		='$uplodFileName'
			    where fld_id='$courseid'";   
			$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
			$updts = 2;
		}
		else
		{
 
			     $sqlInsert = "INSERT INTO tbl_courses SET
				fld_catid			='$categoty',
				fld_universityid	='$university',
				fld_name			='$name', 
				fld_fee				='$fee', 
				fld_duration		='$duration', 
				fld_eligibility_criteria	='$eligibilityCriteria',
				fld_modeofdelhivery	='$modeOfDelhivery',
				fld_featured		='$featured',
				fld_coursehighlight	='$courseHightlight', 
				fld_benifits		='$benifits', 
				fld_eligibilityinfo	='$eligibility', 
				fld_curriculum		='$curriculum',  
				fld_uploadfile		='$uplodFileName', 
				fld_addedon		='".date("d-m-Y")."', 
 			    fld_status		='Active'";   
			
			$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
			$universityid = $dbquery->insert_id;
			$updts = 1;
		}
		 
		if($updts > 0)
		{
		
			echo "<script>document.location.href='course-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>"; exit;
		}
	}
}



##Show Detail
$sqlDisp = " SELECT * FROM tbl_courses WHERE fld_id='$courseid'";
$rsDisp = $dbquery->query($sqlDisp) or die("Display Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp = $rsDisp->fetch_object();
	$courseid = $rowDisp->fld_id;
	$universityid = $rowDisp->fld_universityid;
	$getFileName = $rowDisp->fld_uploadfile;
  }


//$getcatstree = getPerentsCourse($dbquery,0);
$selectedPage = 3;
$ceditor = 1;
?>





<?php include('common/admheader.php'); ?>

<script type="text/javascript">
function testcheck()
{
    if (jQuery("#category").prop("checked"))
        alert("first button checked");
    else
        alert("none checked");
}
</script>

	<section class="middlepart">
		<div class="leftsection"><div class="left-panel"></div></div>
		<div class="right-panel">
			<aside class="rightsection iframe dboard">
				<h2><?php if($universityid=="") { echo "Add"; } else { echo "Edit"; } ?> Course <?php if($messageText!="") { ?><div class="errormsg"><?php echo $messageText; ?></div><?php } ?></h2>
				<div class="divider"></div>
				<div class="form">

				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" onsubmit="return CourseFrmValidate();">
				<input type="hidden" name="getFileName" value="<?php echo $getFileName; ?>" />

				<input type="hidden" name="courseid" value="<?php echo $courseid; ?>" />
				<input type="hidden" name="pageid" value="<?php echo $pageid; ?>" />
					<ul>
						<li>				
							<label>Category:</label>
							<div style="width:200px;height:150px; overflow:scroll; overflow-x:hidden;">
							
							<?php
					         $catids=explode(",",$rowDisp->fld_catid);
							$sqlct = "SELECT * FROM tbl_category WHERE fld_status='Active' and fld_parentid!=0 ORDER BY fld_name ASC";
								$rsct = $dbquery->query($sqlct) or die("function category error:" . $dbquery->error);
							?>
							
							 <?php
							 	while($rowct = $rsct->fetch_array())
								{ 
								 
									
							 ?> 
					 <input type="checkbox" name="categoty[]" id="categoty[]" <?php if(in_array($rowct['fld_id'],$catids)){ echo "checked";} ?> value="<?php echo $rowct['fld_id']?>"  />&nbsp;&nbsp;<?php echo $rowct['fld_name']?> <br />
							 
 							<?php 
						 
							}
							
							 ?>
  							</div>
                            
                          
						</li> 
						
						
							<li>
							<label>University:</label>
							<?php
							$sqlct = "SELECT * FROM tbl_university WHERE fld_status='Active'";
								$rsct = $dbquery->query($sqlct) or die("function category error:" . $dbquery->error);
							?>
							 <select name="university" id="university">
							 <?php
							 	while($rowct = $rsct->fetch_array())
								{ 
								 
									
							 ?> 
							 	<option value="<?php echo $rowct['fld_id']?>" <?php echo ($rowct['fld_id']==$universityid ? 'selected' : ''); ?>><?php echo $rowct['fld_name']?></option>
							 
 							<?php 
						 
							}
							 ?>
  							 </select>


						</li> 
						
						
						<li>
							<label>Title:</label>
							<input type="text" name="name" id="name" value="<?php echo $rowDisp->fld_name;?>" size="60" placeholder="course name" required />
						</li>
						 <li>
							<label>Fee:</label>
							<input type="number" name="fee" id="fee" value="<?php echo $rowDisp->fld_fee;?>" size="60" placeholder="Fee" required />
						</li>
						 <li>
							<label>Duration:</label>
							<input type="text" name="duration" id="duration" value="<?php echo $rowDisp->fld_duration;?>" size="60" placeholder="duration" required />
						</li>
						
						<li>
							<label>Eligibility Criteria:</label>
							<input type="text" name="eligibilityCriteria" id="eligibilityCriteria" value="<?php echo $rowDisp->fld_eligibility_criteria;?>" size="60" placeholder="Eligibility Criteria" required />
						</li>

						<li>
 							 
							<label>Mode Of Delhivery:</label>
							 <select name="modeOfDelhivery" id="modeOfDelhivery">
							 <option value="" >Please Select</option>
							 <?php
							 for($i=1; $i<count($arrModeOfDelhivery); $i++)
							 {
							 	if($rowDisp->fld_modeofdelhivery==$arrModeOfDelhivery[$i])
								{
									echo $selected = 'selected="selected"';
								}
							 	echo '<option value="'.$arrModeOfDelhivery[$i].'" '.$selected.'>'.$arrModeOfDelhivery[$i].'</option>';
							 }
							 ?>
							 </select>
						</li>
						<li>
							<label>Show in featured:</label>
							<input type="checkbox" name="featured" id="featured" <?php echo ($rowDisp->fld_featured==1 ? 'checked' : '');?> value="1" size="60" placeholder="Featured" />
						</li>	
						 
						<li>
							<label>Course Hightlight:</label>
								<br />
								<br />
								<textarea type="text" name="courseHightlight" id="courseHightlight" rows="3" cols="50" ><?php echo $rowDisp->fld_coursehighlight;?></textarea>
						</li>
						<li>
							<label>Benifits:</label>
								<br />
								<br />
								<textarea type="text" name="benifits" id="benifits" rows="3" cols="50" ><?php echo $rowDisp->fld_benifits;?></textarea>
						</li>
						<li>
							<label>Eligibility:</label>
								<br />
								<br />
								<textarea type="text" name="eligibility" id="eligibility" rows="3" cols="50" ><?php echo $rowDisp->fld_eligibilityinfo;?></textarea>
						</li>
								<label>Curriculum:</label>
								<br />
								<br />
								<textarea type="text" name="curriculum" id="curriculum" rows="3" cols="50" ><?php echo $rowDisp->fld_curriculum;?></textarea>
						</li>
					 </li>
					 			<br />
								<br />
								<label>Upload Brochures / Leaflet:</label>
								<div style="width:50%; margin:0 auto;">
								<?php  if($universityid!=""){?>
								
								<a target="_blank" href="../images/upload_leaf/<?php echo $rowDisp->fld_uploadfile; ?>">
							<?php $imgext =explode(".",$rowDisp->fld_uploadfile);  ?>
							<img height="80" width="80" src="../images/<?php if($imgext[1]=='pdf'){ echo "pdf-icon.png";}elseif($imgext[1]=='doc' || $imgext[1]=='docx' ){ echo "doc-icon.png";}else{ echo "image-icon.png";} ?>" /></a>
							
								
								<br />
								<br />
								<? }?>
								<input type="file" name="filename" id="filename" value="<?php echo $rowDisp->fld_address;?>" size="60" />
							</div>
							<br />
							<br />
 
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
	
	<script>
		CKEDITOR.replace( 'courseHightlight', {
			height: 260
		} );
		
		CKEDITOR.replace( 'eligibility', {
			height: 260
		} );
		
 		CKEDITOR.replace( 'curriculum', {
			height: 260
		} );
 
 		CKEDITOR.replace( 'benifits', {
			height: 260
		} );
 
		 
	</script>


<?php include("common/admfooter.php"); ?>
