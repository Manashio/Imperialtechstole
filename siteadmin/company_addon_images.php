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

 if(isset($_REQUEST['submit']))
 {
     $company_id = $_REQUEST['company_id'];
     $fld_image = $_FILES['fld_image']['name'];  
     $fileTmp = $_FILES['fld_image']['tmp_name'];
	 
	 $image_cat = $dbquery->real_escape_string($_REQUEST['image_cat']);
	

		if($_FILES['fld_image']['name']!='')
		{	
			$uplodFileName = $_FILES['fld_image']['name'];
			
			$ext = pathinfo($uplodFileName, PATHINFO_EXTENSION);
		
			$namefile = "AERO".rand(1,9999).time().".".$ext;
		} else {
			$namefile = $_POST['fld_image1'];
		 }
       move_uploaded_file($fileTmp,"../images/document/".$namefile);
 

		
 
		$sqlInsert = "INSERT INTO tbl_addonimages SET fld_image='".$namefile."',fld_company_id='".$company_id."',fld_image_cat = '".$image_cat."'";
		  	$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
			$articlesid = $dbquery->insert_id;
			$updts = 1;
	
		
		 
		 
		if($updts > 0)
		{
			
				echo "<script>document.location.href='company_addon_image_mngmt.php?msgupd=".$updts."&companyid=".$company_id."';</script>";
				exit;


 
		}
	
}
##Show Detail
$sqlDisp = " SELECT * FROM tbl_addonimages WHERE fld_id='$sldid'";
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
				<h2><?php if($sldid=="") { echo "Add"; } else { echo "Edit"; } ?> Company Image <?php if($messageText!="") { ?><div class="errormsg"><?php echo $messageText; ?></div><?php } ?></h2>
				<div class="divider"></div>
				<div class="form">
				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" onSubmit="return validate();">
				<input type="hidden" name="company_id" value="<?php echo $_GET['companyid']; ?>" />
			
					<ul>
						 
			
                        
                        <li>
						<label>Select Image Category:</label>
						
						 <select  name="image_cat" id="image_cat" required>
                          <option value="">Select Image Category</option>
                         
                          <?php foreach($arrayImgcomp as $key=>$val){?>
                           <option value="<?php echo $key;?>"><?php echo $val;?></option>
                          <?php }?>
                       
                          </select>
						</li>
                        
                        
                       <!-- <li>
						<label>Button Title:</label>
						<input type="text" name="fld_button_title" id="fld_button_title" value="<?php echo $rowDisp->fld_button_title;?>" size="60" placeholder="Content" required /> 
						</li>
                        <li>
						<label>URL:</label>
						<input type="text" name="fld_url" id="fld_url" value="<?php echo $rowDisp->fld_url;?>" size="60" placeholder="Content" required /> 
						</li>
                        -->
							<li>
							<label>Image:</label>
							
							<input type="file" name="fld_image" id="fld_image" value="<?php echo $rowDisp->fld_image;?>"   /> 
                           
                            <span style="width:50%; margin:2px 0px 0px 7px;; color:#f00; float:left;">Recomended image dimension 575X445</span> 
                            
                            <?php if($sldid!="") {  ?>
                         
							<img height="100" width="100" src="../images/document/<?php echo $rowDisp->fld_image;?>" />
								
								<?php }?>
								<input type="hidden" name="fld_image1" id="fld_image1" value="<?php echo $rowDisp->fld_image;?>"  />
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
