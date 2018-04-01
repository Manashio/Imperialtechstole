<?php
	$data_action = $_REQUEST["action"];
	$pcode		 = $_REQUEST["pcode"];	
	
	 
	if($_REQUEST['action']=='ChangeStatus')
	{
		$rs_status = $s->getData_with_condition('pcf_adm_lgn','admin_id',$pcode);
		if(mysql_num_rows($rs_status)>0)
		{
			$chksuperadmin	=	mysql_fetch_assoc(mysql_query("select * from pcf_adm_lgn where admin_id = '".$pcode."'"));
			if($chksuperadmin['user_type']!="super admin") 
			{
				$row_status = mysql_fetch_object($rs_status);
			if($row_status->admin_status == '1')
			{
				$fileArray["admin_status"] = '0';
			}
			else if($row_status->admin_status == '0')
			{
				$fileArray["admin_status"] = '1';
			}
			$result      = $s->editRecord('pcf_adm_lgn',$fileArray,'admin_id',$pcode);
			
				$s->pageLocation("index.php?pgnm=admin_manager&action=ChangeDone&result=$result"); 
			}
			else 
			{
				$s->pageLocation("index.php?pgnm=admin_manager&action=ChangeDone&result=0"); 
			}
			
		}
	}
?>
<form name="frx1" id="frx1" method="post" action="#">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="24%" class="pageheadTop">Admin Manager</td>
        <td width="76%" class="headLink">
		<?php if($_SESSION["Super_ADMIN"]=='1'){ ?>
		<ul>
          <li><a href="index.php?pgnm=add_admin&action=add_new">Add New Admin </a></li>
        </ul>
		<?php } ?>
		
		
		</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td class="pHeadLine"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
<tr><td>
<?php 
		if($_REQUEST['action']=='ChangeDone')
		{
			$result = $_REQUEST['result'];
			if($result==0)
			{
				echo "<p class='success'>Status Change Successfully</p><br />";	
			}
			else if($result==1)
			{
				echo "<p class='error'>Status Changing Fails</p><br />";	
			}
		}
		if($data_action=='delete')
		{
			$chkadm	=	$s->getData_with_condition('pcf_adm_lgn','admin_id',$pcode);
			$chksuperadmin	=	mysql_fetch_assoc($chkadm);
			
			if($chksuperadmin['user_type']!="super admin") 
			{
				$result = $s->deletePerma_table_withCondition('pcf_adm_lgn','admin_id',$pcode);	
					if($result)
					{
						echo "<p class='success'>".record_delete."</p><br />";	
					}
					else 
					{
						echo "<p class='error'>".record_not_delete."</p><br />";	
					}
			}
			else
			{
				echo "<p class='error'>".record_not_delete."</p><br />";	
			}
			
		}
		if($_REQUEST['action']=='update')
		{
			 if($result==0)
			{
				echo "<p class='success'>".record_update."</p><br />";	
			}
			else if($result==1)
			{
				echo "<p class='error'>".record_not_update."</p><br />";	
			}
		}
	    if($_REQUEST['action']=='insert')
		{
			 if($result==0)
			{
				echo "<p class='success'>".record_added."</p><br />";	
			}
			else if($result==1)
			{
				echo "<p class='error'>".record_not_added."</p><br />";	
			}
			
		}
	?>	</td></tr>	
<tr><td valign="top" class="pagecontent">
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tblBorder">


<tr><td>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
<?php 

		if($_SESSION["Super_ADMIN"]=='1')
		{
			  $rs  = $s->getData_without_any_condition('pcf_adm_lgn');
		}
		else
		{
			 $id = $_SESSION["adminid"];
		  	 $rs= mysql_query("SELECT * FROM pcf_adm_lgn WHERE admin_id = $id");
			
			
		}
	if(mysql_num_rows($rs)>0)
	{
?>
<tr class="head">
<td width="2%" align="center"  >ID</td>
<td width="10%" class="pad" >Admin Name (Username) </td>
<td width="10%" class="pad">Name</td>

<td width="9%" class="pad">Admin Email </td>
<td width="10%" class="pad">User Validity </td>
<td width="10%" class="pad">admin user address </td>
<td width="11%" class="pad" >User/Admin Type </td>
<?php if($_SESSION["Super_ADMIN"]=='1'){ ?>
<td width="8%" align="center">Status</td>
<?php } ?>
<td width="9%" align="center">Action</td>
</tr>
<?php 
		$i=1;
		while($row = mysql_fetch_object($rs))
		{
?>
<tr class="text" align="left" onmouseover="bgr_color(this, '#FFFF99')" onMouseOut="bgr_color(this, '')">
<td width="2%" align="center"> <?php echo $row->admin_id;?></td>
<td width="10%" class="pad"> <?php echo $row->username;?></td>
<td width="10%" class="pad"> <?php echo ucfirst($row->name);?></td>
<td width="10%" class="pad"> <?php echo $row->admin_email;?></td>

<td width="10%" class="pad"><?php $admindate=$row->admin_validity; echo date('d-m-Y',strtotime($admindate));?></td>

<td width="11%" class="pad"><?php echo $row->address;?></td>
<td width="11%" class="pad"><?php echo $row->user_type;?></td>
<?php if($_SESSION["Super_ADMIN"]=='1'){ ?>
<td width="8%" align="center">


<?php 
	
			 if($row->admin_type=="super admin")
			 {  ?>
			<img src="images/green.gif" title="Active" border="0"  />&nbsp; &nbsp; &nbsp;<img src="images/red_light.gif" title="Inactive" border="0"  />
	   <?php }
	       else {
			 
			 if($row->admin_status =="1")
				{?>

<img src="images/green.gif" title="Active" border="0"  /> &nbsp; &nbsp;
<a href="index.php?pgnm=admin_manager&action=ChangeStatus&pcode=<?php echo $row->admin_id;?>"><img src="images/red_light.gif" title="Inactive" border="0"  /></a>
<?php
	}
	 if($row->admin_status =="0")
	{
?>
<a href="index.php?pgnm=admin_manager&action=ChangeStatus&pcode=<?php echo $row->admin_id;?>"><img src="images/green_light.gif" title="Active" border="0"  /></a> &nbsp; &nbsp;
<img src="images/red.gif" title="Inactive" border="0"  />
<?php		
	}
	}
	
	
?>


</td>
<?php } ?>
<td width="9%" align="center">

<a href="index.php?pgnm=add_admin&action=edit&pcode=<?php echo $row->admin_id;?>">
<img src="images/e.gif" title="Edit" border="0"  /></a> &nbsp; &nbsp;
<?php  if($_SESSION["Super_ADMIN"]=='1')
		{ 
			 if($row->admin_type=="super admin")
			 {  ?>
			 <img src="images/x.gif" title="Delete" border="0"  />
			 <?php } else {?>
			 <a href="index.php?pgnm=admin_manager&action=delete&pcode=<?php echo $row->admin_id;?>" onclick='return del();' ><img src="images/x.gif" title="Delete" border="0"  /></a><?php } } ?>




</tr>
<?php 
		}
	}
	else
	{
?>
<tr class='text'><td colspan='69' class='redstar'> &nbsp; No record present in database.</td></tr> 
<?php 
	}
?>

</table>
</td></tr>
</table>
</td></tr>
</table>
</form>