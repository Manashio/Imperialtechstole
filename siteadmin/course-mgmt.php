<?php
	include("../config/config.inc.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$Pagename = "Course Management";

$pageid = $_REQUEST['pageid'];
$msgupd = $_REQUEST['msgupd'];
$keywordsearch = $_REQUEST['keywordsearch'];

$keysearch = "";
$headingcls = 'class="correctmsg"';

if($pageid=="" || $pageid==0)
{
	$pageid = 1;
}

if($msgupd==1) { $successmsg = "Course successfully Added!"; }
elseif($msgupd==2) { $successmsg = "Course successfully edited!"; }
elseif($msgupd==3) { $successmsg = "Course status successfully changed!"; }
elseif($msgupd==4) { $successmsg = "Course deleted Successfully!"; }

##Search Keyword
$keysearch = " WHERE (fld_status='Inactive' or fld_status='Active')";

if($keywordsearch!="")
{
	$keysearch .= " AND (fld_name LIKE '%$keywordsearch%' OR fld_name='$keywordsearch')";
}


##PagePer Show
if($pagePerShow=="")
{
	$pagePerShow=50;
}
$RecsToShow = $pagePerShow;
$startPage = ($pageid-1)*$RecsToShow;
$sqlPgn = "SELECT count(*) as cnt FROM tbl_courses $keysearch";
$rsPgn = $dbquery->query($sqlPgn) or die('Pagination Error: ' . $dbquery->error);
$rowPgn = $rsPgn->fetch_object();
$cntPgn = $rowPgn->cnt;
if($cntPgn > 0)
{
	$totRecord = $cntPgn;
	$TotPageCnt = ceil($totRecord/$RecsToShow);
}
else
{
	$TotPageCnt = 0;
	$totRecord = 0;
	$pageid = 0;
}

##Show the page
$pageDropDown = '';
$arrPageToShow=array(1=>50, 2=>100, 3=>150, 4=>200, 5=>250);
foreach($arrPageToShow as $key=>$value)
{
	$selectpage='';
	if($arrPageToShow[$key]==$pagePerShow && $pagePerShow!="")
	{
		$selectpage='selected="selected"';
	}

	$pageDropDown.='<option value="'. $arrPageToShow[$key] .'" '. $selectpage .'>'. $arrPageToShow[$key] .'</option>';
}


$sqlMgmt = "SELECT * FROM tbl_courses $keysearch ORDER BY fld_id DESC,fld_name ASC LIMIT $startPage, $RecsToShow";
$rsMgmt = $dbquery->query($sqlMgmt) or die('Error: ' . $dbquery->error);
$numMgmt = $rsMgmt->num_rows;



$magnificpopup=1;
$selectedPage = 3;
?>



<?php include("common/admheader.php"); ?>
<script type="text/javascript">
window.onload = function() {
  document.getElementById("search").focus();
};


</script>
 
 	<!-- middlepart start -->
	<section class="middlepart">
		<div class="right-panel">
			<aside class="rightsection">
			<h2><?php echo $Pagename; ?> </h2>
			<?php if($successmsg!="") { ?><div id="categoryDeleted" class="alert alert-success" style="text-align:center;"><div <?php echo $headingcls; ?>><?php echo $successmsg; ?></div></div><?php } ?>
				<ul class="topbar mbottom1">
				<form name="frmgeneralinfo" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
				
				<li><input type="text" name="keywordsearch" class="search" value="<?php echo $keywordsearch; ?>" autofocus /></li>

					<li>Goto : </li>
						<li>
							<select name="pageid">
								<?php
								$addText = "";
								for($i=1;$i<=$TotPageCnt;$i++)
								{
									$addText = "";
									if($i==$pageid) { $addText = "selected"; }
								?>
									<option value="<?php echo $i; ?>" <?php echo $addText; ?>><?php echo $i; ?></option>
								<?php
								}
								?>
							</select>
						</li>
						<li>
								<input type="submit" value="Go" class="submit1" />
						</li>
						<li><span class="page" > Page <?php echo $TotPageCnt;?> / <?php echo $totRecord;?> &nbsp; Total Records : <?php echo $totRecord;?></span> </li>
						</form>
					</ul>
					<div class="addfiles"><a href="course.php?pageid=<?php echo $pageid; ?>"><i class="fa fa-plus-circle white"></i>Add Course</a></div>
					<div class="clr"></div>

					<div class="tablebox table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr class="th-heading">
									<th width="5%">S. No</th>
									<th width="10%">Brochures / Leaflet</th>
									<th width="10%">Title</th>
									<th width="12%">Course Category	</th>
									<th width="12%">University</th>
									<th width="10%">Duration</th>
									<th width="10%">Fee</th>
									<th width="12%">Mode Of Delhivery</th>
<!--									<th width="12%">Eligibility</th>
-->								 
 									<th width="6%" class="text-center">Status</th>
									<th width="15%" class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$sr = 1;
							if($numMgmt > 0)
							{
								while($rowMgmt = $rsMgmt->fetch_object())
								{
									$courseid = $rowMgmt->fld_id;
  									$status = $rowMgmt->fld_status;
																											
									if($status=='Active')
									{
										$sts='Inactive';
										$showsts = '<a href="course-del.php?courseid='.$courseid.'&pageid='.$pageid.'&status='.$sts.'&task=chk" title="active" class="activeicon"><i class="fa fa-check-circle green"></i></a>';
									}
									else
									{
										$sts='Active';
										$showsts = '<a href="course-del.php?courseid='.$courseid.'&pageid='.$pageid.'&status='.$sts.'&task=chk" title="inactive" class="inactive"><i class="fa fa-times-circle red"></i></a>';
									}
							 
									
									?>
 								<tr>
									<td><?php echo $sr; ?></td>
							<td><a target="_blank" href="../images/upload_leaf/<?php echo $rowMgmt->fld_uploadfile; ?>">
							<?php $imgext =explode(".",$rowMgmt->fld_uploadfile);  ?>
							<img height="80" width="80" src="../images/<?php if($imgext[1]=='pdf'){ echo "pdf-icon.png";}elseif($imgext[1]=='doc' || $imgext[1]=='docx' ){ echo "doc-icon.png";}else{ echo "image-icon.png";} ?>" /></a></td>

									<td><?php echo $rowMgmt->fld_name; ?></td>
									<td><?php $catArray=GetCategoryName($dbquery, $rowMgmt->fld_catid); foreach($catArray as $catname){ echo $catname."<br>";} ?></td>
									<td><?php echo fnUniversityTitle($dbquery, $rowMgmt->fld_universityid);?></td>
									<td><?php echo $rowMgmt->fld_duration; ?></td>
									<td><?php echo $rowMgmt->fld_fee; ?></td>
									<td><?php echo $rowMgmt->fld_modeofdelhivery; ?></td>
<!--									<td><?php echo substr(nl2br($rowMgmt->fld_eligibilityinfo),0,50); ?></td>
-->										

									<td class="text-center"><?php echo $showsts; ?></td>
									<td class="text-center">
										<a class="edit-table fancybox fancybox.iframe" title="view Details" href="course-details.php?courseid=<?php echo $courseid; ?>&pageid=<?php echo $pageid; ?>"><img src="images/detail.png" /></a> 
										<a class="edit-table" data-toggle="tooltip" data-original-title="Edit" title="edit" href="course.php?courseid=<?php echo $courseid; ?>&pageid=<?php echo $pageid; ?>"><i class="fa fa-edit fa-lg"></i></a>	
										<a href="course-del.php?courseid=<?php echo $courseid; ?>&pageid=<?php echo $pageid; ?>&task=del" onclick="return confirmDelete();" class="edit-table" title="delete"> <span id="<?=$sr?>"  data-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash"></i></span></a>
									</td>
								</tr>
								<?php
								$sr++;
									}
									
								}
								else
								{
								?>
									<tr><td colspan="10" class="notfound" align="center">Sorry, Course Not Found!</td></tr>
								<?php
								}
								?>
								<!--<tr><td colspan="10"><a href="#" class="b-btn">Update</a> <a href="#" class="b-btn">Cancel</a></td></tr>-->
							</tbody>
						</table>
					</div>
				</aside>
			</div>
		</section>






<?php include("common/admfooter.php"); ?>