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
 
 	$sqlupd = " UPDATE tbl_administrator set fld_email='$adminemail', fld_phone='$phone'  WHERE fld_id='".$_SESSION['AID']."'";  
	$rsupd = $dbquery->query($sqlupd) or die("General Settings Error:" . $dbquery->error);
	$messageText = " Settings successfully Updated!";
}


##For Display
$sqlDisp = " SELECT fld_email,fld_phone FROM tbl_administrator WHERE fld_id='".$_SESSION['AID']."' ";
$rsDisp = $dbquery->query($sqlDisp) or die("Settings Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp 	= $rsDisp->fetch_object();
	$Adminemail = $rowDisp->fld_email;
	$Phone		= $rowDisp->fld_phone;
 }


$showdatepicker = 1;
$selectedPage = 10;
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
						<!--<li>
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
