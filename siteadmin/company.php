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
$imagethumbpath = "../images/company/";
 
$mtitle	= $dbquery->real_escape_string($_REQUEST['mtitle']);
$mkeywords	= $dbquery->real_escape_string($_REQUEST['mkeywords']);
$mdesc	= $dbquery->real_escape_string($_REQUEST['mdesc']);
$email	= $dbquery->real_escape_string($_REQUEST['email']);
$name	= $dbquery->real_escape_string($_REQUEST['name']);

$company_name	= $dbquery->real_escape_string($_REQUEST['company_name']); 
$china_exp_name = $dbquery->real_escape_string($_REQUEST['china_exp_name']); 

$website_url	= $dbquery->real_escape_string($_REQUEST['website_url']);
$businesstype	= implode(",",$_REQUEST['business_type']);
$international_certification  = $dbquery->real_escape_string($_REQUEST['international_certification']);
$desc  = $dbquery->real_escape_string($_REQUEST['desc']);
$phone	= $dbquery->real_escape_string($_REQUEST['phone']);
$mobile	= $dbquery->real_escape_string($_REQUEST['mobile']);
$fax	= $dbquery->real_escape_string($_REQUEST['fax']);
$address	= $dbquery->real_escape_string($_REQUEST['address']);
$district	= $dbquery->real_escape_string($_REQUEST['district']);
$city	= $dbquery->real_escape_string($_REQUEST['city']);
$state	= $dbquery->real_escape_string($_REQUEST['state']);
$pincode	= $dbquery->real_escape_string($_REQUEST['pincode']);
$country	= $dbquery->real_escape_string($_REQUEST['country']);

$ecommhub	= $dbquery->real_escape_string($_REQUEST['ecommhub']);
$services	= $dbquery->real_escape_string($_REQUEST['services']);
$companies	= $dbquery->real_escape_string($_REQUEST['companies']);
$investment	= $dbquery->real_escape_string($_REQUEST['investment']);

//$image1 = $_REQUEST['fld_image1'];
$date = date("Y-m-d h:i:s");
$password = rand(1,9).rand(11,99).rand(111,999);

///-----------------image update start--------------------
 $fld_image = $_FILES['fld_image']['name'];  
   $fileTmp = $_FILES['fld_image']['tmp_name'];

if($_FILES['fld_image']['name']!='')
		{	
			$uplodFileName = $_FILES['fld_image']['name'];
			
			$ext = pathinfo($uplodFileName, PATHINFO_EXTENSION);
		
			$namefile = "win".rand(1,9999).time().".".$ext;
		} 
		else {
			$namefile = $_POST['fld_image1'];
		 }
       move_uploaded_file($fileTmp,"../images/company/".$namefile);
	   
	///-----------------image update end--------------------   



///-----------------image update start--------------------
 $fld_image2 = $_FILES['fld_image2']['name'];  
   $fileTmp2 = $_FILES['fld_image2']['tmp_name'];

