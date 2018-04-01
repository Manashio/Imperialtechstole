<script type="text/javascript" src="ckeditor/plugins/ckeditor_wiris/core/display.js"></script>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		      <script src="js/jquery-1.3.2.min.js"></script>
   
        <script src="js/jquery.js"></script>
<?php 
$msg =!empty($_REQUEST['msg']) ? $_REQUEST['msg'] : "";
$id=$_REQUEST['pcode'];
$query=mysql_query("select * from pcf_pge_cntnt where page_id='$id'");
$row=mysql_fetch_object($query);

	if(isset($_POST['Submit']))
	{

	$status=$_REQUEST['status'];
	$page_title=mysql_real_escape_string(trim($_REQUEST['page_title']));
	$page_content=mysql_real_escape_string(trim($_REQUEST['page_content']));
 	
	$sql = mysql_query("update pcf_pge_cntnt set page_title='$page_title',page_content='$page_content',page_status='$status' where page_id=$id ");
 
	if($sql)
		{
		?>
    <script>
			window.location='index.php?pgnm=manage_page_info&result=1';
	</script>
    <?php
		}
		else
		{
		?>
    <script>
			window.location='index.php?pgnm=manage_page_info&result=0';
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
            <td width="24%" class="pageheadTop">Update Page Info </td>
            <td width="76%" class="headLink" align="right">		
			<ul>
                <li><a href="index.php?pgnm=ad-country-info">Back</a></li>
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
    <td><p><strong>Page Title </strong><strong>:</strong></p></td>
    <td align="center"></td>
    <td><input type="text" size="49" name="page_title" value="<?php echo $row->page_title; ?>" ></td>
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
    </tr>
    
    
    <tr>
      <td valign="top"><span class="text1"><strong>Page Description </strong></span></td>
      <td align="center">&nbsp;</td>
      <td><textarea  name="page_content" id="page_content" ><?php echo $row->page_content; ?></textarea>
	
	 <script language="javascript">


                                                     CKEDITOR.replace('page_content',{
                                                         width :800,
                                                         height:200,
                                                         customConfig:'configfull.js'

                                                     });
                                                 </script></td>
    </tr> 
    <tr>
      <td>&nbsp;</td>
      <td align="center"></td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
    <td><p><strong>Status</strong><strong>:</strong></p></td>
    <td align="center"></td>
    <td>	<select name="status" id="status" class="inpuTxt">
			<option value="1" <?php if($row->page_status == "1"){ echo "selected='selected'";}?>>Active</option>
			<option value="0" <?php if($row->page_status == "0"){ echo "selected='selected'";}?>>Inactive</option>
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

    </td>
  </tr>

</table>