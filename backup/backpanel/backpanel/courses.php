<?php
include("include/cours.php");
	
if(isset($_REQUEST['action'])=='delete')
{
	$id		= !empty($_REQUEST['id']) ? $_REQUEST['id'] : "";
	
	$delSubjt = mysql_query("delete from pcf_subjts where course_id=$id");
	$sql=mysql_query("delete from pcf_prgm where id=$id");
	if($sql)
	{
		$msg = "<font color='#006600'>Record deleted Successfully !!!</font>";
	
	}
	else
	{
		$msg= "<font color='#990000'>Record not deleted, Please Try Again !!!</font>";
	}
}
		
$course=!empty($_REQUEST['course']) ? $_REQUEST['course'] : "";
$itemPerPage=15;
if($course!=''){
$records = "select * from pcf_prgm where id = '".$course."' order by program asc";
}
else
{
$records = "select * from pcf_prgm order by program  asc";
	
}
$qry		= getPagingQuery($records, $itemPerPage);
$qr      	= mysql_query($qry);
$pageLink	= getPagingLink($records, $itemPerPage,$qry,'');
$pageLink = $pageLink;	
$numData = mysql_num_rows($qr);
?><form action="" method="post">
<table width="100%" border="0"  style="color:#333; font-size:14px;">
   				<tr><td colspan="6" align="center"><p>
   				 <?php echo @$msg; ?>
   				</p></td></tr>
                <tr>
   				  
                  
                  <td colspan="6">Filter Course ::&nbsp;<select name="course" onchange="this.form.submit()">
   <option  value="">--Select--</option>
   <?php 
     $sq=mysql_query("select * from pcf_prgm order by program asc");
   while($sr=mysql_fetch_object($sq))
   {
   ?>
    <option  value="<?php echo $sr->id;?>" <?php if($course==$sr->id){?> selected="selected" <?php }?>><?php echo $sr->program?> 
    
     <?php if($sr->year_of_stream=="dip_1"){ echo " - I"; } else if($sr->year_of_stream=="dip_2"){ echo " - II"; } else if($sr->year_of_stream=="dip_3"){ echo " - III"; } else if($sr->year_of_stream=="ug"){ echo " - UNDERGRADUATE"; } else if($sr->year_of_stream=="pg"){ echo " - POST GRADUATE"; } else if($sr->year_of_stream=="rp"){ echo " - Research pcf_prgme"; } else if($sr->stream=="art") { echo " - ARTS"; } else if($sr->stream=="comm") { echo " - COMMERCE"; }else if($sr->stream=="science") { echo " - SCIENCE"; } ?>

    
    </option>
    <?php }?>
    </select> 
                  </td>
                  </tr>
   				
   				<tr>
                
   				  
                  
    <td width="39%" colspan="6" align="right"><?php if($_SESSION['admintyp']!='partner'){?><a href="index.php?pgnm=ad-corse" style="font-weight:bold; font-size:16px;">Add Course</a> <?php } ?></td>
 				  </tr>
		
                <tr>
                <td colspan="6">
           <table  border="1" cellpadding="0" cellspacing="0" width="100%" >     
<tr bgcolor="#CCCCCC">
  					<td width="12%" align="center"><p><strong>Sr. No.</strong> </p></td>
					<td width="38%" align="center"><p><strong>Course</strong></p> </td>
                    <td width="20%" align="center"><p><strong>Stream</strong></p> </td>
                    <td width="20%" align="center"><p><strong>Pattern</strong></p> </td>
					<?php if($_SESSION['admintyp']!='partner'){?><td width="16%" align="center"><p><strong>Update</strong></p> </td>
					
                      <?php   if($_SESSION["Super_ADMIN"]=='1'){?>
                    <td width="14%" align="center"><p><strong>Delete</strong></p> </td><?php } }?>
</tr>
	<tr>&nbsp;</tr>
<?php
$i=1;
if($numData!=0){
while($row = mysql_fetch_object($qr))
{	   

?>
<tr>
<td align="center"><p><?php echo $i++;?> </a></p></td>
    <td align="center"><p><?php echo $row->program; ?></p> </td>
  <td align="center"><p>
 <?php if($row->year_of_stream=="dip_1"){ echo "ONE"; } else if($row->year_of_stream=="dip_2"){ echo "TWO"; } else if($row->year_of_stream=="dip_3"){ echo "THREE"; } else if($row->year_of_stream=="ug"){ echo "UNDERGRADUATE"; } else if($row->year_of_stream=="pg"){ echo "POST GRADUATE"; } else if($row->year_of_stream=="rp"){ echo "Research Program"; } else if($row->stream=="art") { echo "ARTS"; } else if($row->stream=="comm") { echo "COMMERCE"; }else if($row->stream=="science") { echo "SCIENCE"; } else if($row->stream=="secondary") { echo "SECONDARY"; }?>
  
  </p> </td>
        <td align="center"><p><?php if($row->pattern=="yr"){ echo "Year"; } if($row->pattern=="sem"){ echo "Semester"; } ?></p> </td>
        <?php if($_SESSION['admintyp']!='partner'){?>
 <td align="center"><p><a href="index.php?pgnm=edit-course&id=<?php echo $row->id;?>"><img src="images/e.gif" title="Edit" border="0"  /></a></p></td>
	  <?php   if($_SESSION["Super_ADMIN"]=='1'){?> 
	 <td align="center"><p><a href="index.php?pgnm=courses&id=<?php echo $row->id; ?>& action='delete'" onclick="return confirm ('Are you sure want to delete this entry?')"> <img src="images/x.gif" title="Delete" border="0"  /></a></p> </td> <?php } }?>
</tr>
<?php

}} else {?>
<tr>
<td colspan="6">No records.</td>
</tr>
<?php } ?>
</table>
<tr>
<td colspan="6" align="center"> 

<div style="" align="center"><?php   echo $pageLink;  ?></div>
</td></tr>

 </td></tr>
 
</table></form>