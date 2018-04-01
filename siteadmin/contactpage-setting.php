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
	

	$email = $dbquery->real_escape_string($_REQUEST['email']);
	$phone = $dbquery->real_escape_string($_REQUEST['phone']);
	$address = $dbquery->real_escape_string($_REQUEST['address']);
	$map = $dbquery->real_escape_string($_REQUEST['map']);
	$ids = $_REQUEST['ids'];
	
 
 	$sqlupd = " UPDATE tbl_contactpage set
	 email		='$email',
	 phone		='$phone',
	 address	='$address',
	 map  ='$map'
 	 WHERE id='$ids'";  
	$rsupd = $dbquery->query($sqlupd) or die("General Settings Error:" . $dbquery->error);
	$messageText = " Record successfully Updated!";
}


##For Display
 $sqlDisp = " SELECT * FROM tbl_contactpage  ";
$rsDisp = $dbquery->query($sqlDisp) or die("Settings Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp 	= $rsDisp->fetch_object();
	 $email = $rowDisp->email;
	$phone		= $rowDisp->phone;
	$address		= $rowDisp->address;
	$map		= $rowDisp->map;
	 $id        = $rowDisp->id;
  }


 $showdatepicker = 1;
$selectedPage = 10;
?>





<?php include('common/admheader.php'); ?>



	<section class="middlepart">
		<div class="leftsection"><div class="left-panel"></div></div>
		<div class="right-panel">
			<aside class="rightsection iframe dboard">
				<h2>Update Contact Us Page 
				
			 
				<?php if($messageText!="") { ?>
				<div id="categoryDeleted" class="alert alert-success" style="text-align:center;"><div <?php echo $headingcls; ?>><?php echo $messageText; ?></div></div><?php } ?>
				
			  </h2>
				<div class="divider"></div>
				<div class="form">
				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					 <input type="hidden" name="ids" id="ids" value="<? echo $id;?>"  />
					<ul>
					
						<li>
							<label> Email</label>
								<textarea name="email" type="text" rows="3" cols="30" style="border:dotted 1px;" > <?php echo $email; ?> </textarea>
						</li>
						
							<li>
							<label>Phone</label>
								<textarea name="phone" type="text" rows="3" cols="30" style="border:dotted 1px;" ><?php echo $phone; ?></textarea>
						</li>
							
						<li>
							<label>Address</label>
							<textarea name="address" id="address" rows="3" cols="30" style="border:dotted 1px;" ><?php echo $address; ?></textarea>
					  </li>
						<li>
							<label>Map</label>
							<textarea name="map" id="map" rows="10" cols="40"  style="border:dotted 1px;"><?php echo $map; ?></textarea>
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
