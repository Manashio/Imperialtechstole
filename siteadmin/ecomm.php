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

 
 $imagepath = "../images/company/";
 $imagethumbpath = "../images/company/thumb/";
 
$mtitle	= $dbquery->real_escape_string($_REQUEST['mtitle']);
$mkeywords	= $dbquery->real_escape_string($_REQUEST['mkeywords']);
$mdesc	= $dbquery->real_escape_string($_REQUEST['mdesc']);
$email	= $dbquery->real_escape_string($_REQUEST['email']);
$name	= $dbquery->real_escape_string($_REQUEST['name']);

$company_name	= $dbquery->real_escape_string($_REQUEST['company_name']);
$website_url	= $dbquery->real_escape_string($_REQUEST['website_url']);
$businesstype	= implode(",",$_REQUEST['business_type']);
$desc  = $dbquery->real_escape_string($_REQUEST['desc']);
$phone	= $dbquery->real_escape_string($_REQUEST['phone']);
$mobile	= $dbquery->real_escape_string($_REQUEST['mobile']);
$fax	= $dbquery->real_escape_string($_REQUEST['fax']);
$address	= $dbquery->real_escape_string($_REQUEST['address']);
$city	= $dbquery->real_escape_string($_REQUEST['city']);
$state	= $dbquery->real_escape_string($_REQUEST['state']);
$pincode	= $dbquery->real_escape_string($_REQUEST['pincode']);
$country	= $dbquery->real_escape_string($_REQUEST['country']);

$ecommhub	= $dbquery->real_escape_string($_REQUEST['ecommhub']);
$services	= $dbquery->real_escape_string($_REQUEST['services']);
$companies	= $dbquery->real_escape_string($_REQUEST['companies']);
$investment	= $dbquery->real_escape_string($_REQUEST['investment']);

$image1 = $_REQUEST['fld_image1'];
$date = date("Y-m-d h:i:s");
$password = rand(1,9).rand(11,99).rand(111,999);

