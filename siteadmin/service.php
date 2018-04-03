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
$mcatagory = $dbquery->real_escape_string($_REQUEST['mcatagory']);
$mdesc	= $dbquery->real_escape_string($_REQUEST['mdesc']);

$catid = $_REQUEST['category'];
$subcatid = $_REQUEST['subcategory'];
$product_name	= $dbquery->real_escape_string($_REQUEST['product_name']);
$price	= $dbquery->real_escape_string($_REQUEST['price']);
$destination	= $dbquery->real_escape_string($_REQUEST['destination']);
$duration	= $dbquery->real_escape_string($_REQUEST['duration']);
$short_desc  = $dbquery->real_escape_string($_REQUEST['short_desc']);
$desc  = $dbquery->real_escape_string($_REQUEST['desc']);
$diagnostics  = $dbquery->real_escape_string($_REQUEST['diagnostics']);
$warranty  = $dbquery->real_escape_string($_REQUEST['warranty']);
$repair  = $dbquery->real_escape_string($_REQUEST['repair']);
//-------------------Serices Image--------------------
if($_FILES['fld_image']['name']!='')
		{	
						
			$ext = pathinfo($_FILES['fld_image']['name'], PATHINFO_EXTENSION);
			$namefile = "AERO".rand(1,9999).time().".".$ext;
		} else {
			$namefile = $_POST['fld_image1'];
		 }
       move_uploaded_file($_FILES['fld_image']['tmp_name'],"../images/packages/".$namefile);
//-------------------Services Icon--------------------
   if($_FILES['fld_icon']['name']!='')
		{	
			
			$ext = pathinfo($_FILES['fld_icon']['name'], PATHINFO_EXTENSION);
		
			$nameicon = "AERO".rand(1,9999).time().".".$ext;
		} else {
			$nameicon = $_POST['fld_icon1'];
		 }
       move_uploaded_file($_FILES['fld_icon']['tmp_name'],"../images/packages/".$nameicon);
 
	   
	   
$date = date("Y-m-d h:i:s");
$product_code = rand(1,9).rand(11,99).rand(111,999).rand(5555,8888);

$sqlseo = "SELECT * FROM tbl_service WHERE fld_product_name='$product_name'";
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
			      $sqlUpdate = "UPDATE tbl_service set  
			       fld_company_id = '".$companyid."',
				    fld_catid = '".$catid."',
				   fld_subcatid = '".$subcatid."',
				   fld_product_name ='".$product_name."',
				   fld_catagory ='".$mcatagory."',
				   fld_price ='".$price."',
				   fld_duration ='".$duration."',
				   fld_destination ='".$destination."',
				   fld_short_desc ='".$short_desc."',
				   fld_image ='".$namefile."',
				    fld_icon ='".$nameicon."',
				   fld_desc = '".$desc."',
				   fld_dignostic = '".$diagnostics."',
				   fld_repair = '".$repair."',
				   fld_warranty = '".$warranty."',
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
 
			       $sqlInsert = "INSERT INTO tbl_service SET
				   fld_company_id = '".$companyid."',
				   fld_catid = '".$catid."',
				   fld_subcatid = '".$subcatid."',
				   fld_catagory ='".$catagory."',
				   fld_product_code ='".$product_code."',
			       fld_product_name ='".$product_name."',
				     fld_icon ='".$nameicon."',
				   fld_price ='".$price."',
				   fld_duration ='".$duration."',
				   fld_destination ='".$destination."',
				   fld_seourl ='".$seourl."',
				    fld_image ='".$namefile."',
				   fld_short_desc ='".$short_desc."',
				   fld_desc = '".$desc."',
				    fld_dignostic = '".$diagnostics."',
				   fld_repair = '".$repair."',
				   fld_warranty = '".$warranty."',
				   fld_mtitle ='".$mtitle."',
				   fld_mdesc ='".$mdesc."',
				   fld_mkeywords ='".$mkeywords."',
				   fld_added_on ='".$date."'";
			   
		
			$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
			$prodid = $dbquery->insert_id;
			$updts = 1;
		
				
		}
		
        
	  if($updts > 0)
		{
			
				echo "<script>document.location.href='service-mgmt.php?pageid=".$pageid."&msgupd=".$updts."';</script>";
				exit;

      }
   }


##Show Detail
$sqlDisp = " SELECT * FROM tbl_service WHERE fld_id='$productid'";
$rsDisp = $dbquery->query($sqlDisp) or die("Display Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp = $rsDisp->fetch_object();
	
	
	
  }


