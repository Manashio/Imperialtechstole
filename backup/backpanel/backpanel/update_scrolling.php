<?php 
$msg =!empty($_REQUEST['msg']) ? $_REQUEST['msg'] : "";
$id=$_REQUEST['pcode'];
$query=mysql_query("select * from scroltxt where id='$id'");
$row=mysql_fetch_object($query);

	if(isset($_POST['Submit']))
	{

	$status=$_REQUEST['status'];
	$title=mysql_real_escape_string(trim($_REQUEST['title']));
	$description=mysql_real_escape_string(trim($_REQUEST['description']));
 	
	$sql = mysql_query("update scroltxt set link='$title',description='$description',status='$status' where id=$id ");
 
	if($sql)
		{
		?>
    <script>
			window.location='index.php?pgnm=manage_scroliing&result=1';
	</script>
    <?php
		}
		else
		{
		?>
    <script>
			window.location='index.php?pgnm=manage_scroliing&result=0';
	</script>
    <?php
		}
}
?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>

    <td>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

        <tr>

          <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="border">

              <tr>

                <td>
					<p>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="24%" class="pageheadTop">Update Scrolling Text </td>
            <td width="76%" class="headLink" align="right">		
			<ul>
                <li><a href="index.php?pgnm=manage_scroliing">Back</a></li>
                </ul>
			</td>
          </tr>
		  <tr>
      <td colspan="2" class="pHeadLine"></td>
    </tr>
    <tr>
      <td colspan="2" align="right"></td>
	  
    </tr>
      </table>
				  </p>

				<form name="form1" action="" enctype="multipart/form-data" method="post" >

				<p><table width="100%" align="left" border="0" cellspacing="0" cellpadding="0">

    <tr>
    
    <td colspan="4"><p><?php echo $msg; ?></p></td>
    </tr>
 <tr>
    <td><p><strong>Link</strong><strong>:</strong></p></td>
    <td align="center"></td>
    <td><input type="text" size="49" name="title" value="<?php echo $row->link; ?>" ><font style="font-size:12px; color:#F00;">Please use "www." in link for exmp: (www.google.com")</font></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <td><p><strong>Description</strong><strong>:</strong></p></td>
    <td align="center"></td>
    <td><textarea rows="5" name="description" cols="50"><?php echo $row->description; ?></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    
    <tr>
      <td>&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr> <tr>
    <td><p><strong>Status</strong><strong>:</strong></p></td>
    <td align="center"></td>
    <td>	<select name="status" id="status" class="inpuTxt">
			<option value="1" <?php if($row->status == "1"){ echo "selected='selected'";}?>>Active</option>
			<option value="0" <?php if($row->status == "0"){ echo "selected='selected'";}?>>Inactive</option>
		</select>	</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <!--<tr>
      <td><p><strong>Grade</strong></p></td>
      <td align="center"><strong>:</strong></td>
      <td><input type="text" name="grade" /></td>
    </tr>
    <tr>-->
    <td>&nbsp;</td>
    <td colspan="2" align="left"><input type="submit" name="Submit" value="Submit" /></td>
    </tr>

</table>

				</p> </form></td>
              </tr>

            </table>
          <p>&nbsp;</p></td>
        </tr>
      </table>

      <table width="996" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td><img src="images/admin/spacer.gif" width="4" height="11" /></td>
        </tr>
      </table>
      <table width="996" border="0" align="center" cellpadding="0" cellspacing="0" class="boreder1">
        <tr>
          <td><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:10px;">
              <tr>
                <td><p>&nbsp;</p></td>
                <td align="right"></td>
              </tr>
          </table>
    <br /></td>
  </tr>
</table></td>

  </tr>

</table>