<?php 		$subnam		= "";
		$pass_marks	= "";
		$coursenam	= "";
		$subCode 	= "";
		$subMarks 	= "";
		$subyear 	= "";
if(isset($_REQUEST['submit']))
{

	$qrychkuser = mysql_query("select * from pcf_subjts where course_id = '$coursenam' and subject_code ='$subCode' and subject_name ='$subnam'");
	$chkUser =mysql_num_rows($qrychkuser);
	if($chkUser>0)
	{

		$subnam		= $_REQUEST['subject_name'];
		$coursenam	= $_REQUEST['course'];
		$subCode 	= $_REQUEST['subject_code'];
		$subMarks 	= $_REQUEST['sub_marks'];
		$pass_marks	= $_REQUEST['pass_marks'];
		$subyear 	= $_REQUEST['year'];
		$msg = "<font color='#990000'>User already exist!</font>";
	}
	else
	{
	  
    	$subnam		= mysql_real_escape_string($_REQUEST['subject_name']);
		$coursenam	= mysql_real_escape_string($_REQUEST['course']);
		$subCode 	= mysql_real_escape_string($_REQUEST['subject_code']);
		$subMarks 	= $_REQUEST['sub_marks'];
		$subyear 	= $_REQUEST['year'];
		$EDTID		= $_REQUEST['EdtID'];
		$pass_marks	= $_REQUEST['pass_marks'];
		$position 	= $_REQUEST['position'];
		$default_selected = $_REQUEST['default_selected'];

$qry	= mysql_query("UPDATE `pcf_subjts` SET `course_id` ='$coursenam', `subject_code` = '$subCode', default_selected = '$default_selected', `subject_name` = '$subnam', `sub_marks` = '$subMarks', `year` = '$subyear', `pass_marks` = $pass_marks, position='$position' WHERE `id` ='$EDTID'");


		

		if($qry)
		{
			$msg="<font color='#003300'>Record Inserted Successfully!!</font>";
		}
		else
		{
			$msg="<font color='#990000'>Sorry Record Not Inserted, Try Again....</font>";
		}

	}
}
$Id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : "";
$data = mysql_fetch_assoc(mysql_query("select * from pcf_subjts where id ='$Id'"));
?><div style="color:#000; font-size:15px; padding-left:20px;" align="left">
<script type="text/javascript" language="javascript">

