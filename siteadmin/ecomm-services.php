<?php 
	include("../config/config.inc.php");
	include("includes/class.upload.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$companyid = $_REQUEST['companyid'];
$pageid = $_REQUEST['pageid'];


$ecommhub	= $dbquery->real_escape_string($_REQUEST['ecommhub']);
$services	= $dbquery->real_escape_string($_REQUEST['services']);
$companies	= $dbquery->real_escape_string($_REQUEST['companies']);
$investment	= $dbquery->real_escape_string($_REQUEST['investment']);




 if($services!="")
{
	   
		if($companyid > 0)
		{
			$sqlUpdate = "UPDATE tbl_ecomm set  
			      
				   fld_services ='".$services."'
				   
				   where fld_id='".$companyid."'";
				 
			$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
			$updts = 2;
		}
		
	
		 
		if($updts > 0)
		{
			
				echo "<script>document.location.href='ecomm-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
				exit;


 
		}
	
}



##Show Detail
$sqlDisp = " SELECT * FROM tbl_ecomm WHERE fld_id='$companyid'";
$rsDisp = $dbquery->query($sqlDisp) or die("Display Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp = $rsDisp->fetch_object();
	
	
	
  }


//$getcatstree = getPerentsUniversity($dbquery,0);
$selectedPage = 4;
$ceditor = 1;
?>





<?php include('common/admheader.php'); ?>


	<section class="middlepart">
		<div class="leftsection"><div class="left-panel"></div></div>
		<div class="right-panel">
			<aside class="rightsection iframe dboard">
				<h2><?php if($companyid=="") { echo "Add"; } else { echo "Edit"; } ?> Services <?php if($messageText!="") { ?>
				  <div class="errormsg"><?php echo $messageText; ?></div><?php } ?></h2>
				<div class="divider"></div>
				<div class="form">
				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
				<input type="hidden" name="companyid" value="<?php echo $companyid; ?>" />
				<input type="hidden" name="pageid" value="<?php echo $pageid; ?>" />
					<ul>
						 
						
					
						 <li>
                          <label>Service :</label>
						  <br><br>
						  <textarea type="text" name="services" id="services" rows="3" cols="50" ><?php echo $rowDisp->fld_services;?></textarea>
                          <br>
  						  <br>
						<script>
							CKEDITOR.replace( 'services', {
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
						</li>
                        <li>
						
						
						<li>
						<label></label>
						<input name="submit" type="submit" value="<?php if($companyid ==""){?>Save <?php }else{?>Update<?php }?>">
						</li>
					</ul>
					</form>
				</div>
			</aside>
		</div>
	</section>


<?php include("common/admfooter.php"); ?>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<script>
 $(function() {
   $( "#fld_date" ).datepicker({
     defaultDate: "+1w",
 minDate:0,
     changeMonth: true,
 changeYear: true,
     numberOfMonths: 1,
 dateFormat: 'dd-mm-yy'
     
   });
   })
 </script>
 

