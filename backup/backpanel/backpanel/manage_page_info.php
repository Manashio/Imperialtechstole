<link href="css/style.css" rel="stylesheet" type="text/css" />
<?php
include("include/paging.php");
	
	$data_action = $_REQUEST["action"];
	$pcode 		 = $_REQUEST["pcode"];
	if($data_action == 'deactivate')
	{
		 $file_array["page_status"] 	= "0";
		$result=$s->editRecord('pcf_pge_cntnt',$file_array,'page_id',$pcode);
	}
		if($data_action == 'activate')
	{
		$file_array["page_status"] 	= "1";
		$result=$s->editRecord('pcf_pge_cntnt',$file_array,'page_id',$pcode);
	}
	if($data_action == 'delete')
	{
		
			$result=$s->deletPerma_table_withCondition('pcf_pge_cntnt','page_id',$pcode);
		
	}
	$itemPerPage=30;

 		$records = "SELECT * FROM pcf_pge_cntnt order by page_id asc";
	
$qry=getPagingQuery($records, $itemPerPage);
$rs  =  mysql_query($qry);
$pageLink=getPagingLink($records, $itemPerPage,$qry,'');
$noUser = mysql_num_rows($rs);
?>
<form name="frx1" Conti_id="frx1" action="#" method="post">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="24%" class="pageheadTop">Manage Page Info </td>
            <td width="76%" class="headLink" align="right">&nbsp;</td>
          </tr>
		 
      </table></td>
    </tr>
    <tr>
      <td class="pHeadLine"></td>
    </tr>
    <tr>
      <td align="right"></td>
	  
    </tr>
    <tr>
      <td><?php 
			if($_REQUEST['result']=='2')
			{
				
					echo "<p class='success'>Your value sucessfully updated</p><br />";	
			}
		 if($_REQUEST['result']=='1')
				{
					echo "<p class='success'>Your value sucessfully saved</p><br />";	
				}
		if($data_action == 'delete')
				{
					echo "<p class='success'>Your value sucessfully deleted</p><br />";	
				}
					
if($_REQUEST['msg'] == 'add')
{
	echo "<p class='success'>Your value sucessfully saved </p> <br />";
}
else if($_REQUEST['msg'] == 'edit')
{
echo "<p class='success'>Your value sucessfully updated </p> <br />";
}


?></td>
    </tr>
    <tr>
      <td><table wConti_idth="100%" border="0" cellpadding="0" cellspacing="0" class="tblBorder">
          <tr>
            <td colspan="2" class="pagehead" style="margin:0; padding:0;" >
						  <?php 
  $numrows=mysql_num_rows($rs);
  if($numrows==""){
  echo "No records";
  }
  else {
  ?>
			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tblBorder">

  <tr bgcolor="#C6C6FF">
    <th width="78" height="35" >Sr.No.</th>
   <th width="175" height="35" >Page Title </th>
    <th width="181" height="35" align="center" >Status</th>
 <th width="96" height="35" >Edit</th>
     <?php if($_SESSION["Super_ADMIN"] =='1'){ ?><?php } ?>
  </tr>
  
 
<?php
  
  $i=1;
  while($row=mysql_fetch_object($rs)){
	  ?>
  
  <tr class="text" onmouseover="bgr_color(this, '#FFFF99')" onMouseOut="bgr_color(this, '')" >
    <td align="center"><?php echo $i; ?></td>
     <td width="175" ><?php if($row->page_title!=''){ echo $row->page_title; } else { echo "N/A"; } ?></td>
    <td align="center" width="181">
	<?php  if($row->page_status =="1"){?><img src="images/green.gif" title="Inactive" border="0"  />&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?pgnm=manage_page_info&action=deactivate&pcode=<?php echo $row->page_id;?>"><img src="images/red_light.gif" title="Inactive" border="0"  /></a>
<?php
	}
	else if($row->page_status =="0")
	{
 ?>
<a href="index.php?pgnm=manage_page_info&action=activate&pcode=<?php echo $row->page_id;?>"><img src="images/green_light.gif" title="Active" border="0"  /></a> &nbsp;&nbsp;&nbsp;<img src="images/red.gif" title="Inactive" border="0"  />
<?php		
	} 
?>	</td>
     
    <td width="96" ><a href="index.php?pgnm=update_page_info&action=edit&pcode=<?php echo $row->page_id;?>"><img src="images/e.gif" title="Edit" border="0"  /></a> </td>

 <?php if($_SESSION["Super_ADMIN"]=='1'){?>   
    <?php } ?>
  </tr>
  <?php  $i++; } ?>
</table>

			<?php } ?>
			</td>
          </tr>
         <tr>
		 <td colspan="10" align="center">
		 <?php echo $pageLink; ?>
		 </td>
		 </tr>
         
         
      </table></td>
    </tr>
  </table>
</form>
