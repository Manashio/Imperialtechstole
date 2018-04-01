<?php include("../config/config.inc.php");
if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$Pagename = "E-commerce Hub Management";

$pageid = $_REQUEST['pageid'];
$msgupd = $_REQUEST['msgupd'];
$keywordsearch = $_REQUEST['keywordsearch'];

$keysearch = "";
$headingcls = 'class="correctmsg"';

if($pageid=="" || $pageid==0)
{
	$pageid = 1;
}

if($msgupd==1) { $successmsg = "E-commerce Hub successfully Added!"; }
elseif($msgupd==2) { $successmsg = "E-commerce Hub successfully edited!"; }
elseif($msgupd==3) { $successmsg = "E-commerce Hub status successfully changed!"; }
elseif($msgupd==4) { $successmsg = "E-commerce Hub deleted Successfully!"; }

##Search Keyword

if($keywordsearch!="")
{
	$keysearch .= " where (fld_company_name LIKE '%$keywordsearch%' OR fld_company_name='$keywordsearch')";
}


##PagePer Show
if($pagePerShow=="")
{
	$pagePerShow=50;
}
$RecsToShow = $pagePerShow;
$startPage = ($pageid-1)*$RecsToShow;
$sqlPgn = "SELECT count(*) as cnt FROM tbl_ecomm $keysearch";
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


$sqlMgmt = "SELECT * FROM tbl_ecomm $keysearch ORDER BY fld_id DESC LIMIT $startPage, $RecsToShow";
$rsMgmt = $dbquery->query($sqlMgmt) or die('Error: ' . $dbquery->error);
$numMgmt = $rsMgmt->num_rows;



$magnificpopup=1;
$selectedPage = 4;
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
					<div class="addfiles"><a href="ecomm.php?pageid=<?php echo $pageid; ?>"><i class="fa fa-plus-circle white"></i>Add New E-commerce Hub</a></div>
					<div class="clr"></div>

					<div class="tablebox table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr class="th-heading">
									<th width="4%">S. No</th>
									<th width="15%">Ecommerce Hum Name</th>
									<th width="11%">Contact Person</th>
                                    <th width="12%">Ecommerce Hub Image</th>
                                    <th width="10%">Email</th>
									<th width="10%">Phone</th>
									<th width="8%">Mobile</th>
									<th width="10%">Registed On</th>
									<th width="5%" class="text-center">Status</th>
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
									$companyid = $rowMgmt->fld_id;
									$company_name = $rowMgmt->fld_company_name;
									$name   = $rowMgmt->fld_name;
									$mobile = $rowMgmt->fld_mobile;
									$phone = $rowMgmt->fld_phone;
									$image = $rowMgmt->fld_image;
								    $email = $rowMgmt->fld_email;
									$date = date("d M Y h:i:s",strtotime($rowMgmt->fld_reg_date));
									
 									 $status = $rowMgmt->fld_status;
									 $imagepath = "../images/company/thumb/";
																											
									if($status=='Active')
									{
										$sts='Inactive';
										$showsts = '<a href="company-del.php?companyid='.$companyid.'&pageid='.$pageid.'&status='.$sts.'&task=chk" title="active" class="activeicon"><i class="fa fa-check-circle green"></i></a>';
									}
									else
									{
										$sts='Active';
										$showsts = '<a href="company-del.php?companyid='.$companyid.'&pageid='.$pageid.'&status='.$sts.'&task=chk" title="inactive" class="inactive"><i class="fa fa-times-circle red"></i></a>';
									}
							 
									
									?>
 								<tr>
									<td><?php echo $sr; ?></td>
									<td><?php echo $company_name; ?></td>
									<td><?php echo $name; ?></td>
                                    <td><img src="<?php echo $imagepath.$image;?>" width="100" height="100"  /></td>
                                    <td><?php echo $email; ?></td>
									<td><?php echo $phone; ?></td>
                                    <td><?php echo $mobile; ?></td>
									<td><?php echo $date; ?> </td>
									
									<td class="text-center"><?php echo $showsts; ?></td>
									<td class="text-center">
                           <a  title="About E-commerce hub" href="ecomm-aboutus.php?companyid=<?php echo $companyid; ?>" class="edit-table"><img src="images/detail.png" /></a> 
                           <!-- <a  title="Manage Services" href="service-mgmt.php?companyid=<?php echo $companyid; ?>" class="edit-table"><img src="images/detail.png" /></a> -->
                           
                              <a  title="Attracting investment" href="ecomm-investment.php?companyid=<?php echo $companyid; ?>" class="edit-table"><img src="images/detail.png" /></a>
                              
                               <a  title="Services" href="ecomm-services.php?companyid=<?php echo $companyid; ?>" class="edit-table"><img src="images/detail.png" /></a> 
								
							     <a class="edit-table" data-toggle="tooltip" data-original-title="Edit" title="edit" href="ecomm.php?companyid=<?php echo $companyid; ?>&pageid=<?php echo $pageid; ?>"><i class="fa fa-pencil"></i></a>	
										<a href="ecomm-del.php?companyid=<?php echo $companyid; ?>&pageid=<?php echo $pageid; ?>&task=del" onclick="return confirmDelete();" class="edit-table" title="delete"> <span id="<?=$sr?>"  data-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash"></i></span></a>
									</td>
								</tr>
								<?php
								$sr++;
									}
									
								}
								else
								{
								?>
									<tr><td colspan="8" class="notfound" align="center">Sorry, Room Not Found!</td></tr>
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