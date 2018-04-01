<?php 
	include("../config/config.inc.php");
	include("includes/class.upload.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

 $pageid = $_REQUEST['pageid'];
 $id = $_REQUEST['id'];
 
$title 		= $dbquery->real_escape_string(addslashes($_REQUEST['title']));
$desc 		= htmlentities($_REQUEST['desc'], ENT_QUOTES);
$mtitle 	= $_REQUEST['mtitle'];
$mkeywords  = $_REQUEST['mkeywords'];
$mdesc 		= $_REQUEST['mdesc'];
$googlemapcode = $_REQUEST['googlemapcode'];

 $fileTmp = $_FILES['fld_image']['tmp_name'];

		if($_FILES['fld_image']['name']!='')
		{	
			$uplodFileName = $_FILES['fld_image']['name'];
			
			$ext = pathinfo($uplodFileName, PATHINFO_EXTENSION);
		
			$namefile = "AERO".rand(1,9999).time().".".$ext;
		} else {
			$namefile = $_POST['fld_image1'];
		 }
       move_uploaded_file($fileTmp,"../images/pages/".$namefile);
			
 
if($title!="")
{
	if($id > 0)
	{
		$whrid = " AND fld_id!='$id'";
	}
	  $sqlDup = "SELECT * from tbl_pages where fld_title='$title' $whrid";
	$rsDup = $dbquery->query($sqlDup) or die("Duplicate Error:" . $dbquery->error);
	$rowDup = $rsDup->fetch_object();
	  $rowDup = $rsDup->num_rows;
 	if($rowDup > 1)
	{
		$updts = 0;
		echo $messageText = "Sorry, Page already exists!";
	}
	else
	{
	 
			if($id!="")
			{
				   $sqlIns1 = "update tbl_pages set fld_title='$title',fld_image = '$namefile',fld_mtitle='$mtitle',fld_mdesc='".$mdesc."',fld_mkeywords='".$mkeywords."', fld_desc='$desc' where fld_id='$id'";  
				$rs1 = $dbquery->query($sqlIns1) or die('Error: ' . $dbh->error);	
				$updts=2;
			}
		
	 
	 
		 
		if($updts > 0)
		{
		
		echo "<script>document.location.href='page-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
		exit;

			 
		}
	}
}



##Show Detail
$sqlDisp = " SELECT * FROM tbl_pages WHERE fld_id='$id'";
$rsDisp = $dbquery->query($sqlDisp) or die("Display Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp = $rsDisp->fetch_object();
	$id = $rowDisp->fld_id;
 	$pageTitle = $rowDisp->fld_title;
 	$pageDescr = $rowDisp->fld_desc;
 }


 $selectedPage = 2;
$ceditor = 1;
?>
<style>
.mybtn{
background-color: #656565;
  
    margin-top: -35px;
    cursor: pointer;
    margin-right: 5px;
    float: left;
    font-size: 13px;
    text-align: center;
    border-radius: 3px;
    color: #FFF;
    text-decoration: none;
	float:right;
	height:25px;
	width:100px;
} 
</style>




<?php include('common/admheader.php'); ?>



	<section class="middlepart">
		<div class="leftsection"><div class="left-panel"></div></div>
		<div class="right-panel">
			<aside class="rightsection iframe dboard">
				<h2><?php if($id=="") { echo "Add"; } else { echo "Edit"; } ?> Page <?php if($messageText!="") { ?><div class="errormsg"><?php echo $messageText; ?></div><?php } ?></h2>
				<div class="divider"></div>
				<div class="form">
				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
				<input type="hidden" name="pageid" value="<?php echo $pageid; ?>" />
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
 					<ul>
						 
						 <li>
						<label>Meta Title:</label>
						<input type="text" name="mtitle" id="mtitle" value="<?php echo $rowDisp->fld_mtitle;?>" size="60" placeholder="Meta Title"  />
						</li>
						<li>
						<label>Meta Description:</label>
						<input type="text" name="mdesc" id="mdesc" value="<?php echo $rowDisp->fld_mdesc;?>" size="60" placeholder="Meta Description"  />
						</li>
						<li>
						<label>Meta Keywords:</label>
						<input type="text" name="mkeywords" id="mkeywords" value="<?php echo $rowDisp->fld_mkeywords;?>" size="60" placeholder="Meta Keywords"  />
						</li>
						 
						<li>
							<label>Page Title:</label>
							<input type="text" name="title" id="title" value="<?php echo $pageTitle;?>" size="60" required />
						</li>
						
						<?php if($_REQUEST['id']!=1){ ?>
						
					<!--  <li>
							<label>Banner Image:</label>
							<input type="hidden" name="fld_image1" id="fld_image1" value="<?php echo $rowDisp->fld_image;?>"  />
							<input type="file" name="fld_image" id="fld_image" value="<?php echo $rowDisp->fld_image;?>"   /> 
							<div style="width:50%; margin:0 auto; color:#f00;">Recomended image size 1920 X 650 pixle<br />
							<?php if($rowDisp->fld_image!="") {  ?>
							<br />
								<br />
							<img height="100" width="100" src="../images/pages/<?php echo $rowDisp->fld_image;?>" />
								
								<?php }?>
								</div>
								
							
										</li>
                                        -->
										<?php }?>	
						
							<li>
							<label>Content:</label>
								<br />
								<br />
							<textarea type="text" name="desc" id="desc" rows="3" cols="50" ><?php echo $pageDescr;?></textarea>

  						</li>
	<script>
		CKEDITOR.replace( 'desc', {
			width: '700px',
height: '400px',
filebrowserBrowseUrl : '../ckeditor/ckfinder/ckfinder.html',
filebrowserImageBrowseUrl : '../ckeditor/ckfinder/ckfinder.html?type=Images',
filebrowserFlashBrowseUrl : '../ckeditor/ckfinder/ckfinder.html?type=Flash',
filebrowserUploadUrl : '../ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
filebrowserImageUploadUrl : '../ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : '../ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
		} );
	</script>
	
						 
						<li>
							
							<input name="submit" type="submit" value="Update" style="background-color: #656565; height:25px; width:100px; margin-top:10px; cursor:pointer;">
							
						</li>
					</ul>
				
					</form>
				</div>
			</aside>
		</div>
	</section>


<?php include("common/admfooter.php"); ?>
