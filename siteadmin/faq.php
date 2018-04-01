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

$title = $dbquery->real_escape_string($_REQUEST['title']);
$desc = $dbquery->real_escape_string($_REQUEST['desc']);
$date = date("Y-m-d");
  
 if($title!="")
{
	
	
		if($catid > 0)
		{
			$sqlUpdate = "UPDATE tbl_faq set fld_title='$title', fld_desc='$desc' where fld_id='$catid'";
			$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
			$updts = 2;
		}
		else
		{
			$sqlInsert = "INSERT INTO tbl_faq SET  fld_title='$title', fld_desc='$desc',fld_posted='$date'"; 
			$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
			$catid = $dbquery->insert_id;
			$updts = 1;
		}
		
 

		if($updts > 0)
		{
		
		echo "<script>document.location.href='faq-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
		exit;

			 
		}
	
}



##Show Detail
$sqlDisp = " SELECT * FROM tbl_faq WHERE fld_id='$catid'";
$rsDisp = $dbquery->query($sqlDisp) or die("Display Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp = $rsDisp->fetch_object();
	$catid = $rowDisp->fld_id;
 	
	$title = $rowDisp->fld_title;
	$desc = $rowDisp->fld_desc;
	
 }

$selectedPage = 7;
$ceditor = 1;
?>





<?php include('common/admheader.php'); ?>



	<section class="middlepart">
		<div class="leftsection"><div class="left-panel"></div></div>
		<div class="right-panel">
			<aside class="rightsection iframe dboard">
				<h2><?php if($catid=="") { echo "Add"; } else { echo "Edit"; } ?> Faq <?php if($messageText!="") { ?><div class="errormsg"><?php echo $messageText; ?></div><?php } ?></h2>
				<div class="divider"></div>
				<div class="form">
				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
				<input type="hidden" name="catid" value="<?php echo $catid; ?>" />
				<input type="hidden" name="pageid" value="<?php echo $pageid; ?>" />
				
				
					<ul>
						
						 
						<li>
							<label>Title:</label>
							<input type="text" name="title" id="title" value="<?php echo $title;?>" size="60" required />
						</li>
						
						 
						<li>
							<label>Desciption:</label>
							<textarea name="desc" id="desc" rows="5" col="50" required style="border: 1px solid #DBDBDB; width:495px;"><?php echo $desc;?></textarea>
							
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
