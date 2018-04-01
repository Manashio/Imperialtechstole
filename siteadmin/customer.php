<?php
	include("../config/config.inc.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$Pagename = "Customer Management";

$pageid = $_REQUEST['pageid'];
$msgupd = $_REQUEST['msgupd'];
$keywordsearch = $_REQUEST['keywordsearch'];

$keysearch = "";
$headingcls = 'class="correctmsg"';

if($pageid=="" || $pageid==0)
{
	$pageid = 1;
}

if($msgupd==1) { $successmsg = "Customer successfully Added!"; }
elseif($msgupd==2) { $successmsg = "Customer successfully edited!"; }
elseif($msgupd==3) { $successmsg = "Customer status successfully changed!"; }
elseif($msgupd==4) { $successmsg = "Customer deleted Successfully!"; }

##Search Keyword
$keysearch = " WHERE (fld_parentid='0')";

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
$sqlPgn = "SELECT count(*) as cnt FROM tbl_user ";
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


$sqlMgmt = "SELECT * from tbl_user ORDER BY fld_addedon DESC LIMIT $startPage, $RecsToShow";
$rsMgmt = $dbquery->query($sqlMgmt) or die('Error: ' . $dbquery->error);
$numMgmt = $rsMgmt->num_rows;



$magnificpopup=1;
$selectedPage = 1;
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
						<li><span class="page" > Page <?php echo $TotPageCnt;?> /<?php echo $totRecord;?> &nbsp; Total Records : <?php echo $totRecord;?></span> </li>
						</form>
					</ul>
					 <div class="addfiles"><!--<a href="category.php?pageid=<?php echo $pageid; ?>"><i class="fa fa-plus-circle white"></i>Add Category</a>--></div>
					<div class="clr"></div>

					<div class="tablebox table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr class="th-heading">
									<th width="5%">S. No</th>
									<th width="17%">User Name</th>
									<th width="17%">Email Id</th>
									<th width="17%">Phone</th>
									<th width="17%">Registration Date</th>
									
									<th width="10%" class="text-center">Status</th>
									<th width="14%" class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$sr = 1;
							if($numMgmt > 0)
							{
								while($rowMgmt = $rsMgmt->fetch_object())
								{
									$cust_id = $rowMgmt->fld_id;
								
									  $user_name = $rowMgmt->fld_name;
									  $email = $rowMgmt->fld_email;
									  $phone = $rowMgmt->fld_phone;
									  
									  
 									$applied_date = $rowMgmt->fld_addedon;
 									  $status = $rowMgmt->fld_status;
																											
									if($status=='1')
									{
										$sts='0';
										$showsts = '<a href="customer-del.php?cust_id='.$cust_id.'&pageid='.$pageid.'&status='.$sts.'&task=chk" title="active" class="activeicon"><i class="fa fa-check-circle green"></i></a>';
									}
									else
									{
										$sts='1';
										$showsts = '<a href="customer-del.php?cust_id='.$cust_id.'&pageid='.$pageid.'&status='.$sts.'&task=chk" title="inactive" class="inactive"><i class="fa fa-times-circle red"></i></a>';
									}
							 
									
									?>
 								<tr>
									<td><?php echo $sr; ?></td>
									<td class="text-center"><?php echo $user_name; ?></td>
									<td class="text-center"><?php echo $email; ?></td>
									<td class="text-center"><?php echo $phone; ?></td>
								
									<td class="text-center"><?php echo $applied_date; ?></td>
									<td class="text-center"><?php echo $showsts; ?></td>
									<td class="text-center">
									<!--	<a class="edit-table fancybox fancybox.iframe" title="view Details" href="category-details.php?catid=<?php echo $catid; ?>&pageid=<?php echo $pageid; ?>"><img src="images/detail.png" /></a> 
<a class="edit-table" data-toggle="tooltip" data-original-title="Sub Category" title="Sub Category" href="subcategory-mgmt.php?catid=<?php echo $catid; ?>&pageid=<?php echo $pageid; ?>"><i class="fa fa-list"></i></a>	
<a class="edit-table" data-toggle="tooltip" data-original-title="Edit" title="edit" href="category.php?catid=<?php echo $catid; ?>&pageid=<?php echo $pageid; ?>"><i class="fa fa-pencil"></i></a>	
									-->
									<a href="customer-del.php?cust_id=<?php echo $cust_id; ?>&pageid=<?php echo $pageid; ?>&task=del" onclick="return confirmDelete();" class="edit-table" title="delete"> <span id="<?=$sr?>"  data-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash"></i></span></a>
									</td>
									
								</tr>
								<?php
								$sr++;
									}
									
								}
								else
								{
								?>
									<tr><td colspan="8" class="notfound" align="center">Sorry, Category Not Found!</td></tr>
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