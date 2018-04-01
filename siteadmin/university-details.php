<?php
	include("../config/config.inc.php");


$universitystid = $_REQUEST['universityid'];
if($universitystid=="")
{
	echo "<script>document.location.href='category-mgmt.php';</script>";
	exit;
}


$sqlMgmt = "SELECT * FROM tbl_university WHERE fld_id='$universitystid'";
$rsMgmt = $dbquery->query($sqlMgmt) or die('Error: ' . $dbquery->error);
$numMgmt = $rsMgmt->num_rows;
$univerDetail = $rsMgmt->fetch_object();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<!-- Css file here -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/responsivenav.css" rel="stylesheet">
<link href="css/layout.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>


	<body>
		<section class="middlepart" style="margin:0 auto !important;">
			<div class="leftsection"><div class="left-panel"></div></div>
				<div class="right-panel" style=" padding-top:5px;">
					<aside class="rightsection iframe" style="width:100%; margin:0 auto; float:none;">
						<h2>University Details &raquo; <?php echo $ctitle; ?></h2>
						<div class="divider"></div>
						<div class="tablebox table-responsive">
						<table class="table table-bordered table-hover">
							<tbody>
								 
								  <tr>
									<td colspan="2"><p><strong>Title: </strong></p><?php echo $univerDetail->fld_name!="" ? $univerDetail->fld_name :  'Not Mentioned';  ?></td>
								  </tr>
								  <tr>
									<td colspan="2"><p><strong>Contact Name: </strong></p><?php echo $univerDetail->fld_contactname!="" ? $univerDetail->fld_contactname :  'Not Mentioned'; ?></td>
								  </tr>
								  <tr>
									<td colspan="2"><p><strong>Address: </strong></p><?php echo $univerDetail->fld_address!="" ? $univerDetail->fld_address :  'Not Mentioned'; ?></td>
								  </tr>
								  <tr>
									<td colspan="2"><p><strong>State: </strong></p><?php echo $univerDetail->fld_state!="" ? $univerDetail->fld_state :  'Not Mentioned'; ?></td>
								  </tr>
								  <tr>
									<td colspan="2"><p><strong>City: </strong></p><?php echo $univerDetail->fld_city!="" ? $univerDetail->fld_city :  'Not Mentioned'; ?></td>
								  </tr>
								<tr>
									<td colspan="2"><p><strong>Postal Code: </strong></p><?php echo $univerDetail->fld_zipcode!="" ? $univerDetail->fld_zipcode :  'Not Mentioned'; ?></td>
								  </tr>

								  <tr>
									<td colspan="2"><p><strong>Email: </strong></p><?php echo $univerDetail->fld_email!="" ? $univerDetail->fld_email :  'Not Mentioned'; ?></td>
								  </tr>
								  <tr>
									<td colspan="2"><p><strong>Mobile: </strong></p><?php echo $univerDetail->fld_phone!="" ? $univerDetail->fld_phone :  'Not Mentioned'; ?></td>
								  </tr>
								  <tr>
									<td colspan="2"><p><strong>Phone: </strong></p><?php echo $univerDetail->fld_mobile!="" ? $univerDetail->fld_mobile :  'Not Mentioned'; ?></td>
								  </tr>
								  <tr>
									<td colspan="2"><p><strong>About University: </strong></p><?php echo $univerDetail->fld_aboutuniv!="" ? $univerDetail->fld_aboutuniv :  'Not Mentioned'; ?></td>
								  </tr>
								  
								   
								</tbody>
						</table>
						
					</div>
					</aside>
				</div>
			</section>
		</body>
	</html>
