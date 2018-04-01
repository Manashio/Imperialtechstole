<?php 
include("include/flsdb.php");
if($_REQUEST['pat']!='DIPLOMA'){ ?>

<select name="post" id="post" onchange="getVal(this.value);">
<option value="0" selected="selected">Select Post </option>
<?php 
	  if($_REQUEST['pat']!='secondary'){ 
	  $getStreamData=mysql_query("select * from pcf_stdrd where id =2"); 
	  while($stndrdData = mysql_fetch_object($getStreamData)){
 ?>
<option value="<?php echo $stndrdData->id;?>"><?php echo $stndrdData->stadrd;?></option>
<?php } ?>
<option value="ug">UNDERGRADUATE</option>
<option value="pg" >POST GRADUATE</option>
<option value="rp">Research Programe</option>
<?php } else {?>
	<option value="1">Secondry</option>
<?php }?>
</select>
<?php }  else { ?>
<select name="post" id="post" >
<option value="0">Select Year </option>
<option value="dip_1">ONE</option>
<option value="dip_2" >TWO</option>
<option value="dip_3">THREE</option>
</select>
<?php } ?>