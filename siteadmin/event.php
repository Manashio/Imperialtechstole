<?php 
	include("../config/config.inc.php");
	include("includes/class.upload.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$eventid = $_REQUEST['eventid'];
$pageid = $_REQUEST['pageid'];
$imagepath = "../images/events/";
 $thumbimgpath = "../images/events/gallery/";
 $baseimgpath = "../images/events/base/";
 
$fld_title	= $dbquery->real_escape_string($_REQUEST['fld_title']);
   
$fld_host_name	= $dbquery->real_escape_string($_REQUEST['fld_host_name']);
$fld_location  = $dbquery->real_escape_string($_REQUEST['fld_location']);
$fld_date  = date("Y-m-d", strtotime($_REQUEST['fld_date']));
$fld_time  = $_REQUEST['startTime'].$_REQUEST['start']."/".$_REQUEST['endTime'].$_REQUEST['end'];
$fld_description = $dbquery->real_escape_string($_REQUEST['fld_description']);
$fld_meta_title = $dbquery->real_escape_string($_REQUEST['fld_meta_title']);
$fld_meta_description = $dbquery->real_escape_string($_REQUEST['fld_meta_description']);
$fld_meta_keywords = $dbquery->real_escape_string($_REQUEST['fld_meta_keywords']);

$sqlseo = " SELECT * FROM tbl_events WHERE fld_title='$fld_title'";
$rsSeo = $dbquery->query($sqlseo);
$cnt = $rsSeo ->num_rows;
if($cnt > 0)
{
$fld_seourl = MakeSeoUrl($fld_title)."_".$cnt;
}
else
{
$fld_seourl = MakeSeoUrl($fld_title);
}
$fileTmp = $_FILES['fld_image']['tmp_name'];


 if($fld_title!="")
{
	   
		if($eventid > 0)
		{
			$sqlUpdate = "UPDATE tbl_events set  
			   fld_title	= '$fld_title',
			  fld_host_name  = '$fld_host_name',
			   fld_location = '$fld_location',
			   fld_date = '$fld_date',
			   fld_time = '$fld_time',			     
			   fld_description	='$fld_description',
			   fld_meta_title = '$fld_meta_title',
			   fld_meta_description ='$fld_meta_description',
			   fld_meta_keywords ='$fld_meta_keywords'
			    where fld_id='$eventid'";
			$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
			$updts = 2;
		}
		else
		{
 
			      $sqlInsert = "INSERT INTO tbl_events SET
			    fld_title	= '$fld_title',
				fld_seourl  = '$fld_seourl',
			   fld_host_name  = '$fld_host_name',
			   fld_location = '$fld_location',
			   fld_date = '$fld_date',
			   fld_time = '$fld_time',			     
			   fld_description	='$fld_description',
			   fld_meta_title = '$fld_meta_title',
			   fld_meta_description ='$fld_meta_description',
			   fld_meta_keywords ='$fld_meta_keywords',
			   fld_image      = '$namefile'";
			   
		
			$rsInsert = $dbquery->query($sqlInsert) or die("Insert Error:" .$dbquery->error);
			$eventid = $dbquery->insert_id;
			$updts = 1;
		}
		 
		 
		   if($_FILES['fld_image']['name']!='')
		 {	
 				$sqlimage = "SELECT fld_image FROM tbl_events where fld_id='$eventid'";
				$rsimage = $dbquery->query($sqlimage) or die("Unlink Image Error:" . $dbquery->error);
				$numimage = $rsimage->num_rows;
				if($numimage > 0)
				{
					$rowimage = $rsimage->fetch_object();
					$galimage = $rowimage->fld_image;
					if($galimage!="")
					{
						unlink($imagepath . $galimage);
					    unlink($thumbimgpath . $galimage);
						  unlink($baseimgpath . $galimage);
 						
					}
				}
				$handle = new Upload($_FILES['fld_image']);
				$name = explode(".",$_FILES['fld_image']['name']);
				$filename2Save = $name[0]."IMG" . date('YHis') . rand(1,1000);
				if ($handle->uploaded)
				{	
 					##thumbPath
					$handle->image_resize            = true;
	
					$size = getUpImageSize($_FILES['fld_image']);
 				 
					$old_x = $size['x']; // Width
					$old_y = $size['y']; // Height
					
					if($old_x > CATIMG_WIDTH_SIZE_ROOM && $old_y > CATIMG_HEIGHT_SIZE_ROOM)
					{
						//$handle->image_ratio_y           = false;
						$handle->image_x                 = CATIMG_WIDTH_SIZE_ROOM;
 						$handle->image_y                 = CATIMG_HEIGHT_SIZE_ROOM;
					}
					
						
					$handle->image_ratio_no_zoom_in 	 = true;
					$handle->file_new_name_body = $filename2Save;
 					$handle->Process($thumbimgpath);
					
					
					##Base Image
					$handle->image_resize            = true;
	
					$size = getUpImageSize($_FILES['fld_image']);
 				 
					$old_x = $size['x']; // Width
					$old_y = $size['y']; // Height
					
					if($old_x > CATIMG_WIDTH_SIZE && $old_y > CATIMG_HEIGHT_SIZE)
					{
						//$handle->image_ratio_y           = false;
						$handle->image_x                 = CATIMG_WIDTH_SIZE;
 						$handle->image_y                 = CATIMG_HEIGHT_SIZE;
					}
					
						
					$handle->image_ratio_no_zoom_in 	 = true;
					$handle->file_new_name_body = $filename2Save;
 					$handle->Process($baseimgpath);
					
					if ($handle->processed)
					{
						$file = $handle->file_dst_name; 
						
					}
			
			}
				move_uploaded_file( $_FILES['fld_image']['tmp_name'] ,$imagepath.$filename2Save.'.'.$name[1]);
				
				
				if($file)
				{
					 $fileName = $file;
					
						$sqlUpdate = "UPDATE  tbl_events set fld_image='$fileName' where fld_id='$eventid'";
						$rsUpdate = $dbquery->query($sqlUpdate) or die("Update Error:" . $dbquery->error);
						//$updts = 1;
					 
				}
				
				
		}
				
		
		 
		 
		if($updts > 0)
		{
			
				echo "<script>document.location.href='events.php?msgupd=".$updts."&pageid=".$pageid."';</script>";
				exit;


 
		}
	
}



##Show Detail
$sqlDisp = " SELECT * FROM tbl_events WHERE fld_id='$eventid'";
$rsDisp = $dbquery->query($sqlDisp) or die("Display Error:" . $dbquery->error);
if($rsDisp->num_rows > 0)
{
	$rowDisp = $rsDisp->fetch_object();
	$eventid = $rowDisp->fld_id;
	$tmp = explode("/",$rowDisp->fld_time);
	
	 $startTime = substr($tmp[0],0,-2);
	 $start  =  substr($tmp[0],-2);
	 $endTime = substr($tmp[1],0,-2);
	 $end = substr($tmp[1],-2);
	
  }


//$getcatstree = getPerentsUniversity($dbquery,0);
$selectedPage = 3;
$ceditor = 1;
?>





<?php include('common/admheader.php'); ?>



	<section class="middlepart">
		<div class="leftsection"><div class="left-panel"></div></div>
		<div class="right-panel">
			<aside class="rightsection iframe dboard">
				<h2><?php if($eventid=="") { echo "Add"; } else { echo "Edit"; } ?> Event <?php if($messageText!="") { ?>
				  <div class="errormsg"><?php echo $messageText; ?></div><?php } ?></h2>
				<div class="divider"></div>
				<div class="form">
				<form name="frmgeneralinfo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
				<input type="hidden" name="eventid" value="<?php echo $eventid; ?>" />
				<input type="hidden" name="pageid" value="<?php echo $pageid; ?>" />
					<ul>
						 
						
						<li>
						<label>Meta Title:</label>
						<input type="text" name="fld_meta_title" id="fld_meta_title" value="<?php echo $rowDisp->fld_meta_title;?>" size="60" placeholder="Meta Title"  />
						</li>
						<li>
						<label>Meta Description:</label>
						<input type="text" name="fld_meta_description" id="fld_meta_description" value="<?php echo $rowDisp->fld_meta_description;?>" size="60" placeholder="Meta Description"  />
						</li>
						<li>
						<label>Meta Keywords:</label>
						<input type="text" name="fld_meta_keywords" id="fld_meta_keywords" value="<?php echo $rowDisp->fld_meta_keywords;?>" size="60" placeholder="Meta Keywords"  />
						</li>
						
						
						<li>
						<label>Title:</label>
						<input type="text" name="fld_title" id="fld_title" value="<?php echo $rowDisp->fld_title;?>" size="60" placeholder="Title" required /> 
						</li>
						<li>
						<label>Host Name:</label>
						<input type="text" name="fld_host_name" id="fld_host_name" value="<?php echo $rowDisp->fld_host_name;?>" size="60" placeholder="Host Name"  /> 
						</li>
                        <li>
						<label>Location:</label>
						<input type="text" name="fld_location" id="fld_location" value="<?php echo $rowDisp->fld_location;?>" size="60" placeholder="Location"  /> 
						</li>
						
                        <li>
						<label>Event Date:</label>
						<input type="text" name="fld_date" id="fld_date" value="<?php echo $rowDisp->fld_date;?>" size="60" placeholder="Event Date"  readonly="readonly" /> 
						</li>
                        <li>
						<label>Event Time:</label>
						<input type="text" name="startTime" id="startTime" value="<?php echo $startTime;?>" size="6" placeholder="start"  style="width:80px; margin-right:5px;" />  &nbsp;&nbsp;
                        <select name="start" style="width:60px;">
                        <option value="am" <?php echo ($start=='am') ? 'selected' : '';?>>AM</option>
                        <option value="pm" <?php echo ($start=='pm') ? 'selected' : '';?>>PM</option>
                        </select>
                  <div style="float:left; width:30px; text-align:center; padding:7px 0 0 0">     TO</div>
                       
                        <input type="text" name="endTime" id="endTime" value="<?php echo $endTime;?>" size="6" placeholder="end" style="width:80px;margin-right:5px;"  />
                        <select name="end" style="width:60px;">
                        &nbsp;&nbsp;
                        &nbsp;&nbsp;
                        <option value="am" <?php echo ($end=='am') ? 'selected' : '';?>>AM</option>
                        <option value="pm" <?php echo ($end=='pm') ? 'selected' : '';?>>PM</option>
                        </select>
						</li>
						<li>
						<label>Image:</label>
						
						<input type="hidden" name="fld_image1" id="fld_image1" value="<?php echo $rowDisp->fld_image;?>"  />	
						<input type="file" name="fld_image" id="fld_image" value="<?php echo $rowDisp->fld_image;?>"  />
						<div style="width:50%; margin:0 auto; color:#f00;">Recomended image dimension 260 X 170 pixel<br />
						<?php if($eventid!=""){?>
						<br />
						<br />
						<img height="100" width="100" src="../images/events/<?php echo $rowDisp->fld_image;?>" />
						
						<?php }?>
						</div>	
						</li>	
						
						
						
						
						<li>
						<label>Description:</label>
						<br />
						<br />
						<textarea type="text" name="fld_description" id="fld_descriptoin" rows="3" cols="50" ><?php echo $rowDisp->fld_description;?></textarea>
						<script>
						CKEDITOR.replace( 'fld_descriptoin', {
						height: 260
						
						} );
						</script>
						</li>
						
						
						
						<li>
						<label></label>
						<input name="submit" type="submit" value="<?php if($eventid ==""){?>Save <?php }else{?>Update<?php }?>">
						</li>
					</ul>
					</form>
				</div>
			</aside>
		</div>
	</section>


<?php include("common/admfooter.php"); ?>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<script>
 $(function() {
   $( "#fld_date" ).datepicker({
     defaultDate: "+1w",
 minDate:0,
     changeMonth: true,
 changeYear: true,
     numberOfMonths: 1,
 dateFormat: 'dd-mm-yy'
     
   });
   })
 </script>
 

