<?php 
	include("../config/config.inc.php");
	include("includes/class.upload.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$companyid = $_REQUEST['companyid'];
$productid = $_REQUEST['productid'];
$pageid = $_REQUEST['pageid'];

$imagepath = "../images/product/";
$imagethumbpath = "../images/product/thumb/";
 
$mtitle	= $dbquery->real_escape_string($_REQUEST['mtitle']);
$mkeywords	= $dbquery->real_escape_string($_REQUEST['mkeywords']);
$mdesc	= $dbquery->real_escape_string($_REQUEST['mdesc']);

$catid = $_REQUEST['category'];
$subcatid = $_REQUEST['subcategory'];
$product_name	= $dbquery->real_escape_string($_REQUEST['product_name']);
$short_desc  = $dbquery->real_escape_string($_REQUEST['short_desc']);
$desc  = $dbquery->real_escape_string($_REQUEST['desc']);

$image1 = $_REQUEST['fld_image1'];
$fld_image = $_FILES['fld_image']['name'];  
$fileTmp = $_FILES['fld_image']['tmp_name'];
$date = date("Y-m-d h:i:s");
$product_code = rand(1,9).rand(11,99).rand(111,999).rand(5555,8888);

$sqlseo = "SELECT * FROM tbl_buyoffer WHERE fld_product_name='$product_name'";
$rsSeo = $dbquery->query($sqlseo);
$cnt = $rsSeo ->num_rows;
if($cnt > 0)
{
$seourl = MakeSeoUrl($product_name)."_".$cnt;
}
else
{
$seourl = MakeSeoUrl($product_name);
}
if($product_name!="")
{
	   
		if($productid > 0)
		{
			      $sqlUpdate = "UPDATE tbl_buyoffer set  
			       fld_company_id = '".$companyid."',
				    fld_catid = '".$catid."',
				   fld_subcatid = '".$subcatid."',
				   fld_product_name ='".$product_name."',
				   fld_short_desc ='".$short_desc."',
				   fld_image ='".$image1."',
				   fld_desc = '".$desc."',
				   fld_mtitle ='".$mtitle."',
				   fld_mdesc ='".$mdesc."',
				   fld_mkeywords ='".$mkeywords."',
				   fld_added_on ='".$date."'
				   where fld_id='".$productid."'";
				 
			$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
			$updts = 2;
		}
		else
		{
 
			       $sqlInsert = "INSERT INTO tbl_buyoffer SET
				   fld_company_id = '".$companyid."',
				    fld_catid = '".$catid."',
				   fld_subcatid = '".$subcatid."',
				   fld_product_code ='".$product_code."',
			       fld_product_name ='".$product_name."',
				   fld_seourl ='".$seourl."',
				   fld_short_desc ='".$short_desc."',
				   fld_desc = '".$desc."',
				   fld_mtitle ='".$mtitle."',
				   fld_mdesc ='".$mdesc."',
				   fld_mkeywords ='".$mkeywords."',
				   fld_added_on ='".$date."'";
			   
		
			$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
			$prodid = $dbquery->insert_id;
			$updts = 1;
		
				
		}
		 
		 
			  if($_FILES['fld_image']['name']!='')
		      {	
 				$sqlimage = "SELECT fld_image FROM tbl_buyoffer where fld_id='$productid'";
				$rsimage = $dbquery->query($sqlimage) or die("Unlink Image Error:" . $dbquery->error);
				$numimage = $rsimage->num_rows;
				if($numimage > 0)
				{
					$rowimage = $rsimage->fetch_object();
					$galimage = $rowimage->fld_image;
					if($galimage!="")
					{
						unlink($imagepath . $galimage);
						unlink($imagethumbpath . $galimage);
 						
					}
				}
				$handle = new Upload($_FILES['fld_image']);
				$name = explode(".",$_FILES['fld_image']['name']);
				$filename2Save = $name[0]."IMG" . date('YHis') . rand(1,1000);
				if ($handle->uploaded)
				{	
 					##mainimage
					$handle->image_resize  = true;
	
					$size = getUpImageSize($_FILES['fld_image']);
 				 
					$old_x = $size['x']; // Width
					$old_y = $size['y']; // Height
					
					if($old_x > PRODUCT_WIDTH_SIZE && $old_y > PRODUCT_HEIGHT_SIZE)
					{
						//$handle->image_ratio_y           = false;
						$handle->image_x                 = PRODUCT_WIDTH_SIZE;
 						$handle->image_y                 = PRODUCT_HEIGHT_SIZE;
					}
					
					$handle->image_ratio_no_zoom_in 	 = true;
					$handle->file_new_name_body = $filename2Save;
 					$handle->Process($imagethumbpath);
					if ($handle->processed)
					{
						$file = $handle->file_dst_name; 
						
					}
			
					
				
		      	}
				
				move_uploaded_file( $_FILES['fld_image']['tmp_name'] ,$imagepath.$filename2Save.'.'.$name[1]);
				
				
				if($file)
				{
					 $fileName = $file;
					
					  	
					if($productid > 0)
					{
						$sqlUpdate = "UPDATE  tbl_buyoffer set fld_image='$fileName' where fld_id='$productid'";
						$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
						$updts = 2;
					}
					else
					{
			 
						$sqlInsert = "UPDATE tbl_buyoffer set fld_image='$fileName' where fld_id='$prodid'";
						$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
						$sldid = $dbquery->insert_id;
						$updts = 1;
					}
					 
					 
				}
				
      }
	  if($updts > 0)
		{
			
				echo "<script>document.location.href='buyoffer-mgmt.php?companyid=".$companyid."&pageid=".$pageid."&msgupd=".$updts."';</script>";
				exit;

      }
   }


##Show Detail
$sqlDisp = " SELECT * FROM tbl_buyoffer WHERE fld_id='$productid'";
$rsDisp = $dbquery->query($sqlDisp) or die("Display Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp = $rsDisp->fetch_object();
	
	
	
  }


//$getcatstree = getPerentsUniversity($dbquery,0);
$selectedPage = 3;
$ceditor = 1;
?>

<?php include('common/admheader.php'); ?>
<script>
function subCategory()
{	 

	var category = $("#category").val();
	
	 $.ajax({
			type: "post",
			data: {category:category},
			url: "ajaxsubcategory.php", 
			success: function(result){
				 $("#resultsubcat").html(result);
				 var chk = $.trim(result);
				
				
				
			}		 
	});
					
	return false;

}		 
	
</script>
	<section class="middlepart">
		<div class="leftsection"><div class="left-panel"></div></div>
		<div class="right-panel">
			<aside class="rightsection iframe dboard">
				<h2><?php if($productid=="") { echo "Add"; } else { echo "Edit"; } ?>
			      Buy Offer
			      <?php if($messageText!="") { ?>
			      <div class="errormsg"><?php echo $messageText; ?></div><?php } ?></h2>
			  <div class="divider"></div>
				<div class="form">
				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
			   	<input type="hidden" name="companyid" value="<?php echo $companyid; ?>" />
                  <input type="hidden" name="productid" value="<?php echo $productid;?>"  />
				   <input type="hidden" name="pageid" value="<?php echo $pageid; ?>" />
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
						<label>Category Name:</label>
                        <select name="category" id="category" onchange="return subCategory();" required >
                         <option value="">Select Category</option>
                        <?php $sqlcat = "SELECT * FROM tbl_category where fld_parentid='0' and fld_status='Active'";
						  $rsCat = $dbquery->query($sqlcat);
						  while($rowCat = $rsCat->fetch_object())
						  {
						?>
                        <option value="<?php echo $rowCat->fld_id; ?>" <?php echo ($rowDisp->fld_catid==$rowCat->fld_id) ? "selected" : "";?>><?php echo $rowCat->fld_name; ?> </option>
                        <?php }?>
                      </select>
					
						</li>
                        
                        <li id="resultsubcat">
                        <?php if($productid!="") {  ?>
                        <label>Subcategory Name:</label>
                            <select name="subcategory" id="subcategory"  required>
                           <option value="">Select Subcategory</option>
                            <?php $sqlcat = "SELECT * FROM tbl_category where fld_parentid='$rowDisp->fld_catid' and fld_status='Active'";
                              $rsCat = $dbquery->query($sqlcat);
                              while($rowCat = $rsCat->fetch_object())
                              {
                            ?>
                            <option value="<?php echo $rowCat->fld_id; ?>"  <?php echo ($rowDisp->fld_subcatid==$rowCat->fld_id) ? "selected" : "";?> ><?php echo $rowCat->fld_name; ?> </option>
                            <?php }?>
                            </select>
                            <?php }?>
                        </li>
						 <li>
						<label>Title:</label>
						<input type="text" name="product_name" id="product_name" value="<?php echo $rowDisp->fld_product_name;?>" size="60" placeholder="Service Name" required /> 
                        <span id="emailerror"></span>
						</li>
                     <!--   <li>
							<label> Image:</label>
                            
                            <input type="hidden" name="fld_image1" id="fld_image1" value="<?php echo $rowDisp->fld_image;?>"  />
							<input type="file" name="fld_image" id="fld_image" value=""  /> 
							<?php if($productid!="") {  ?>
							<img height="100" width="100" src="../images/product/<?php echo $rowDisp->fld_image;?>" />
								<br />
								<br />
								<?php }?>
								
						</li>	
						
                         <li>
						<label> Short Description:</label>
						                       
                        <textarea  name="short_desc" id="short_desc" rows="10" cols="30" style="width:400px; height:100px;" class="textarea"><?php echo $rowDisp->fld_short_desc;?></textarea>
						
                      	</li>-->
                        
                         <li>
						<label> Description:</label>
						<br />
<br />

							<textarea type="text" name="desc" id="desc" rows="3" cols="50" ><?php echo $rowDisp->fld_desc;?></textarea>

  					
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
                        
						</li>
                        	
						<li>
						<label></label>
						<input name="submit" type="submit" value="<?php if($productid ==""){?>Save <?php }else{?>Update<?php }?>">
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
 

