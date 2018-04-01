<?php
	include("../config/config.inc.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

function companyData($dbquery,$companyid,$data)
{

$sqlMgmt = "SELECT * FROM tbl_company where fld_id='".$companyid."' ";
$rsMgmt = $dbquery->query($sqlMgmt) or die('Error: ' . $dbquery->error);
$rowMgmt = $rsMgmt->fetch_object();
return $rowMgmt->$data;
}
function categoryData($dbquery,$categoryid,$data)
{

$sqlMgmt = "SELECT * FROM tbl_category where fld_id='".$categoryid."' ";
$rsMgmt = $dbquery->query($sqlMgmt) or die('Error: ' . $dbquery->error);
$rowMgmt = $rsMgmt->fetch_object();
return $rowMgmt->$data;
}
$Pagename = "Selloffers Management";

$companyid = $_REQUEST['companyid'];
$pageid = $_REQUEST['pageid'];
$msgupd = $_REQUEST['msgupd'];
$keywordsearch = $_REQUEST['keywordsearch'];

$keysearch = "where fld_company_id='".$companyid."' ";
$headingcls = 'class="correctmsg"';

if($pageid=="" || $pageid==0)
{
	$pageid = 1;
}

if($msgupd==1) { $successmsg = "Record successfully Added!"; }
elseif($msgupd==2) { $successmsg = "Record successfully edited!"; }
elseif($msgupd==3) { $successmsg = "Record status successfully changed!"; }
elseif($msgupd==4) { $successmsg = "Record deleted Successfully!"; }

##Search Keyword

if($keywordsearch!="")
{
	$keysearch .= " And (fld_product_name LIKE '%$keywordsearch%' OR fld_product_name='$keywordsearch')";
}


##PagePer Show
if($pagePerShow=="")
{
	$pagePerShow=50;
}
$RecsToShow = $pagePerShow;
$startPage = ($pageid-1)*$RecsToShow;
$sqlPgn = "SELECT count(*) as cnt FROM tbl_selloffer $keysearch";
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


$sqlMgmt = "SELECT * FROM tbl_selloffer $keysearch ORDER BY fld_product_name ASC  LIMIT $startPage, $RecsToShow";
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
			<h2><?php echo $Pagename; ?> [Company Name : <?php echo companyData($dbquery,$companyid,'fld_company_name'); ?>]</h2>
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
			<div class="addfiles"><a href="selloffer.php?companyid=<?php echo $companyid;?>&pageid=<?php echo $pageid; ?>"><i class="fa fa-plus-circle white"></i>Add New Sell Offer</a></div>
					<div class="clr"></div>

					<div class="tablebox table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr class="th-heading">
									<th width="5%">S. No</th>
									<th width="14%">Title</th>
                                    <th width="14%">Category</th>
								  <th width="11%"> Image</th>
                                  <th width="21%">Short Description</th>
                                  <th width="11%">Offer Date</th>
									<th width="5%" class="text-center">Status</th>
									<th width="8%" class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$sr = 1;
							if($numMgmt > 0)
							{
								while($rowMgmt = $rsMgmt->fetch_object())
								{
									$productid = $rowMgmt->fld_id;
									$catid = $rowMgmt->fld_catid;
									$subcatid = $rowMgmt->fld_subcatid;
									$product_name = $rowMgmt->fld_product_name;
									$short_desc   = $rowMgmt->fld_short_desc;
									$image = $rowMgmt->fld_image;
									$date = date("d M Y ",strtotime($rowMgmt->fld_added_on));
									$expire = date("d M Y ",strtotime($rowMgmt->fld_expire));
									$status = $rowMgmt->fld_status;
									
									$imagepath ="../images/product/thumb/";
																											
									if($status=='Active')
									{
										$sts='Inactive';
										$showsts = '<a href="selloffer-del.php?companyid='.$companyid.'&productid='.$productid.'&pageid='.$pageid.'&status='.$sts.'&task=chk" title="active" class="activeicon"><i class="fa fa-check-circle green"></i></a>';
									}
									else
									{
										$sts='Active';
										$showsts = '<a href="selloffer-del.php?companyid='.$companyid.'&productid='.$productid.'&pageid='.$pageid.'&status='.$sts.'&task=chk" title="inactive" class="inactive"><i class="fa fa-times-circle red"></i></a>';
									}
							 
									
									?>
 								<tr>
									<td><?php echo $sr; ?></td>
									<td><?php echo $product_name; ?></td>
                                    	<td><?php echo categoryData($dbquery,$catid,'fld_name'); ?>  >  <?php echo categoryData($dbquery,$subcatid,'fld_name'); ?></td>
									<td><img width="100" height="100" src="<?php echo $imagepath.$image; ?>" /></td>
                                    <td><?php echo $short_desc; ?></td>
								
									<td><?php echo "<strong>Posted On:</strong> " . $date ."<br> <strong>Expire On:</strong> " . $expire; ?></td>
									<td class="text-center"><?php echo $showsts; ?></td>
									<td class="text-center">
                         
							     <a class="edit-table" data-toggle="tooltip" data-original-title="Edit" title="edit" href="selloffer.php?companyid=<?php echo $companyid; ?>&productid=<?php echo $productid; ?>&pageid=<?php echo $pageid; ?>"><i class="fa fa-pencil"></i></a>	
										<a href="selloffer-del.php?companyid=<?php echo $companyid; ?>&productid=<?php echo $productid;?>&pageid=<?php echo $pageid; ?>&task=del" onclick="return confirmDelete();" class="edit-table" title="delete"> <span id="<?=$sr?>"  data-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash"></i></span></a>
									</td>
								</tr>
								<?php
								$sr++;
									}
									
								}
								else
								{
								?>
									<tr><td colspan="8" class="notfound" align="center">Sorry, Record Not Found!</td></tr>
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