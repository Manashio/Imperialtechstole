<?php
	include("../config/config.inc.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$Pagename = "Slider Management";

$pageid = $_REQUEST['pageid'];
$msgupd = $_REQUEST['msgupd'];
$keywordsearch = $_REQUEST['keywordsearch'];

$keysearch = "";
$headingcls = 'class="correctmsg"';

if($pageid=="" || $pageid==0)
{
	$pageid = 1;
}

if($msgupd==1) { $successmsg = "Slider Image successfully Added!"; }
elseif($msgupd==2) { $successmsg = "Slider Image successfully edited!"; }
elseif($msgupd==3) { $successmsg = "Slider Image status successfully changed!"; }
elseif($msgupd==4) { $successmsg = "Slider Image deleted Successfully!"; }


##PagePer Show
if($pagePerShow=="")
{
	$pagePerShow=50;
}
$RecsToShow = $pagePerShow;
$startPage = ($pageid-1)*$RecsToShow;
$sqlPgn = "SELECT count(*) as cnt FROM tbl_slider ";
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


$sqlMgmt = "SELECT * FROM tbl_slider ORDER BY fld_id ASC LIMIT $startPage, $RecsToShow";
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
 <style>
.mybtn{
background-color: #656565;
  
    margin-top: -35px;
    cursor: pointer;
    margin-right: 5px;
    float: left;
    font-size: 13px;
    text-align: center;
    border-radius: 3px;
    color: #FFF;
    text-decoration: none;
	float:right;
	height:25px;
	width:100px;
} 

.fileupload{

    padding: 5px 10px;
    margin-top:-4px;
    font-size: 13px;
    text-align: center;
    border-radius: 3px;
    color: #FFF;
    text-decoration: none;
	float:left;
	margin-left:20px;
	width:100px !important;
	
} 

 </style>
 	<!-- middlepart start -->
	<section class="middlepart">
		<div class="right-panel">
			<aside class="rightsection">
			<h2><?php echo $Pagename; ?> </h2>
			<?php if($successmsg!="") { ?><div id="categoryDeleted" class="alert alert-success" style="text-align:center;"><div <?php echo $headingcls; ?>><?php echo $successmsg; ?></div></div><?php } ?>
				
				
						
				
				
					<div class="clr"></div>

					<div class="tablebox table-responsive">
					<form name="frmgeneralinfo" method="post" action="slider-page.php" enctype="multipart/form-data" onSubmit="return validate();">
					<table class="table table-bordered table-hover">
				 <tr>
                   <td>
				   <div style="width:40%; margin:0 auto;"><label style="float:left;">Slider Image :</label>
				   <p style="margin-bottom:-20px; color:#f00;"><input type="file" name="fld_image" id="fld_image" value=""  required class="fileupload"  />
				    <span ><br />
<br />
Recomended image dimension 575 X 445 pixel </span></p> &nbsp; <input type="submit" name="submit"  value="Add New Image" class="mybtn">
					 </div>
							 </td></tr>
					
						
						</table>
						</form>
						<table class="table table-bordered table-hover">
							<tr>
							<?php
							$sr = 1;
							$i =0;
							if($numMgmt > 0)
							{
								while($rowMgmt = $rsMgmt->fetch_object())
								{
									$sldid = $rowMgmt->fld_id;
									$title = $rowMgmt->fld_title;
									$courseId  = $rowMgmt->fld_course_id;
									$image  = $rowMgmt->fld_image;
									$status = $rowMgmt->fld_status;
																											
									if($status=='Active')
									{
										$sts='Inactive';
										$showsts = '<a href="slider-del.php?sldid='.$sldid.'&pageid='.$pageid.'&status='.$sts.'&task=chk" title="active" class="activeicon"><i class="fa fa-check-circle green"></i></a>';
									}
									else
									{
										$sts='Active';
										$showsts = '<a href="slider-del.php?sldid='.$sldid.'&pageid='.$pageid.'&status='.$sts.'&task=chk" title="inactive" class="inactive"><i class="fa fa-times-circle red"></i></a>';
									}
							 
									if($i%3==0)
									{
									echo "</tr><tr>";
									}
									$i++;
									?>
 							
									<td align="center"> <?php if($image!=''){?><img src="../images/slider/<?php echo $image; ?>" width="250" height="150" ><br />
<?php } ?>
									  <?php echo $showsts; ?>
									  <a href="slider-del.php?sldid=<?php echo $sldid; ?>&pageid=<?php echo $pageid; ?>&task=del" onclick="return confirmDelete();" class="edit-table" title="delete"> <span id="<?=$sr?>"  data-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash"></i></span></a>
									</td>
									
								
								
								<?php
								$sr++;
									}
									?>
									</tr>
								<?php }
								else
								{
								?>
									<tr><td colspan="8" class="notfound" align="center">Sorry, Slider image Not Found!</td></tr>
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