<?php 
include("../config/config.inc.php");
if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}
$selectedmenu = 5;


$pageHeading2show="Database Back-up";

$ErrMsg="";

$msgupd = $_REQUEST['msgupd'];
if($msgupd==1) { $ErrMsg = "Database Backup Successfully Completed!"; }
elseif($msgupd==2) { $ErrMsg = "Database Backup file Deleted!"; }
    
$sqlMgmt = "select * from tbl_backup ORDER BY fld_date Desc";
$rsMgmt = $dbquery->query($sqlMgmt) or die('Error: ' . $dbquery->error);
$numMgmt = $rsMgmt->num_rows;


$SelectedPage=5;
$leftside=1;
if($leftside==0)
{
	$style='style="width:99%"';
}
else
{
	$style="";
}

<?php include('common/admheader.php'); ?>
?>

<div class="innercontainer">

	   <div id="midcontentfull">
			    
	     <div class="dashboardbox">
	      
		  <?php include('common/leftside.php');?>
			      
			<section <?php echo $style?>>
    
			<h2><?php echo $pageHeading2show;?></h2>
			<?php if($ErrMsg!="") { ?><h5 style="text-align:center;color:#ff0000;"><?=$ErrMsg?></h5><?php } else { echo ''; } ?>
			  
		<table class="cartdata" border="0" cellspacing="0" width="100%" cellpadding="0">
		
				<tr>
					<td colspan="8" class="aright"><a href="create-backup.php?accesstoid=16" class="addnewitem">Create Backup</a></td>
				</tr>
				<tr>
					<th width="2%">Sl.No</th>
					<th width="68%">File</th>
					<th width="20%">Date</th>
					<th width="auto" width="10%">Action</th>
				</tr>
				<?php
				if($numMgmt > 0)
				{
					$slno=1;
					while($rowMgmt = $rsMgmt->fetch_object())
					{ 
						$bakid=$rowMgmt->fld_id;
						$backup = "db_backup/";
						$bakname = $rowMgmt->fld_backupname;
						if($bakname!="")
						{
							$strbakup = $backup . $bakname;
							if(file_exists($strbakup))
							{
								$showbak = $bakname;
							}
						}
						$bakdate = $rowMgmt->fld_date;
					?>
				<tr>
		    	    <td><?php echo $slno; ?></td>
					<td><?php if($bakname!="") { echo $showbak; } else { echo ''; } ?></td>
					<td><?php if($bakdate!="") { echo convert2DateTime($bakdate); } else { echo ''; } ?></td>
					<td>
						<ul>
							<li><a href="<?php echo $strbakup; ?>" download="<?php echo $strbakup; ?>" class="viewdetails">Download</a></li>
							<li><a href="backup-del.php?bakid=<?php echo $bakid;?>" title="delete" class="deleteicon">Delete</a></li>
						</ul>			
					</td>
				</tr>
				<?php
						$slno++;
					}
				}
				else
				{
				?>
				<tr>
					<td colspan="10">
						<p style="text-align:center!important;color:#ff0000;font-size:14px;">Sorry, Database Backup Not Found!</p>
					</td>
				</tr>
				<?php
					}
				?>
				
			</table>
		</section>			
      </div>
	</div>
</div>


<?php include("common/admfooter.php"); ?>