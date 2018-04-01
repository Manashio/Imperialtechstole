<?php
	include("../config/config.inc.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$Pagename = "Subcategory Management";

$parentid = $_REQUEST['parentid'];
$pageid = $_REQUEST['pageid'];
$catid = $_REQUEST['catid'];
$msgupd = $_REQUEST['msgupd'];
$keywordsearch = $_REQUEST['keywordsearch'];

$keysearch = "";
$headingcls = 'class="correctmsg"';

if($pageid=="" || $pageid==0)
{
	$pageid = 1;
}

if($msgupd==1) { $successmsg = "Sub category successfully Added!"; }
elseif($msgupd==2) { $successmsg = "Sub category successfully edited!"; }
elseif($msgupd==3) { $successmsg = "Sub category status successfully changed!"; }
elseif($msgupd==4) { $successmsg = "Sub category deleted Successfully!"; }

##Search Keyword
$keysearch = " WHERE fld_parentid='$parentid' ";

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
$sqlPgn = "SELECT count(*) as cnt FROM tbl_category $keysearch";
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


$sqlMgmt = "SELECT * FROM tbl_category $keysearch ORDER BY fld_name ASC LIMIT $startPage, $RecsToShow";
$rsMgmt = $dbquery->query($sqlMgmt) or die('Error: ' . $dbquery->error);
$numMgmt = $rsMgmt->num_rows;



$magnificpopup=1;
$selectedPage = 1;


// Main Cat

$sqlMgmt2 = "SELECT * FROM tbl_category where fld_id='$parentid'";
$rsMgmt2 = $dbquery->query($sqlMgmt2) or die('Error: ' . $dbquery->error);
$getMainCat = $rsMgmt2->fetch_array();
$mainCategory  = $getMainCat['fld_name'];
 

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
			<h2><?php echo $Pagename; ?> (<?php echo $mainCategory;?>)</h2>
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
					<div class="addfiles"><a href="subsubcategory.php?pageid=<?php echo $pageid; ?>&parentid=<?php echo $_REQUEST['parentid'];?>"><i class="fa fa-plus-circle white"></i>Create Sub category</a></div>
					<div class="clr"></div>

					<div class="tablebox table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr class="th-heading">
									<th width="5%">S. No</th>
									
									<th width="25%">Category</th>
                                     <th width="20%">Image</th>
									<th width="30%">Parent Category</th>
                                   
									<!--<th width="10%" class="text-center">Set Featured</th>-->
									<th width="10%" class="text-center">Status</th>
									<th width="10%" class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$sr = 1;
							if($numMgmt > 0)
							{
								while($rowMgmt = $rsMgmt->fetch_object())
								{
									$catid = $rowMgmt->fld_id;
									$parentstid = $rowMgmt->fld_parentid;
 									$catname = $rowMgmt->fld_name;
 									$status = $rowMgmt->fld_status;
									$image = $rowMgmt->fld_image;
 									$featured = $rowMgmt->fld_featured;
 									$catimage = $rowMgmt->fld_catimage;
																											
									if($status=='Active')
									{
										$sts='Inactive';
										$showsts = '<a href="subsubcategory-del.php?catid='.$catid.'&parentid='.$parentid.'&pageid='.$pageid.'&status='.$sts.'&task=chk" title="active" class="activeicon"><i class="fa fa-check-circle green"></i></a>';
										
									}
									else
									{
										$sts='Active';
										$showsts = '<a href="subsubcategory-del.php?catid='.$catid.'&parentid='.$parentid.'&pageid='.$pageid.'&status='.$sts.'&task=chk" title="inactive" class="inactive"><i class="fa fa-times-circle red"></i></a>';
									}
							 
																											
									if($featured=='1')
									{
										$featuredsts='0';
										$showfeatured = '<a href="subsubcategory-del.php?catid='.$catid.'&parentid='.$parentid.'&pageid='.$pageid.'&featured='.$featuredsts.'&task=set" title="active" class="activeicon"><i class="fa fa-check-circle green"></i></a>';
										
									}
									else
									{
										$featuredsts='1';
										$showfeatured = '<a href="subsubcategory-del.php?catid='.$catid.'&parentid='.$parentid.'&pageid='.$pageid.'&featured='.$featuredsts.'&task=set" title="inactive" class="inactive"><i class="fa fa-times-circle red"></i></a>';
									}
							 
									?>
									
 								<tr>
									<td><?php echo $sr; ?></td>
									
									<td><?php echo $catname; ?></td>
                                    	<td><img src="../images/category/<?php echo $image; ?>" width="100" height="100" ></td>
									<td><a href="subcategory-mgmt.php?parentid=<?php echo $_GET['parentid'];?>&pageid=<?php echo $_GET['pageid'];?>"><?php echo $mainCategory; ?></a></td>
									<!--<td class="text-center"><?php echo $showfeatured; ?></td>-->
									<td class="text-center"><?php echo $showsts; ?></td>
									<td class="text-center">
<!--										<a class="edit-table fancybox fancybox.iframe" title="view Details" href="category-details.php?catid=<?php echo $catid; ?>&pageid=<?php echo $pageid; ?>"><img src="images/detail.png" /></a> 
-->										<a class="edit-table" data-toggle="tooltip" data-original-title="Edit" title="edit" href="subsubcategory.php?catid=<?php echo $catid; ?>&parentid=<?php echo $parentid; ?>&pageid=<?php echo $pageid; ?>"><i class="fa fa-pencil"></i></a>	
										<a href="subsubcategory-del.php?catid=<?php echo $catid; ?>&parentid=<?php echo $parentid; ?>&pageid=<?php echo $pageid; ?>&task=del" onclick="return confirmDelete();" class="edit-table" title="delete"> <span id="<?=$sr?>"  data-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash"></i></span></a>
									</td>
								</tr>
								<?php
								$sr++;
									}
									
								}
								else
								{
								?>
									<tr><td colspan="8" class="notfound" align="center">Sorry, Sub category Not Found!</td></tr>
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