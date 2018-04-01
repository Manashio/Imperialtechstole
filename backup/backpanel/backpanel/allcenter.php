<?php

if(isset($_REQUEST['action'])=='delete')

{

	$id		= !empty($_REQUEST['id']) ? $_REQUEST['id'] : "";

	$sql	= mysql_query("delete from pcf_centres where id=$id");

	$sql2	= mysql_query("delete from pcf_centre_lgn where id=$id");

	if($sql)

	{

	$msg = "<font color='#006600'>Record deleted Successfully !!!</font>";

	

	}

	else

	{

	$msg= "<font color='#990000'>Record not deleted, Please Try Again !!!</font>";

	}

}

if($_REQUEST['action']=='ChangeStatus')

	{

		$pcode		= !empty($_REQUEST['pcode']) ? $_REQUEST['pcode'] : "";



		$rs_status = $s->getData_with_condition('pcf_centre_lgn','id',$pcode);

		if(mysql_num_rows($rs_status)>0)

		{

			$row_status = mysql_fetch_object($rs_status);

			if($row_status->accept == 'yes')

			{

				$fileArray["accept"] = 'no';

			}

			else if($row_status->accept == 'no')

			{

				$fileArray["accept"] = 'yes';

			}

			$result      = $s->editRecord('pcf_centre_lgn',$fileArray,'id',$pcode);

			if($result==0)

			{

			$msg = "<font color='#006600'>Status Changed Successfully !!!</font>";

			

			}

			else

			{

			$msg= "<font color='#990000'>status not Changed, Please Try Again !!!</font>";

			}

		}

	}

if($_REQUEST['action']=='StudntPermission')

	{

		

		$pcode		= !empty($_REQUEST['pcode']) ? $_REQUEST['pcode'] : "";



		$rs_status = $s->getData_with_condition('pcf_centres','id',$pcode);

		if(mysql_num_rows($rs_status)>0)

		{

			$row_status = mysql_fetch_object($rs_status);

			if($row_status->upload_studnt == '1')

			{

				$fileArray["upload_studnt"] = '0';

			}

			else if($row_status->upload_studnt == '0')

			{

				$fileArray["upload_studnt"] = '1';

			}

			$result      = $s->editRecord('pcf_centres',$fileArray,'id',$pcode);

			if($result==0)

			{

			$msg = "<font color='#006600'>Status Changed Successfully !!!</font>";

			

			}

			else

			{

			$msg= "<font color='#990000'>status not Changed, Please Try Again !!!</font>";

			}

		}

	}

?>

<div style="color:#000; font-size:15px;" align="center">

<table width="99%" border="0"  >

   				<tr><td colspan="7" align="center"><p>

   				 <?php echo @$msg; ?>

   				</p></td></tr>

                <tr>

   				  <td colspan="2" align="left" style="text-decoration:underline;"><strong>All Centers Details</strong></td>

                

                  <td colspan="5" align="right"><?php if($_SESSION['admintyp']!='partner'){?><a href="index.php?pgnm=insert-center" style="font-weight:bold; font-size:16px;">Add Center</a><?php } ?></td>

                  </tr>

   				<tr>

   				  <td colspan="7" align="left" >&nbsp;</td></tr>

   				

		

              </table>

<form action="" name="sampleform"  method="post">

                <table width="99%" border="0"  >

   				

               

		

                <tr>

                <td colspan="7">

           <table width="99%" border="1" cellpadding="0" cellspacing="0" >     

<tr bgcolor="#CCCCCC">

    <td width="8%" align="center"><p><strong>Sr.no</strong> </p></td>

    <td width="11%" align="center"><p><strong>Username</strong> </p></td>

    <td width="9%" align="center"><p><strong>Password</strong> </p></td>

    <td width="9%" align="center"><p><strong>State</strong> </p></td>

    <td width="12%" align="center"><p><strong>Institute Name</strong></p> </td>

    <td width="12%" align="center"><p><strong>View Details</strong></p> </td>

    <td width="11%" align="center"><p><strong>Upload and Editing Student</strong></p> </td>

    <td width="9%" align="center"><p><strong>Status</strong></p> </td>

    <?php if($_SESSION['admintyp']!='partner'){?>

	<td width="7%" align="center"><p><strong>Action</strong></p> </td><?php } ?>

</tr>

<?php

$rowsperpage=15;

$pagenumber=1;

$count=1;

if(isset($_REQUEST['page']))

{

$pagenumber=$_REQUEST['page'];

}

//counting the offset

$offset=($pagenumber-1) * $rowsperpage;



 

?>



<?php

$i=1;

$wherClse = "order by id desc LIMIT $offset , $rowsperpage";

$data_p = $s->getDataWithCondition('pcf_centres',  $wherClse);



mysql_query("select * from pcf_centres ");



while($row = mysql_fetch_object($data_p))