//$getcatstree = getPerentsUniversity($dbquery,0);
$selectedPage = 31;
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
				<h2><?php if($productid=="") { echo "Add"; } else { echo "Edit"; } ?> Product <?php if($messageText!="") { ?>
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
						<label>Catagory selected:</label>
						<?php echo $rowDisp->fld_catagory;?>
						</li>
						
						<li>
						<label>Catagory Change</label>
						<select name="mcatagory" id="mcatagory" required>
							<option value="">--Select one--</option>
							<option value="audio/video">Audio/Video</option>
							<option value="itnetworking">IT Networking</option>
							<option value="securityservilance">Security Servilance</option>
							<option value="solution">solution</option>
							<option value="other">other</option>
						</select>
						</li>
					 <!-- 	 <li>
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
						-->
						 <li>						 
						<label>Product Name:</label>
						<input type="text" name="product_name" id="product_name" value="<?php echo $rowDisp->fld_product_name;?>" size="60" placeholder="Service Name" required /> 
                        <span id="emailerror"></span>
						</li>
						<!---
						<li>
						<label>Tour Price:</label>
						<input type="text" name="price" id="price" value="<?php echo $rowDisp->fld_price;?>" size="60" placeholder="Tour Price eg. 500"  style="width:200px;" /> $/person
						</li>
						
						<li>
						<label>Destination :</label>
						<input type="text" name="destination" id="destination" value="<?php echo $rowDisp->fld_destination;?>" size="60" placeholder="Tour Destination"  />
						</li>
						
						<li>
						<label>Duration:</label>
						<input type="text" name="duration" id="duration" value="<?php echo $rowDisp->fld_duration;?>" size="60" placeholder="Tour Duration  eg. 3days/2nights"  />
						</li>
						
						
						  <li>
						<label>Icon:</label>
                         <input type="hidden" name="fld_icon1" id="fld_icon1" value="<?php echo $rowDisp->fld_icon;?>"  />
							<input type="file" name="fld_icon" id="fld_icon" value=""  /> 
							  <span style="width:50%; margin:2px 0px 0px 7px;; color:#f00; float:left;">Recomended image dimension 64X64px</span> 
							<?php if($productid!="") {  ?>
							<img height="64" width="64" src="../images/packages/<?php echo $rowDisp->fld_icon;?>" />
								<br />
								<br />
								<?php }?>
								
						</li>	-->
                        <li>
						<label> Image:</label>
                         <input type="hidden" name="fld_image1" id="fld_image1" value="<?php echo $rowDisp->fld_image;?>"  />
							<input type="file" name="fld_image" id="fld_image" value=""  /> 
							  <span style="width:50%; margin:2px 0px 0px 7px;; color:#f00; float:left;">Recomended image dimension 650X360px</span> 
							<?php if($productid!="") {  ?>
							<img height="100" width="100" src="../images/packages/<?php echo $rowDisp->fld_image;?>" />
								<br />
								<br />
								<?php }?>
								
						</li>	
						<!--
                         <li>
						<label> Short Description:</label>
						                       
                        <textarea  name="short_desc" id="short_desc" rows="10" cols="30" style="width:400px; height:100px;" class="textarea"><?php echo $rowDisp->fld_short_desc;?></textarea>
						
                      	</li>
						
						<li>
						<label> Diagnostics:</label>
						<br />
                         <br />
                            <div style="padding-left:196px;">
						<textarea type="text" name="diagnostics" id="diagnostics" rows="3" cols="50" ><?php echo $rowDisp->fld_dignostic;?></textarea>
                         </div>
  	                                       
					<script>
                    CKEDITOR.replace( 'diagnostics', {
                    width: '500px',
                    height: '200px',
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
						<label> Repair:</label>
						<br />
                         <br />
                          <div style="padding-left:196px;">
						<textarea type="text" name="repair" id="repair" rows="3" cols="50" ><?php echo $rowDisp->fld_repair;?></textarea>

  	                      </div>                 
					<script>
                    CKEDITOR.replace( 'repair', {
                    width: '500px',
                    height: '200px',
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
						<label> Warranty:</label>
						<br />
                         <br />
                        <div style="padding-left:196px;">
						<textarea  type="text" name="warranty" id="warranty" rows="3" cols="50" ><?php echo $rowDisp->fld_warranty;?></textarea>
                        </div>
  	                                       
					<script>
                    CKEDITOR.replace( 'warranty', {
                    width: '500px',
                    height: '200px',
                    filebrowserBrowseUrl : '../ckeditor/ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl : '../ckeditor/ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl : '../ckeditor/ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl : '../ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl : '../ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl : '../ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                    } );
                    </script>
                        
						</li>
                       --> 
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
 