if($_FILES['fld_image2']['name']!='')
		{	
			$uplodFileName = $_FILES['fld_image2']['name'];
			
			$ext = pathinfo($uplodFileName, PATHINFO_EXTENSION);
		
			$namefile2 = "win".rand(1,9999).time().".".$ext;
		} 
		else {
			$namefile2 = $_POST['fld_image21'];
		 }
       move_uploaded_file($fileTmp2,"../images/company/".$namefile2);
	   
	///-----------------image update end--------------------   


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



 if($company_name!="")
{
	   
		if($companyid > 0)
		{
			$sqlUpdate = "UPDATE tbl_company set  
			       fld_email ='".$email."',
				   fld_name = '".$name."',
				   fld_company_name ='".$company_name."',
				   fld_china_exp_name='".$china_exp_name."',
				   fld_international_certification ='".$international_certification."',
				   
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
				   fld_district='".$district."',
				   fld_city ='".$city."',
				   fld_state ='".$state."',
				   fld_pincode ='".$pincode."',
				   fld_country ='".$country."',
				   fld_image ='".$namefile."',
				    fld_image2 ='".$namefile2."',
				   fld_mtitle ='".$mtitle."',
				   fld_mdesc ='".$mdesc."',
				   fld_mkeywords ='".$mkeywords."'
				   where fld_id='".$companyid."'";
				 
			$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
			$updts = 2;
		}
		else
		{
 
			         $sqlInsert = "INSERT INTO tbl_company SET
			       fld_email ='".$email."',
				   fld_password ='".md5($password)."',
				   fld_name = '".$name."',
				   fld_company_name ='".$company_name."',
				   fld_china_exp_name='".$china_exp_name."',
				   fld_international_certification ='".$international_certification."',
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
				   fld_image ='".$namefile."',
				    fld_image2 ='".$namefile2."',
				   fld_fax ='".$fax."',
				   fld_district='".$district."',
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
		 
		
		 
		
		 
		 
		if($updts > 0)
		{
			
				echo "<script>document.location.href='company-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
				exit;


 
		}
	
}



##Show Detail
$sqlDisp = " SELECT * FROM tbl_company WHERE fld_id='$companyid'";
$rsDisp = $dbquery->query($sqlDisp) or die("Display Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp = $rsDisp->fetch_object();
	
	
	
  }


//$getcatstree = getPerentsUniversity($dbquery,0);
$selectedPage = 3;
$ceditor = 1;
?>

<script>
	

function citylist()
{	 
var state = $("#state").val();
	
	 $.ajax({
			type: "post",
			data: {state:state},
			url: "ajaxcity.php", 
			success: function(result){
				 $("#resultcity").html(result);
				 var chk = $.trim(result);
				
				
				
			}		 
	});
					
	return false;
	

}

function districtlist()
{	

var city = $("#city").val();
	
	 $.ajax({
			type: "post",
			data: {city:city},
			url: "ajaxdistrict.php", 
			success: function(result){
				 $("#resultdistrict").html(result);
				 var chk = $.trim(result);
				
				
				
			}		 
	});
					
	return false;
	

}

</script>



<?php include('common/admheader.php'); ?>



	<section class="middlepart">
		<div class="leftsection"><div class="left-panel"></div></div>
		<div class="right-panel">
			<aside class="rightsection iframe dboard">
				<h2><?php if($companyid=="") { echo "Add"; } else { echo "Edit"; } ?> Company <?php if($messageText!="") { ?>
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
						<?php /*?><li>
						<label>Email:</label>
						<input type="text" name="email" id="email" value="<?php echo $rowDisp->fld_email;?>" size="60" placeholder="Email" required onblur="return emailChk();" <?php if($companyid !=""){ echo 'readonly="readonly"'; }?>  /> 
						</li><?php */?>
						 <?php /*?><li>
						<label>Contact Person Name:</label>
						<input type="text" name="name" id="name" value="<?php echo $rowDisp->fld_name;?>" size="60" placeholder="Conctact Person" required /> 
                        <span id="emailerror"></span>
						</li><?php */?>
                         <li>
						<label>Company Name:</label>
						<input type="text" name="company_name" id="company_name" value="<?php echo $rowDisp->fld_company_name;?>" size="60" placeholder="Company Name:" required /> 
						</li>
						

						<?php /*?><li>
						<label>China Exp Name:</label>
						
						 <select  name="china_exp_name" id="china_exp_name">
                          <option value="">Select China Exp Name</option>
                         <?php $sql = "SELECT fld_id, fld_company_name FROM tbl_exp_section order by fld_company_name ";
                              $rsQuery =$dbquery->query($sql);
                              while($rowData = $rsQuery->fetch_object())
                              {
                         ?>
                         
                          <option value="<?php echo $rowData->fld_id;?>"  <?php echo ($rowData->fld_id==$rowDisp->fld_china_exp_name) ? "selected" : "";?> ><?php echo $rowData->fld_company_name;?></option>
                      
                         <?php }?>
                          </select>
						</li><?php */?>

                       
						<?php /*?><li>
						<label>International certification:</label>
						<input type="text" name="international_certification" id="international_certification" value="<?php echo $rowDisp->fld_international_certification;?>" size="60" placeholder="International certification" /> 
						</li><?php */?>
					  
                        <?php /*?><li>
						<label>Website Url:</label>
						<input type="text" name="website_url" id="website_url" value="<?php echo $rowDisp->fld_website_url;?>" size="60" placeholder="Website Url" required /> 
						</li><?php */?>
						
                       
                       <li>
							<label> Logo Image:</label>
                            
                            <input type="hidden" name="fld_image1" id="fld_image1" value="<?php echo $rowDisp->fld_image;?>"  />
							<input type="file" name="fld_image" id="fld_image" value=""  /> 
							<?php if($companyid!="") {  ?>
							<img height="100" width="100" src="../images/company/<?php echo $rowDisp->fld_image;?>" />
								<br />
								<br />
								<?php }?>
								
						</li>
                        
                         <li>
							<label> Logo Image:</label>
                            
                            <input type="hidden" name="fld_image21" id="fld_image21" value="<?php echo $rowDisp->fld_image2;?>"  />
							<input type="file" name="fld_image2" id="fld_image2" value=""  /> 
							<?php if($companyid!="") {  ?>
							<img height="100" width="100" src="../images/company/<?php echo $rowDisp->fld_image2;?>" />
								<br />
								<br />
								<?php }?>
								
						</li>	
						
                         <li>
						<label>Description:</label>
					
                       <textarea  name="desc" id="desc" rows="10" cols="30" style="width:400px; height:100px;" class="textarea" ><?php echo $rowDisp->fld_desc;?>
                       </textarea>
							</li>
							
						 <?php /*?><li>
						<label>Business Type:</label>
                        <?php $i =1; foreach($arrBusinessType as $key=>$value){?>
                        <input type="checkbox" name="business_type[]" id="business_type[]"  value="<?php echo $key;?>" <?php $arr = explode(",",$rowDisp->fld_business_type); 
						echo (in_array($key,$arr))? "checked" : "";?>  /> <?php echo $value;?>
                        <?php if($i%3==0){ echo "<br>";}?>
                        <?php $i++; }?>
						
						</li><?php */?>	
                        <li>
						<label>Tax Number.:</label>
						<input type="text" name="phone" id="phone" value="<?php echo $rowDisp->fld_phone;?>" size="60" placeholder="Tax Number" required /> 
						</li>
                        <li>
						<label>Buisness Model:</label>
						<input type="text" name="mobile" id="mobile" value="<?php echo $rowDisp->fld_mobile;?>" size="60" placeholder="Buisness Model" required /> 
					  </li>
                      
                        <li>
						<label>Category:</label>
						<input type="text" name="address" id="address" value="<?php echo $rowDisp->fld_address;?>" size="60" placeholder="Category" required /> 
						</li>
                         <li>
						<label>Main Products:</label>
						<input type="text" name="fax" id="fax" value="<?php echo $rowDisp->fld_fax;?>" size="60" placeholder="Main Products"  /> 
					  </li>
						 <?php /*?><li>
						<label>Province:</label>
						 
                        <select name="state" id="state" onchange="return citylist();" >
                        <option value="">Select Province</option>
                        <?php foreach($arrProChina as $key=>$val){?> 
                        <option value="<?php echo $key;?>" <?php echo ($key== $rowDisp->fld_state)? "selected" : "";?>> <?php echo $val;?></option>
                        <?php }?>
                        </select>
						</li><?php */?>

                        <?php /*?><li id="resultcity">
                        	<?php if($companyid!="") {  ?>
                        	<label>City:</label>
								<select name="city" id="city" onchange="return district();">
								<option value="">Select City</option>
								<?php $sqlcat = "SELECT * FROM tbl_city where fld_provinceid='$state' and fld_status='1' order by fld_city";
								  $rsCat = $dbquery->query($sqlcat);
								  while($rowCat = $rsCat->fetch_object())
								  {
								?>
								<option value="<?php echo $rowCat->fld_id; ?>" <?php echo ($rowCat->fld_id==$rowDisp->fld_city) ? "selected" : "";?> ><?php echo $rowCat->fld_city; ?> </option>
								<?php }?>
								</select>
						    <?php }?>
							</li><?php */?>
                       
                        <li>
                        	  <?php /*?><li id="resultdistrict">
                        	<?php if($companyid!="") {  ?>
                        	<label>District:</label>
								<select name="district" id="district" >
								<option value="">Select District</option>
								<?php $sqlcat = "SELECT * FROM tbl_district where fld_cityid='$city' and fld_status='1' order by fld_district";
								  $rsCat = $dbquery->query($sqlcat);
								  while($rowCat = $rsCat->fetch_object())
								  {
								?>
								<option value="<?php echo $rowCat->fld_id; ?>" <?php echo ($rowCat->fld_id==$rowDisp->fld_district) ? "selected" : "";?> ><?php echo $rowCat->fld_district; ?> </option>
								<?php }?>
								</select>
						    <?php }?>
							</li><?php */?>
                       
                        <li>
                          <label>Ownership:</label>
						<input type="text" name="pincode" id="pincode" value="<?php echo $rowDisp->fld_pincode;?>" size="60" placeholder="Ownership" required /> 
						</li>
                        <?php /*?><li>
						<label>Country:</label>
                        <select name="country" id="country" required>
                        <?php foreach($arrCountryChina as $key=>$val){?> 
                        <option value="<?php echo $key;?>" <?php echo ($key== $rowDisp->fld_country)? "selected" : "";?>> <?php echo $val;?></option>
                        <?php }?>
                        </select>
						
						</li><?php */?>
                  
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
 