$sqlseo = " SELECT * FROM tbl_company WHERE fld_company_name='$company_name'";
$rsSeo = $dbquery->query($sqlseo);
$cnt = $rsSeo ->num_rows;
if($cnt > 0)
{
$seourl = MakeSeoUrl($company_name)."_".$cnt;
}
else
{
$seourl = MakeSeoUrl($company_name);
}



 if($email!="")
{
	   
		if($companyid > 0)
		{
			$sqlUpdate = "UPDATE tbl_ecomm set  
			       fld_email ='".$email."',
				   fld_name = '".$name."',
				   fld_company_name ='".$company_name."',
				   fld_seourl ='".$seourl."',
				   fld_website_url ='".$website_url."',
				   fld_business_type = '".$businesstype."',
				   fld_desc ='".$desc."',
				   fld_ecommhub ='".$ecommhub."',
				   fld_investment ='".$investment."',
				   fld_services ='".$services."',
				   fld_companies='".$companies."',
				   fld_image ='".$image1."',
				   fld_phone ='".$phone."',
				   fld_address ='".$address."',
				   fld_mobile ='".$mobile."',
				   fld_fax ='".$fax."',
				   fld_city ='".$city."',
				   fld_state ='".$state."',
				   fld_pincode ='".$pincode."',
				   fld_country ='".$country."',
				   fld_mtitle ='".$mtitle."',
				   fld_mdesc ='".$mdesc."',
				   fld_mkeywords ='".$mkeywords."'
				   where fld_id='".$companyid."'";
				 
			$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
			$updts = 2;
		}
		else
		{
 
			       $sqlInsert = "INSERT INTO tbl_ecomm SET
			       fld_email ='".$email."',
				   fld_password ='".md5($password)."',
				   fld_name = '".$name."',
				   fld_company_name ='".$company_name."',
				   fld_seourl ='".$seourl."',
				   fld_website_url ='".$website_url."',
				   fld_business_type = '".$businesstype."',
				   fld_desc ='".$desc."',
				    fld_ecommhub ='".$ecommhub."',
				   fld_investment ='".$investment."',
				   fld_services ='".$services."',
				   fld_companies='".$companies."',
				   fld_phone ='".$phone."',
				   fld_address ='".$address."',
				   fld_mobile ='".$mobile."',
				    fld_fax ='".$fax."',
				   fld_city ='".$city."',
				   fld_state ='".$state."',
				   fld_pincode ='".$pincode."',
				   fld_country ='".$country."',
				   fld_mtitle ='".$mtitle."',
				   fld_mdesc ='".$mdesc."',
				   fld_mkeywords ='".$mkeywords."',
				   fld_reg_date ='".$date."'";
			   
		
			$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
			$compid = $dbquery->insert_id;
			$updts = 1;
		}
		 
		 if($_FILES['fld_image']['name']!='')
		      {	
 				$sqlimage = "SELECT fld_image FROM tbl_ecomm where fld_id='$companyid'";
				$rsimage = $dbquery->query($sqlimage) or die("Unlink Image Error:" . $dbquery->error);
				$numimage = $rsimage->num_rows;
				if($numimage > 0)
				{
					$rowimage = $rsimage->fetch_object();
					$galimage = $rowimage->fld_image;
					if($galimage!="")
					{
					  
					  unlink($imagethumbpath . $galimage);
						unlink($imagepath . $galimage);
						
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
					
					if($old_x > COMPANY_PRODUCT_WIDTH_SIZE && $old_y > COMPANY_HEIGHT_SIZE)
					{
						//$handle->image_ratio_y           = false;
						$handle->image_x                 = COMPANY_WIDTH_SIZE;
 						$handle->image_y                 = COMPANY_HEIGHT_SIZE;
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
					
					  	
					if($companyid > 0)
					{
						$sqlUpdate = "UPDATE  tbl_ecomm set fld_image='$fileName' where fld_id='$companyid'";
						$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
						$updts = 2;
					}
					else
					{
			 
						$sqlInsert = "UPDATE tbl_ecomm set fld_image='$fileName' where fld_id='$compid'";
						$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
						$sldid = $dbquery->insert_id;
						$updts = 1;
					}
					 
					 
				}
				
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

<script>
function emailChk()
			{	  
			 
				var email = $("#email").val();
				
				 $.ajax({
						type: "post",
						data: {email:email},
						url: "email.php", 
						success: function(result){
							 $("#emailerror").html(result);
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
				<h2><?php if($companyid=="") { echo "Add"; } else { echo "Edit"; } ?> E-commerce Hub <?php if($messageText!="") { ?>
				  <div class="errormsg"><?php echo $messageText; ?></div><?php } ?></h2>
				<div class="divider"></div>
				<div class="form">
				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
				<input type="hidden" name="companyid" value="<?php echo $companyid; ?>" />
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
						<label>Email:</label>
						<input type="text" name="email" id="email" value="<?php echo $rowDisp->fld_email;?>" size="60" placeholder="Email" required onblur="return emailChk();" <?php if($companyid !=""){ echo 'readonly="readonly"'; }?>  /> 
						</li>
						 <li>
						<label>Contact Person Name:</label>
						<input type="text" name="name" id="name" value="<?php echo $rowDisp->fld_name;?>" size="60" placeholder="Conctact Person" required /> 
                        <span id="emailerror"></span>
						</li>
						<li>
						<label>Ecommerce Hum Name:</label>
						<input type="text" name="company_name" id="company_name" value="<?php echo $rowDisp->fld_company_name;?>" size="60" placeholder="Ecommerce Hum Name" required /> 
						</li>
                        <li>
						<label>Website Url:</label>
						<input type="text" name="website_url" id="website_url" value="<?php echo $rowDisp->fld_website_url;?>" size="60" placeholder="Website Url" required /> 
						</li>
						
                       
                       <li>
							<label> Image:</label>
                            
                            <input type="hidden" name="fld_image1" id="fld_image1" value="<?php echo $rowDisp->fld_image;?>"  />
							<input type="file" name="fld_image" id="fld_image" value=""  /> 
							<?php if($companyid!="") {  ?>
							<img height="100" width="100" src="../images/company/thumb/<?php echo $rowDisp->fld_image;?>" />
								<br />
								<br />
								<?php }?>
								
						</li>	
						
                         <li>
						<label> Description:</label>
					
                       <textarea  name="desc" id="desc" rows="10" cols="30" style="width:400px; height:100px;" class="textarea" ><?php echo $rowDisp->fld_desc;?>
                       </textarea>
							</li>
							
						 <li>
						<label>Business Type:</label>
                        <?php $i =1; foreach($arrBusinessType as $key=>$value){?>
                        <input type="checkbox" name="business_type[]" id="business_type[]"  value="<?php echo $key;?>" <?php $arr = explode(",",$rowDisp->fld_business_type); 
						echo (in_array($key,$arr))? "checked" : "";?>  /> <?php echo $value;?>
                        <?php if($i%3==0){ echo "<br>";}?>
                        <?php $i++; }?>
						
						</li>	
                        <li>
						<label>Phone No.:</label>
						<input type="text" name="phone" id="phone" value="<?php echo $rowDisp->fld_phone;?>" size="60" placeholder="Phone" required /> 
						</li>
                        <li>
						<label>Mobile No.:</label>
						<input type="text" name="mobile" id="mobile" value="<?php echo $rowDisp->fld_mobile;?>" size="60" placeholder="Mobile" required /> 
					  </li>
                       <li>
						<label>Fax</label>
						<input type="text" name="fax" id="fax" value="<?php echo $rowDisp->fld_fax;?>" size="60" placeholder="Fax"  /> 
					  </li>
                        <li>
						<label>Steet Address:</label>
						<input type="text" name="address" id="address" value="<?php echo $rowDisp->fld_address;?>" size="60" placeholder="Address" required /> 
						</li>
                        <li>
						<label>City:</label>
						<input type="text" name="city" id="city" value="<?php echo $rowDisp->fld_city;?>" size="60" placeholder="city" required /> 
						</li>
                        <li>
						<label>State:</label>
						 
                        <select name="state" id="state" required >
                        <option value="">Select State</option>
                        <?php foreach($arrProChina as $key=>$val){?> 
                        <option value="<?php echo $key;?>" <?php echo ($key== $rowDisp->fld_state)? "selected" : "";?>> <?php echo $val;?></option>
                        <?php }?>
                        </select>
						</li>
                        <li>
                          <label>Pin code:</label>
						<input type="text" name="pincode" id="pincode" value="<?php echo $rowDisp->fld_pincode;?>" size="60" placeholder="Pin Code" required /> 
						</li>
                        <li>
						<label>Country:</label>
                        <select name="country" id="country" required >
                        <?php foreach($arrCountryChina as $key=>$val){?> 
                        <option value="<?php echo $key;?>" <?php echo ($key== $rowDisp->fld_country)? "selected" : "";?>> <?php echo $val;?></option>
                        <?php }?>
                        </select>
						
						</li>
                          
						
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
 

