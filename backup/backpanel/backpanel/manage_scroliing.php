<link href="css/style.css" rel="stylesheet" type="text/css" />
<?php
include("include/paging.php");
	
	$data_action = $_REQUEST["action"];
	$pcode 		 = $_REQUEST["pcode"];
	if($data_action == 'deactivate')
	{
		 $file_array["status"] 	= "0";
		$result=$s->editRecord('scroltxt',$file_array,'id',$pcode);
	}
	
	if($data_action == 'activate')
	{
		$file_array["status"] 	= "1";
		$result=$s->editRecord('scroltxt',$file_array,'id',$pcode);
	}
	if($data_action == 'delete')
	{
		
			$result=$s->deletPerma_table_withCondition('scroltxt','id',$pcode);
		
	}
	$itemPerPage=30;

 		$records = "SELECT * FROM scroltxt order by id asc";
	
$qry=getPagingQuery($records, $itemPerPage);
$rs  =  mysql_query($qry);
$pageLink=getPagingLink($records, $itemPerPage,$qry,'');
$noUser = mysql_num_rows($rs);
?>
<form name="frx1" id="frx1" action="#" method="post">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="24%" class="pageheadTop">Manage PDF File </td>
            <td width="76%" class="headLink" align="right">		
				<ul>
                <li><a href="index.php?pgnm=add_scrollingphp">Add PDF</a></li>
              </ul>
           
			</td>
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
      <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="tblBorder">
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

  <tr bgcolor="#666666">
    <th width="59" height="35" >Sr.No.</th>
   <th width="248" height="35" >Heading</th>
    <th width="442" height="35" >Description</th>

    <th height="35" >Status</th>
 <th width="73" height="35" >Edit</th>
     <?php if($_SESSION["Super_ADMIN"] =='1'){ ?><th width="89" height="35" >Delete</th><?php } ?>
  </tr>
  
 
<?php
  
  $i=1;
  while($row=mysql_fetch_object($rs)){
	  ?>
  
  <tr class="text" onmouseover="bgr_color(this, '#FFFF99')" onMouseOut="bgr_color(this, '')" >
    <td align="center"><?php echo $i; ?></td>
     <td style="text-align:center;"><?php if($row->PDF_Title!=''){ echo $row->PDF_Title; } else { echo "N/A"; } ?></td>
    <td style="text-align:left;"><img src="pdf.jpg"  border="0"  /></td>


	 
    <td align="center" width="81">
	<?php  if($row->status =="1"){?><img src="images/green.gif" title="Inactive" border="0"  />&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?pgnm=manage_scroliing&action=deactivate&pcode=<?php echo $row->id;?>"><img src="images/red_light.gif" title="Inactive" border="0"  /></a>
<?php
	}
	else if($row->status =="0")
	{
 ?>
<a href="index.php?pgnm=manage_scroliing&action=activate&pcode=<?php echo $row->id;?>"><img src="images/green_light.gif" title="Active" border="0"  /></a> &nbsp;&nbsp;&nbsp;<img src="images/red.gif" title="Inactive" border="0"  />
<?php		
	} 
?>
	</td>
     
    <td align="center"><a href="index.php?pgnm=update_scrolling&action=edit&pcode=<?php echo $row->id;?>"><img src="images/e.gif" title="Edit" border="0"  /></a> </td>

 <?php if($_SESSION["Super_ADMIN"]=='1'){?>   
    <td align="center"><a href="index.php?pgnm=manage_scroliing&action=delete&pcode=<?php echo $row->id;?>" onclick='return del();'><img src="images/x.gif" title="Delete" border="0"  /></a> </td><?php } ?>
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