var HttPRequest = false;
	   function crse(pat,val) 
	   {
		  
		  HttPRequest = false;
		  if (window.XMLHttpRequest) { // Mozilla, Safari,...
			 HttPRequest = new XMLHttpRequest();
			 if (HttPRequest.overrideMimeType) {
				HttPRequest.overrideMimeType('text/html');
			 }
		  } else if (window.ActiveXObject) { // IE
			 try {
				HttPRequest = new ActiveXObject("Msxml2.XMLHTTP");
			 } catch (e) {
				try {
				   HttPRequest = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {}
			 }
		  } 
 
		  if (!HttPRequest) {
			 alert('Cannot create XMLHTTP instance');
			 return false;
		  }
 
			var url = 'pcf_pattern.php';
			var pmeters = 'pat='+pat+'&val='+val;
			
			HttPRequest.open('POST',url,true);
 
			HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			HttPRequest.setRequestHeader("Content-length", pmeters.length);
			HttPRequest.setRequestHeader("Connection", "close");
			HttPRequest.send(pmeters);
 
 
			HttPRequest.onreadystatechange = function()
			{
 			
				  if(HttPRequest.readyState !=4)  // Loading Request
				  {
					
				    document.getElementById("lodr").style.display="block";	
					document.getElementById("hidpatrn").style.display="none";	
				  }
				  
 
				 if(HttPRequest.readyState ==4) // Return Request
				  { 
		              var response = HttPRequest.responseText;
				      document.getElementById("fdata").innerHTML = response;
				  }
 
			}
					document.getElementById("lodr").style.display="block";	
					document.getElementById("hidpatrn").style.display="none";	
	 }
</script>
<form action="index.php?pgnm=edt-subjct&id=<?php echo $Id; ?>" name="add_center" enctype="multipart/form-data" method="post" >
<input type="hidden" name="EdtID" value="<?php echo $Id;?>" />
<div class="form">&nbsp;</div>
<div class="filed" style="width:700px; padding-left:180px;"><?php echo $msg;?><span style="text-align:right; float:right;"><a href="index.php?pgnm=subjects"><strong>Back</strong></a></span></div>
<div class="form">Course :</div>
<div class="filed"><select name="course" id="course" onchange="crse(this.value,'usi');">
   <option  value="">--Select--</option>
    <?php 
   $sq=mysql_query("select * from pcf_prgm order by program asc");
   while($sr=mysql_fetch_object($sq))
   {
   ?>
    <option  value="<?php echo $sr->id?>" <?php if($data['course_id']==$sr->id){?> selected="selected"<?php } ?>  ><?php echo $sr->program?></option>
    <?php }?>
    </select></div>
<div class="blank"></div> 
<div id="fdata">
   <?php $crsid = mysql_fetch_assoc(mysql_query("select * from program where id ='".$data['course_id']."'")); ?>
<div class="form">Select <?php if($crsid['pattern']=="yr"){ ?>Year: <?php } else { ?> Semester: <?php } ?></div>
<div class="filed">
 
 <img src='loader.gif' id="lodr" align='left' style="display:none;" />
 <div id="hidpatrn">
<select name="year">
<option value="" >-- Select year --</option>
<?php 
if($crsid['pattern']=="yr"){ ?>
      <option value="1" <?php if($data['year']=='1'){?> selected="selected" <?php }?> >Ist Year</option>
      <option value="2" <?php if($data['year']=='2'){?> selected="selected" <?php }?> >IInd Year</option>
      <option value="3" <?php if($data['year']=='3'){?> selected="selected" <?php }?> >IIIrd Year</option>
        <option value="4" <?php if($data['year']=='4'){?> selected="selected" <?php }?> >IVth Year</option>
<?php } else { ?>
      <option value="1" <?php if($data['year']=='1'){?> selected="selected" <?php }?> >I - Semester</option>
      <option value="2" <?php if($data['year']=='2'){?> selected="selected" <?php }?> >II -  Semester</option>
      <option value="3" <?php if($data['year']=='3'){?> selected="selected" <?php }?> >III - Semester</option>
      <option value="4" <?php if($data['year']=='4'){?> selected="selected" <?php }?> >IV - Semester</option>
      <option value="5" <?php if($data['year']=='5'){?> selected="selected" <?php }?> >V - Semester</option>
      <option value="6" <?php if($data['year']=='6'){?> selected="selected" <?php }?> >VI - Semester</option>
      <option value="7" <?php if($data['year']=='7'){?> selected="selected" <?php }?> >VII - Semester</option>
      <option value="8" <?php if($data['year']=='8'){?> selected="selected" <?php }?> >VIII - Semester</option>
<?php } ?></select>
</div>
</div>
</div>

<div class="blank"></div>

<div class="form">Subject:</div>
<div class="filed"><input type="text" name="subject_name"  value="<?php echo $data['subject_name'];?>" size="32" /></div>
<div class="blank"></div>

<div class="form">Subject code:</div>
<div class="filed"><input type="text" name="subject_code" value="<?php echo $data['subject_code'];?>" size="32" /></div>
<div class="blank"></div>
<div class="form" >Max Marks</div>
<div class="filed" ><input type="text" cols="24" name="sub_marks" value="<?php echo $data['sub_marks'];?>"/></div>
<div class="blank"></div>
<div class="form" >Passing Marks</div>
<div class="filed" ><input type="text" cols="24" name="pass_marks" value="<?php echo $data['pass_marks'];?>"/></div>
<div class="blank"></div>

<div class="form" >Compulsory ? :</div>
<div class="filed"><select name="default_selected" id="default_selected" >
<option value="">Select Compulsory</option>
<option value="0" <?php if($data['default_selected']==0){ ?> selected="selected" <?php } ?>>No</option>
<option value="1" <?php if($data['default_selected']==1){ ?> selected="selected" <?php } ?>>Yes</option>
</select>
</div>
<div class="blank"></div>
<div class="form">View Position:</div>
<div class="filed">
<select name="position" id="position" >
<option value="0">Select position </option>
<option value="1" <?php if($data['position']=="1"){ ?> selected="selected" <?php } ?>>1</option>
<option value="2" <?php if($data['position']=="2"){ ?> selected="selected" <?php } ?>>2</option>
<option value="3" <?php if($data['position']=="3"){ ?> selected="selected" <?php } ?>>3</option>
<option value="4" <?php if($data['position']=="4"){ ?> selected="selected" <?php } ?>>4</option>
<option value="5" <?php if($data['position']=="5"){ ?> selected="selected" <?php } ?>>5</option>
<option value="6" <?php if($data['position']=="6"){ ?> selected="selected" <?php } ?>>6</option>
<option value="7" <?php if($data['position']=="7"){ ?> selected="selected" <?php } ?>>7</option>
<option value="8" <?php if($data['position']=="8"){ ?> selected="selected" <?php } ?>>8</option>
<option value="9" <?php if($data['position']=="9"){ ?> selected="selected" <?php } ?>>9</option>

</select>
</div>
<div class="blank"></div>


<div class="form">&nbsp;</div>
<div class="filed"><input name="submit" type="submit" value="Save"  class="button_cls" />&nbsp;&nbsp;<input name="reset" type="reset" value="Reset" class="reset_cls"/></div>
<div class="blank"></div>
</form>
 <script xml:space="preserve" type="text/javascript" language="JavaScript">//<![CDATA[
  var frmvalidator  = new Validator("add_center");
  frmvalidator.addValidation("subject_name","req","Please enter subject");
  frmvalidator.addValidation("subject_code","req","Please enter subject code");
  frmvalidator.addValidation("sub_marks","req","Please enter Subject marks.");
  frmvalidator.addValidation("pass_marks","req","Please enter subject passing marks.");
  frmvalidator.addValidation("position","dontselect=0","Please select view position of subject");
  frmvalidator.addValidation("course","dontselect=","Please select course");
  frmvalidator.addValidation("year","dontselect=","Please select year");
//]]></script>
</div>