{	   

$getlogindtl = @mysql_fetch_assoc(mysql_query("select user_name,password,accept from pcf_centre_lgn where id='".$row->id."'"));

?>

<tr style="font-size:12px;" <?php if($getlogindtl['accept']=="no"){?> bgcolor="#FFF0F0"<?php } ?>>

<td align="center"><p><?php echo $i++;?> </a></p></td>

<?php 







 

?>

<td><p><?php $usrNam =  wordwrap($getlogindtl['user_name'], 10, "\n", true); echo "$usrNam"; ?></p> </td>

<td><p><?php echo $getlogindtl['password']; ?></p> </td>



<td><p><?php echo $row->state; ?></p> </td>

<td><p><?php echo $row->institute_name; ?></p> </td>

<td align="center"><strong><a href="index.php?pgnm=view_centers&cid=<?php echo $row->id;?>">View</a></strong> </td>

<td align="center"><?php 

	if($row->upload_studnt =="1")

	{

?>
  
  <img src="images/green.gif" title="Active" border="0"  /> &nbsp; &nbsp;<?php if($_SESSION['admintyp']!='partner'){?>
  
  <a href="index.php?pgnm=allcenter&action=StudntPermission&pcode=<?php echo $row->id;?>&page=<?php echo $pagenumber;?>"><?php } else { echo "<a>"; } ?><img src="images/red_light.gif" title="Inactive" border="0"  /></a>
  
  <?php

	}

	else if($row->upload_studnt =="0")

	{

 if($_SESSION['admintyp']!='partner'){?>
  
  <a href="index.php?pgnm=allcenter&action=StudntPermission&pcode=<?php echo $row->id;?>&page=<?php echo $pagenumber;?>"><?php } else { echo "<a>"; } ?><img src="images/green_light.gif" title="Active" border="0"  /></a> &nbsp; &nbsp;
  
  <img src="images/red.gif" title="Inactive" border="0"  />
  
  <?php		

	}

?>	</td>

<td align="center"><?php 

	if($getlogindtl['accept'] =="yes")

	{

?>

<img src="images/green.gif" title="Active" border="0"  /> &nbsp; &nbsp;<?php if($_SESSION['admintyp']!='partner'){?>

<a href="index.php?pgnm=allcenter&action=ChangeStatus&pcode=<?php echo $row->id;?>&page=<?php echo $pagenumber;?>"><?php } else { echo "<a>"; } ?><img src="images/red_light.gif" title="Inactive" border="0"  /></a>

<?php

	}

	else if($getlogindtl['accept'] =="no")

	{

 if($_SESSION['admintyp']!='partner'){?>

<a href="index.php?pgnm=allcenter&action=ChangeStatus&pcode=<?php echo $row->id;?>&page=<?php echo $pagenumber;?>"><?php } else { echo "<a>"; } ?><img src="images/green_light.gif" title="Active" border="0"  /></a> &nbsp; &nbsp;

<img src="images/red.gif" title="Inactive" border="0"  />

<?php		

	}

?>	</td><?php if($_SESSION['admintyp']!='partner'){?>

<td align="center"><p style="padding-bottom:10px 0;"><a href="index.php?pgnm=update-center&cid=<?php echo $row->id;?>"><img src="images/e.gif" title="Edit" border="0"  /></a>

  <?php   if($_SESSION["Super_ADMIN"]=='1'){?>

&nbsp; &nbsp;

<a href="index.php?pgnm=allcenter&id=<?php echo $row->id; ?>&action='delete'"  onclick="return confirm ('Are you sure want to delete this entry?')"> <img src="images/x.gif" title="Delete" border="0"  /></a></p>  <?php } ?></td><?php } ?>

</tr>

<?php



}?></table>

<tr>

<td colspan="7" align="center"> 

<?php





$query="select * from pcf_centres  ";

$result=mysql_query($query) or die ('Error, Query failed');

$numberofrows=mysql_num_rows($result);

//creating number of pages 

$maxpage=ceil($numberofrows/$rowsperpage);

//creating a link to acces path of each pages

$self = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ;

$nav=" ";

for($page=1;$page<=$maxpage;$page++)

{

if($page==$pagenumber)

{

if($maxpage!=''){

		@$nav .= " $page ";

	}

}

else

{

@$nav .= "&nbsp; <a href=\"$self?pgnm=allcenter&page=$page&country=$country \">$page</a> &nbsp;";

}

}

if($pagenumber > 1)

{

$page=$pagenumber-1;

$prev= "&nbsp;<a href=\" $self?pgnm=allcenter&page=$page&country=$country\" >Perv</a>&nbsp;";

$first= "&nbsp;<a href=\" $self?pgnm=allcenter&page=1&country=$country\" >First</a>&nbsp;";

}

else

{

$perv= "&nbsp;";

$first= "&nbsp;";

}

if($pagenumber < $maxpage)

{

@$page=$pagenumber+1;

@$next= "&nbsp;<a href=\" $self?pgnm=allcenter&page=$page&country=$country\" >Next</a>&nbsp;";

@$last= "&nbsp;<a href=\" $self?pgnm=allcenter&page=$maxpage&country=$country\" >Last</a>&nbsp;";

}

else

{

$next= "&nbsp;";

$last= "&nbsp;";

}

?>

<div style="" align="center"><?php   if($maxpage!=''){ echo @$first.@$next.@$nav.@$prev.@$last; } ?></div>

</td></tr>



 </td></tr>

 

</table>



				</form>

                </div>