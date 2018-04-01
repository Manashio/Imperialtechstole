<?php
	include("../config/config.inc.php");


$courseid = $_REQUEST['courseid'];
if($courseid=="")
{
	echo "<script>document.location.href='category-mgmt.php';</script>";
	exit;
}


$sqlMgmt = "SELECT * FROM tbl_courses WHERE fld_id='$courseid'";
$rsMgmt = $dbquery->query($sqlMgmt) or die('Error: ' . $dbquery->error);
$numMgmt = $rsMgmt->num_rows;
$courseDetail = $rsMgmt->fetch_object();

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
									<td colspan="2"><p><strong>Upload Brochures / leaflet: </strong></p><a <?php echo $courseDetail->fld_uploadfile!='
									' ? '"target="_blank"' : ''?> href="upload_leaf/<?php echo $courseDetail->fld_uploadfile?>"><?php echo $courseDetail->fld_uploadfile?></a></td>
								  </tr>
								   <tr>
									<td colspan="2"><p><strong>Category: </strong></p><?php echo getCategoryNameByID($dbquery, $courseDetail->fld_catid); ?></td>
								  </tr>
								     <tr>
									<td colspan="2"><p><strong>University: </strong></p><?php echo fnUniversityTitle($dbquery, $courseDetail->fld_universityid); ?></td>
								  </tr>
								  
								  <tr>
									<td colspan="2"><p><strong>Title: </strong></p><?php echo $courseDetail->fld_name!="" ? $courseDetail->fld_name :  'Not Mentioned';  ?></td>
								  </tr>
								  <tr>
									<td colspan="2"><p><strong>Fee: </strong></p><?php echo $courseDetail->fld_fee!="" ? $courseDetail->fld_fee :  'Not Mentioned'; ?></td>
								  </tr>
								  <tr>
									<td colspan="2"><p><strong>Duration: </strong></p><?php echo $courseDetail->fld_duration!="" ? $courseDetail->fld_duration :  'Not Mentioned'; ?></td>
								  </tr>
								  <tr>
									<td colspan="2"><p><strong>Mode Of Delhivery: </strong></p><?php echo $courseDetail->fld_modeofdelhivery!="" ? $courseDetail->fld_modeofdelhivery :  'Not Mentioned'; ?></td>
								  </tr>
								  <tr>
									<td colspan="2"><p><strong>Course Hightlight: </strong></p><?php echo $courseDetail->fld_city!="" ? $courseDetail->fld_city :  'Not Mentioned'; ?></td>
								  </tr>
								<tr>
									<td colspan="2"><p><strong>Benifits: </strong></p><?php echo $courseDetail->fld_benifits!="" ? $courseDetail->fld_benifits :  'Not Mentioned'; ?></td>
								  </tr>

								  <tr>
									<td colspan="2"><p><strong>Eligibility: </strong></p><?php echo $courseDetail->fld_eligibilityinfo!="" ? $courseDetail->fld_eligibilityinfo :  'Not Mentioned'; ?></td>
								  </tr>
								  <tr>
									<td colspan="2"><p><strong>Curriculum: </strong></p><?php echo $courseDetail->fld_curriculum!="" ? $courseDetail->fld_curriculum :  'Not Mentioned'; ?></td>
								  </tr>
								
								 
								   
								</tbody>
						</table>
						
					</div>
					</aside>
				</div>
			</section>
		</body>
	</html>
