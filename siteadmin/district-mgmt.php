<?php
	include("../config/config.inc.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$Pagename = "District Management";

$pageid = $_REQUEST['pageid'];
$msgupd = $_REQUEST['msgupd'];
$keywordsearch = $_REQUEST['keywordsearch'];

$keysearch = "";
$headingcls = 'class="correctmsg"';

if($pageid=="" || $pageid==0)
{
	$pageid = 1;
}

if($msgupd==1) { $successmsg = "District successfully Added!"; }
elseif($msgupd==2) { $successmsg = "District successfully edited!"; }
elseif($msgupd==3) { $successmsg = "District status successfully changed!"; }
elseif($msgupd==4) { $successmsg = "District deleted Successfully!"; }
elseif($msgupd==5) { $successmsg = "District is already exits!"; }

##Search Keyword
$keysearch = " WHERE (fld_cityid='".$_GET['cityid']."')";

if($keywordsearch!="")
{
	$keysearch .= " AND (fld_district LIKE '%$keywordsearch%' OR fld_district='$keywordsearch')";
}


##PagePer Show
if($pagePerShow=="")
{
	$pagePerShow=50;
}
$RecsToShow = $pagePerShow;
$startPage = ($pageid-1)*$RecsToShow;
$sqlPgn = "SELECT count(*) as cnt FROM tbl_district $keysearch";
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


$sqlMgmt = "SELECT * FROM tbl_district $keysearch ORDER BY fld_district ASC,fld_district ASC LIMIT $startPage, $RecsToShow";
$rsMgmt = $dbquery->query($sqlMgmt) or die('Error: ' . $dbquery->error);
$numMgmt = $rsMgmt->num_rows;



$magnificpopup=1;
$selectedPage = 11;
?>



<?php include("common/admheader.php"); ?>
<script type="text/javascript">
window.onload = function() {
  document.getElementById("search").focus();
};


</script>
 <style>
 .mybtn {
    background-color: #656565;
    margin-top: -23px;
    cursor: pointer;
    margin-right: 15px;
    float: left;
    font-size: 13px;
    text-align: center;
    border-radius: 3px;
    color: #FFF;
    text-decoration: none;
    float: right;
    height: 25px;
    width: 100px;

}
 </style>
 <?php 
   $cityid = $_GET['cityid'];
   $querypro = $dbquery->query("select * from tbl_city where fld_id='".$cityid."'");
   $record = $querypro->fetch_object();
   $cityname = $record->fld_city;
 if(isset($_REQUEST['submit']))
 {

   $district = $_REQUEST['district'];
   $cityid = $_REQUEST['cityid'];

  $chkquery = $dbquery->query("select * from tbl_district where fld_district='".$district."' and fld_cityid='".$cityid."'");
  $num = $chkquery->num_rows;
  if($num>0)
  {
  $updts = 5;
  }
else
{

	 $dbquery->query("insert into tbl_district set fld_cityid='".$cityid."',fld_district='".$district."'");
   $updts = 1;
}

echo "<script>document.location.href='district-mgmt.php?cityid=".$cityid."&msgupd=".$updts."&pageid=".$pageid."';</script>";
exit;
 }
 if($_REQUEST['flag']="updatetrue")
 {

  $query = $dbquery->query("select * from tbl_district where fld_id='".$_REQUEST['id']."'");
  $record = $query->fetch_object();
  $districtname = $record->fld_district;
 }
 if(isset($_REQUEST['updatebtn']))
 {
    $cityid = $_REQUEST['cityid'];
    $id = $_REQUEST['id'];
    $city = $_REQUEST['city'];
    $dbquery->query("update tbl_district set fld_district='".$district."' where fld_id='".$id."'");
    $updts = 2;
    echo "<script>document.location.href='district-mgmt.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
exit;
 }
 ?>
 	<!-- middlepart start -->
	<section class="middlepart">
		<div class="right-panel">
			<aside class="rightsection">
			<h2><?php echo $Pagename; ?>(<?php echo $cityname;?>) </h2>
			<?php if($successmsg!="") { ?><div id="categoryDeleted" class="alert alert-success" style="text-align:center;"><div <?php echo $headingcls; ?>><?php echo $successmsg; ?></div></div><?php } ?>
				<ul class="topbar mbottom1">
				<form name="frmgeneralinfo" method="post" action="" enctype="multipart/form-data" >
					<table class="table table-bordered table-hover">
				 <tbody><tr>
                   <td>					
				   <div style="width:40%; margin:0 auto;">
				   
				   <label style="float:left;">District Name :</label>				 
				   <p style="margin-bottom:-20px; color:#f00;">
				   	<input type="hidden" name="cityid" value="<?php echo $_GET['cityid'];?>" >
				   <input type="text" name="district" id="district" value="<?php echo $districtname;?>" required style="width:200px; margin-right: 100px;
    height: 25px;">
				   <br/> &nbsp; <?php if($_GET['flag']=="updatetrue"){ ?><input type="submit" name="updatebtn" value="Update" class="mybtn"> <?php }else{?><input type="submit" name="submit" value="Save" class="mybtn"><?php }?>
				</p>
					 </div>
							 </td></tr>
					
						
						</tbody></table>
						</form>
					</ul>
						<div class="clr"></div>

					<div class="tablebox table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr class="th-heading">
									<th width="5%">S. No</th>
									<th width="31%">District name</th>
									<th width="31%">City</th>
									<th width="14%" class="text-center">Status</th>
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
									$id = $rowMgmt->fld_id;
								    
 									$district = $rowMgmt->fld_district;
 									$status = $rowMgmt->fld_status;
																											
									if($status=='1')
									{
										$sts='0';
										$showsts = '<a href="district-del.php?cityid='.$cityid.'&id='.$id.'&pageid='.$pageid.'&status='.$sts.'&task=chk" title="active" class="activeicon"><i class="fa fa-check-circle green"></i></a>';
									}
									else
									{
										$sts='1';
										$showsts = '<a href="district-del.php?cityid='.$cityid.'&id='.$id.'&pageid='.$pageid.'&status='.$sts.'&task=chk" title="inactive" class="inactive"><i class="fa fa-times-circle red"></i></a>';
									}
							 
									
									?>
 								<tr>
									<td><?php echo $sr; ?></td>
									<td><?php echo $district; ?></td>
									<td><?php echo $cityname; ?></td>
										
									<td class="text-center"><?php echo $showsts; ?></td>
									<td class="text-center">

						
							<a class="edit-table" data-toggle="tooltip" data-original-title="Edit" title="edit" href="district-mgmt.php?cityid=<?php echo  $cityid;?>&id=<?php echo $id; ?>&pageid=<?php echo $pageid; ?>&flag=updatetrue"><i class="fa fa-pencil"></i></a>	
							<a href="district-del.php?cityid=<?php echo $cityid;?>&id=<?php echo $id; ?>&pageid=<?php echo $pageid; ?>&task=del" onclick="return confirmDelete();" class="edit-table" title="delete"> <span id="<?=$sr?>"  data-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash"></i></span></a>
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
								
							</tbody>
						</table>
					</div>
				</aside>
			</div>
		</section>
<?php include("common/admfooter.php"); ?>