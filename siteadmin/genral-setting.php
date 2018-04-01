<?php 
	include("../config/config.inc.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$messageText="";

if(isset($_REQUEST['cmdsubmit']) && $_REQUEST['cmdsubmit']=="Update")
{
	$adminemail = $dbquery->real_escape_string($_REQUEST['adminemail']);
	$phone = $_REQUEST['phone'];

	$facebook = $dbquery->real_escape_string($_REQUEST['facebook']);
	$twitter = $dbquery->real_escape_string($_REQUEST['twitter']);
	$linkedin = $dbquery->real_escape_string($_REQUEST['linkedin']);
	$googleplus = $dbquery->real_escape_string($_REQUEST['googleplus']);
	$companyname = $dbquery->real_escape_string($_REQUEST['companyname']);
	$address = $dbquery->real_escape_string($_REQUEST['address']);
	$contactnumber = $dbquery->real_escape_string($_REQUEST['contactnumber']);
	    $map = $_REQUEST['map'];
	
	 
 
 	$sqlupd = " UPDATE tbl_administrator set
	 fld_email		='$adminemail',
	 fld_phone		='$phone',
	 fld_facebook	='$facebook',
	 fld_twitter	='$twitter',
	 fld_linkedin	='$linkedin',
	 fld_googleplus	='$googleplus',
	 fld_company_name    ='$companyname',
	 fld_address        ='$address',
	 fld_contact_number  ='$contactnumber',
	 fld_map  = '$map'
 	 WHERE fld_id='".$_SESSION['AID']."'";  
	$rsupd = $dbquery->query($sqlupd) or die("General Settings Error:" . $dbquery->error);
	$messageText = " Settings successfully Updated!";
}


##For Display
$sqlDisp = " SELECT * FROM tbl_administrator WHERE fld_id='".$_SESSION['AID']."' ";
$rsDisp = $dbquery->query($sqlDisp) or die("Settings Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp 	= $rsDisp->fetch_object();
	$Adminemail = $rowDisp->fld_email;
	$Phone		= $rowDisp->fld_phone;
	$Facebook		= $rowDisp->fld_facebook;
	$Twitter		= $rowDisp->fld_twitter;
	$Linkedin		= $rowDisp->fld_linkedin;
	$GooglePlus		= $rowDisp->fld_googleplus;
	$companyname    = $rowDisp->fld_company_name;
	 $address        = $rowDisp->fld_address;
	 $contactnumber  = $rowDisp->fld_contact_number;
	 $map  = $rowDisp->fld_map;
  }


$showdatepicker = 1;
$selectedPage = 6;
$ceditor = 1;
?>





<?php include('common/admheader.php'); ?>



	<section class="middlepart">
		<div class="leftsection"><div class="left-panel"></div></div>
		<div class="right-panel">
			<aside class="rightsection iframe dboard">
				<h2>Update General Settings 
				
			 
				<?php if($messageText!="") { ?><div id="categoryDeleted" class="alert alert-success" style="text-align:center;"><div <?php echo $headingcls; ?>><?php echo $messageText; ?></div></div><?php } ?>
				
				</h2>
				<div class="divider"></div>
				<div class="form">
				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<ul>
						<li>
							<label>Admin Email</label>
							<input name="adminemail" type="text" size="60" value="<?php echo $Adminemail; ?>" placeholder="Admin Email">
						</li>
						
							<li>
							<label>Phone</label>
							<input name="phone" type="text" size="60" value="<?php echo $Phone; ?>" placeholder="Admin Phone">
 						</li>
							
							<li>
							<label>Facebook</label>
							<input name="facebook" type="text" size="60" value="<?php echo $Facebook; ?>" placeholder="Facebook">
 						</li>
						
							
							<li>
							<label>Twitter</label>
							<input name="twitter" type="text" size="60" value="<?php echo $Twitter; ?>" placeholder="Twitter">
 						</li>
							
							<li>
							<label>Linkedin</label>
							<input name="linkedin" type="text" size="60" value="<?php echo $Linkedin; ?>" placeholder="Linkedin">
 						</li>
						
							<li>
							<label>Google Plus</label>
							<input name="googleplus" type="text" size="60" value="<?php echo $GooglePlus; ?>" placeholder="Google Plus">
 						</li>
<li>
							<label>Address</label>
							<textarea name="address" id="address" rows="3" cols="50" style="border:dotted 1px;" ><?php echo $address; ?></textarea>
							</li>

						<!--<li>
							<label>Company Name</label>
							<input type="text" name="companyname" id="companyname"  value="<?php echo $companyname; ?>" >
 						</li>
						<li>
							<label>Address</label>
							<textarea name="address" id="address" rows="3" cols="50" style="border:dotted 1px;" ><?php echo $address; ?></textarea>
							</li>
						<li>
							<label>Contact Number</label>
							<textarea name="contactnumber" id="contactnumber" rows="3" cols="30"  style="border:dotted 1px;"><?php echo $contactnumber; ?></textarea>
 						</li>
						
						<li>
							<label>Google Map</label>
							
							<textarea name="map" id="map" rows="10" cols="50"  style="border:dotted 1px;"><?php echo $map; ?></textarea>
							<script>
						CKEDITOR.replace( 'map1', {
						width: 550
						
						
						} );
						</script>
 						</li>
						<li>
							<label>Shipping Mark up</label>
							<input name="shippingmarkup" type="text" size="60" value="<?php echo $shippingmarkup; ?>" placeholder="Mark Up">
						</li>-->
						<li>
							<label></label>
							<input name="cmdsubmit" type="submit" value="Update">
						</li>
					</ul>
					</form>
				</div>
			</aside>
		</div>
	</section>


<?php include("common/admfooter.php"); ?>
