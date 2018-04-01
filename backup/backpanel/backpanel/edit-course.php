<?php
$Id= $_REQUEST['id'];
if(isset($_REQUEST['submit']))
{
$stream		= $_REQUEST['stream'];
$post		= $_REQUEST['post'];
$program	= $_REQUEST['program'];
$pattern	= $_REQUEST['pattern'];
$qry		= mysql_query("UPDATE `pcf_prgm` SET `program` = '$program' , `pattern`='$pattern', stream='$stream', year_of_stream='$post' WHERE id ='$Id'");

if($qry)
{
	   
$msg="<font color='#006600'>Record Inserted Successfully!!</font>";
}
else
{
$msg="<font color='#990000'>Sorry Record Not Inserted, Try Again....</font>";
}

}

$data = mysql_fetch_assoc(mysql_query("select * from pcf_prgm where id ='$Id'"));
?>

<script>
var HttPRequest = false;
	   function seldiplo(pat) 
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
 
			var url = 'tpCrs.php';
			var pmeters = 'pat='+pat;
			
			HttPRequest.open('POST',url,true);
 
			HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			HttPRequest.setRequestHeader("Content-length", pmeters.length);
			HttPRequest.setRequestHeader("Connection", "close");
			HttPRequest.send(pmeters);
 
 
			HttPRequest.onreadystatechange = function()
			{
 			
				if(HttPRequest.readyState !=4)  // Loading Request
				  {
					
					document.getElementById("fdata").innerHTML = "<img src='loader.gif'/>";
					
				  }
				  
 
				 if(HttPRequest.readyState ==4) // Return Request
				  { 
		              var response = HttPRequest.responseText;
				      document.getElementById("fdata").innerHTML = response;
				  }
 
			}
					
	 }
</script>
<div style="color:#000; font-size:15px;" align="left">
<div class="icon_box">
<form action="index.php?pgnm=edit-course&id=<?php echo $Id;?>" enctype="multipart/form-data" method="post" name="edtcorse" >
<div style="float:left; width:910px; height:28px;"><?php echo $msg;?><span style="float:right; text-align:right;"><a href="index.php?pgnm=courses"><strong>Back</strong></a></span></div>
<div class="blank"></div>
<div class="form">Stream:</div>
<div class="filed">
<select name="stream" id="stream" onchange="seldiplo(this.value);" >
<option value="0">Select Stream </option>
<option value="art" <?php if($data['stream']=="art"){ ?> selected="selected" <?php } ?>>ARTS</option>
<option value="comm" <?php if($data['stream']=="comm"){ ?> selected="selected" <?php } ?>>COMMERCE</option>
<option value="science" <?php if($data['stream']=="science"){ ?> selected="selected" <?php } ?>>SCIENCE</option>
<option value="COMPUTER_SCIENCE" <?php if($data['stream']=="COMPUTER_SCIENCE"){ ?> selected="selected" <?php } ?>>COMPUTER SCIENCE</option>
<option value="ENGINEERING" <?php if($data['stream']=="ENGINEERING"){ ?> selected="selected" <?php } ?>>ENGINEERING</option>
<option value="MANAGMENT" <?php if($data['stream']=="MANAGMENT"){ ?> selected="selected" <?php } ?>>MANAGMENT</option>
<option value="LAW" <?php if($data['stream']=="LAW"){ ?> selected="selected" <?php } ?>>LAW</option>
<option value="DIPLOMA" <?php if($data['stream']=="DIPLOMA"){ ?> selected="selected" <?php } ?>>DIPLOMA</option>

</select>
</div>
<div class="blank"></div>
<div class="form">Year of course:</div>
<div class="filed">
<div id="fdata">
<select name="post" id="post" >
<option value="0">Select post </option>
<?php if($data['stream']=="DIPLOMA"){ ?> 
<option value="dip_1"  <?php if($data['year_of_stream']=="dip_1"){ ?> selected="selected" <?php } ?>>ONE</option>
<option value="dip_2"  <?php if($data['year_of_stream']=="dip_2"){ ?> selected="selected" <?php } ?> >TWO</option>
<option value="dip_3"  <?php if($data['year_of_stream']=="dip_3"){ ?> selected="selected" <?php } ?>>THREE</option>
<?php } else {?>
<option value="ug" <?php if($data['year_of_stream']=="ug"){ ?> selected="selected" <?php } ?>>UNDERGRADUATE</option>
<option value="pg" <?php if($data['year_of_stream']=="pg"){ ?> selected="selected" <?php } ?>>POST GRADUATE</option>
<option value="rp" <?php if($data['year_of_stream']=="rp"){ ?> selected="selected" <?php } ?>>Research Programe</option>
<?php } ?>
</select>
</div>
</div>
<div class="blank"></div>
<div class="form">Course:</div>
<div class="filed"><input type="text" name="program" id="program" value="<?php echo $data['program'];?>" size="20" /></div>
<div class="blank"></div>
<div class="form">Pattern:</div>
<div class="filed"><select name="pattern" id="pattern" >
<option value="">Select Pattern </option>
<option value="yr" <?php if($data['pattern']=="yr"){ ?> selected="selected" <?php } ?> >Year</option>
<option value="sem" <?php if($data['pattern']=="sem"){ ?> selected="selected" <?php } ?> >Semester</option>
</select></div>
<div class="blank"></div>
<div class="form">&nbsp;</div>
<div class="filed"><input name="submit" type="submit"  class="button_cls" value="Save" />&nbsp;&nbsp;&nbsp;<input name="reset" type="reset" class="reset_cls" value="Reset"/></div>

</form>
 <script xml:space="preserve" type="text/javascript" language="JavaScript">//<![CDATA[
  var frmvalidator  = new Validator("edtcorse");
    frmvalidator.addValidation("stream","dontselect=0","Please select stream");
  frmvalidator.addValidation("post","dontselect=0","Please select year of course");

  frmvalidator.addValidation("program","req","Please enter course name");
  

//]]></script>
</div>

</div>