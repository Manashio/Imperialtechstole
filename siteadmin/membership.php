<?php 
	include("../config/config.inc.php");
	include("includes/class.upload.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$articlesid = $_REQUEST['articlesid'];
$pageid = $_REQUEST['pageid'];

$fld_title	= $dbquery->real_escape_string($_REQUEST['fld_title']);
$fld_price	= $dbquery->real_escape_string($_REQUEST['fld_price']);
$fld_description = $dbquery->real_escape_string($_REQUEST['fld_description']);
$fld_meta_title = $dbquery->real_escape_string($_REQUEST['fld_meta_title']);
$fld_meta_description = $dbquery->real_escape_string($_REQUEST['fld_meta_description']);
$fld_meta_keywords = $dbquery->real_escape_string($_REQUEST['fld_meta_keywords']);
 $fld_date = date("d-m-Y h:i:s");
 
 $fld_image = $_FILES['fld_image']['name'];  
$fileTmp = $_FILES['fld_image']['tmp_name'];

if($_FILES['fld_image']['name']!='')
{	
	$uplodFileName = $_FILES['fld_image']['name'];
} else {
	$uplodFileName = $_POST['fld_image1'];
 }
 move_uploaded_file($fileTmp,"../images/upload_leaf/".$uplodFileName); 
 if($fld_title!="")
{
	if($art > 0)
	{
		$whrid = " AND fld_id!='$articlesid'";
	}
	$sqlDup = "SELECT count(*) as cnt from tbl_articles where fld_title='$fld_title' $whrid";
	$rsDup = $dbquery->query($sqlDup) or die("Duplicate Error:" . $dbquery->error);
	$rowDup = $rsDup->fetch_object();
	$numDup = $rowDup->cnt;
	if($numDup > 0 && $articlesid=='')
	{
		$updts = 0;
		$messageText = "Sorry, membership already exists!";
	}
	else
	{
		if($articlesid > 0)
		{
			$sqlUpdate = "UPDATE tbl_membership set  
			   fld_title		='$fld_title',		
			    fld_price = '$fld_price',	     
			   fld_description	='$fld_description',
			   fld_meta_title = '$fld_meta_title',
			   fld_meta_description ='$fld_meta_description',
			   fld_meta_keywords ='$fld_meta_keywords',
			   fld_image      = '$uplodFileName'
			    where fld_id='$articlesid'";
			$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
			$updts = 2;
		}
		else
		{
 
			    $sqlInsert = "INSERT INTO tbl_membership SET
			   fld_title			='$fld_title',
			   fld_price = '$fld_price',
			   fld_description	='$fld_description',
			    fld_meta_title = '$fld_meta_title',
			   fld_meta_description ='$fld_meta_description',
			   fld_meta_keywords ='$fld_meta_keywords',
			   fld_image      = '$uplodFileName',
			   fld_date		= '$fld_date'";
			   
			
			$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
			$articlesid = $dbquery->insert_id;
			$updts = 1;
		}
		 
		 
		
		 
		 
		if($updts > 0)
		{
			
				echo "<script>document.location.href='membership-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
				exit;


 
		}
	}
}



##Show Detail
$sqlDisp = " SELECT * FROM tbl_membership WHERE fld_id='$articlesid'";
$rsDisp = $dbquery->query($sqlDisp) or die("Display Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp = $rsDisp->fetch_object();
	$articlesid = $rowDisp->fld_id;
  }


//$getcatstree = getPerentsUniversity($dbquery,0);
$selectedPage = 7;
$ceditor = 1;
?>





<?php include('common/admheader.php'); ?>



	<section class="middlepart">
		<div class="leftsection"><div class="left-panel"></div></div>
		<div class="right-panel">
			<aside class="rightsection iframe dboard">
				<h2><?php if($articlesid=="") { echo "Add"; } else { echo "Edit"; } ?> Memberhip <?php if($messageText!="") { ?>
				  <div class="errormsg"><?php echo $messageText; ?></div><?php } ?></h2>
				<div class="divider"></div>
				<div class="form">
				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
				<input type="hidden" name="articlesid" value="<?php echo $articlesid; ?>" />
				<input type="hidden" name="pageid" value="<?php echo $pageid; ?>" />
					<ul>
						 
						
						<li>
							<label>Meta Title:</label>
							<input type="text" name="fld_meta_title" id="fld_meta_title" value="<?php echo $rowDisp->fld_meta_title;?>" size="60" placeholder="Meta Title"  />
						</li>
						<li>
							<label>Meta Description:</label>
							<input type="text" name="fld_meta_description" id="fld_meta_description" value="<?php echo $rowDisp->fld_meta_description;?>" size="60" placeholder="Meta Description"  />
						</li>
						<li>
							<label>Meta Keywords:</label>
							<input type="text" name="fld_meta_keywords" id="fld_meta_keywords" value="<?php echo $rowDisp->fld_meta_keywords;?>" size="60" placeholder="Meta Keywords"  />
						</li>
						<li>
							<label>Memberhisp Name:</label>
							<input type="text" name="fld_title" id="fld_title" value="<?php echo $rowDisp->fld_title;?>" size="60" placeholder="Membership Name" required />
						</li>
                        <li>
                        <label>Price:</label>
							<input type="text" name="fld_price" id="fld_price" value="<?php echo $rowDisp->fld_price;?>" size="60" placeholder="Price" required style="width:50%;" /><div style="margin-top:3px; font-size:16px;"> Rs. / Per Year</div>
						</li>
						
					<!--	<li>
							<label> Image:</label>
							   <input type="hidden" name="fld_image1" id="fld_image1" value="<?php echo $rowDisp->fld_image;?>"  />	
							<input type="file" name="fld_image" id="fld_image" value="<?php echo $rowDisp->fld_image;?>"  />
							
								
							<div style="width:50%; margin:0 auto; color:#f00;">Recomended image dimension 60 X 60 pixel<br />
								<br />
							<img height="100" width="100" src="../images/upload_leaf/<?php echo $rowDisp->fld_image;?>"  />
						</div>
						</li>		
						 -->
						
						<li>
							<label> Description:</label><br />
<br />

								
                                <div style="padding-left:160px;">
								<textarea type="text" name="fld_description" id="fld_descriptoin" rows="2" cols="10"  class="textareac"><?php echo $rowDisp->fld_description;?></textarea>
                                </div>
<script>
		CKEDITOR.replace( 'fld_descriptoin', {
			height: 160,
			width:400
			
		} );
	</script>
						</li>
						 
						<li>
							<label></label>
							<input name="submit" type="submit" value="Save">
						</li>
					</ul>
					</form>
				</div>
			</aside>
		</div>
	</section>


<?php include("common/admfooter.php"); ?>
