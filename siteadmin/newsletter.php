<?php 
	include("../config/config.inc.php");
	include("includes/class.upload.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$newsletterid = $_REQUEST['newsletterid'];
$pageid = $_REQUEST['pageid'];

$fld_subject	= $dbquery->real_escape_string($_REQUEST['fld_subject']);
$fld_description = $dbquery->real_escape_string($_REQUEST['fld_description']);
$fld_send = $dbquery->real_escape_string($_REQUEST['fld_send']);
 
 if($fld_subject!="")
{
	
	
		if($newsletterid > 0)
		{
			$sqlUpdate = "UPDATE tbl_newsletter set  
			   fld_subject		='$fld_subject',			     
			   fld_description	='$fld_description',
			   fld_send = '$fld_send'
			    where fld_id='$newsletterid'";
			$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
			$updts = 2;
		}
		else
		{
 
			    $sqlInsert = "INSERT INTO tbl_newsletter SET
			   fld_subject			='$fld_subject',
			   fld_description	='$fld_description',
			    fld_send = '$fld_send'";
			   
			
			$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
			$articlesid = $dbquery->insert_id;
			$updts = 1;
		}
		 
		 
		
		 
		 
		if($updts > 0)
		{
			
				echo "<script>document.location.href='newsletter-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
				exit;


 
		}
	
}



##Show Detail
$sqlDisp = " SELECT * FROM tbl_newsletter WHERE fld_id='$newsletterid'";
$rsDisp = $dbquery->query($sqlDisp) or die("Display Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp = $rsDisp->fetch_object();
	$newsletterid = $rowDisp->fld_id;
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
				<h2><?php if($newsletterid=="") { echo "Add"; } else { echo "Edit"; } ?> Marketing Automation <?php if($messageText!="") { ?><div class="errormsg"><?php echo $messageText; ?></div><?php } ?></h2>
				<div class="divider"></div>
				<div class="form">
				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
				<input type="hidden" name="newsletterid" value="<?php echo $newsletterid; ?>" />
				<input type="hidden" name="pageid" value="<?php echo $pageid; ?>" />
					<ul>
						 
						<li>
							<label>Subject:</label>
							<input type="text" name="fld_subject" id="fld_subject" value="<?php echo $rowDisp->fld_subject;?>" size="60" placeholder="Article Title" required />
						</li>
						<li>
							<label>Send After:</label>
							<?php if($newsletterid!=""){ echo $rowDisp->fld_send." days";  }else{?>
							<select name="fld_send" id="fld_send" style="width:100px;" >
							<?php $num=30;
							       $i=1;
							 while($i<=$num)
							 {
							?>
							<option value="<?php echo $i;?>" <?php if($rowDisp->fld_send==$i){ echo "selected";}?>>
							<?php echo $i;?>
							</option>
							 <?php $i++; }?>
							</select> &nbsp;&nbsp; Days
							<?php }?>
							
						</li>
						
							
						
						
						<li>
							<label>Description:</label>
								<br />
								<br />
								<textarea type="text" name="fld_description" id="fld_descriptoin" rows="3" cols="50" ><?php echo $rowDisp->fld_description;?></textarea>
<script>
		
		CKEDITOR.replace( 'fld_description',
{
width: '800px',
height: '800px',
filebrowserBrowseUrl : '../ckeditor/ckfinder/ckfinder.html',
filebrowserImageBrowseUrl : '../ckeditor/ckfinder/ckfinder.html?type=Images',
filebrowserFlashBrowseUrl : '../ckeditor/ckfinder/ckfinder.html?type=Flash',
filebrowserUploadUrl : '../ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
filebrowserImageUploadUrl : '../ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : '../ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
}
);
	</script>
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
