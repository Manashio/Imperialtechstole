<link href="css/style.css" rel="stylesheet" type="text/css" />
<?php
include("include/paging.php");
	
	$data_action = $_REQUEST["action"];
	$pcode 		 = $_REQUEST["pcode"];
	if($data_action == 'deactivate')
	{
		 $file_array["status"] 	= "0";
		$result=$s->editRecord('manage_link',$file_array,'ID',$pcode);
	}
		if($data_action == 'activate')
	{
		$file_array["status"] 	= "1";
		$result=$s->editRecord('manage_link',$file_array,'ID',$pcode);
	}
	if($data_action == 'delete')
	{
		
			$result=$s->deletPerma_table_withCondition('manage_link','ID',$pcode);
		
	}
	$itemPerPage=500;

 		$records = "SELECT * FROM manage_link order by ID asc";
	
$qry=getPagingQuery($records, $itemPerPage);
$rs  =  mysql_query($qry);
$pageLink=getPagingLink($records, $itemPerPage,$qry,'');
$noUser = mysql_num_rows($rs);
?>
<form name="frx1" ID="frx1" action="#" method="post">

  <table wIDth="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><table wIDth="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td wIDth="24%" class="pageheadTop">Manage pdf link </td>
            <td wIDth="76%" class="headLink" align="right">		
				<ul>
                <li><a href="index.php?pgnm=add_pdf">Upload PDF</a></li>
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
      <td><table wIDth="100%" border="0" cellpadding="0" cellspacing="0" class="tblBorder">
          <tr>
            <td colspan="2" class="pagehead" style="margin:0; padding:0;" >
						  <?php 
  $numrows=mysql_num_rows($rs);
  if($numrows==""){
  echo "No records";
  }
  else {
  ?>
			<table wIDth="100%" border="0" cellpadding="0" cellspacing="0" class="tblBorder">

  <tr bgcolor="#C6C6FF">
    <th wIDth="59" height="35" >Sr.No.</th>
   <th wIDth="248" height="35" >link</th>
    <?php if($_SESSION["Super_ADMIN"] =='1'){ ?><th wIDth="89" height="35" >Delete</th><?php } ?>
  </tr>
  
 
<?php
  
  $i=1;
  while($row=mysql_fetch_object($rs)){
	  ?>
  
  <tr class="text" onmouseover="bgr_color(this, '#FFFF99')" onMouseOut="bgr_color(this, '')" >
    <td align="center"><?php echo $i; ?></td>
     <td style="text-align:center;"><?php  echo "http://imperialtechsol.com/".LTRIM($row->images,'./'); ?></td>
    <?php if($_SESSION["Super_ADMIN"]=='1'){?>   
    <td align="center"><a href="index.php?pgnm=manage_pdf&action=delete&pcode=<?php echo $row->ID;?>" onclick='return del();'><img src="images/x.gif" title="Delete" border="0"  /></a> </td><?php } ?>
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
