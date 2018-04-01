<script type="text/javascript" src="ckeditor/plugins/ckeditor_wiris/core/display.js"></script>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		      <script src="js/jquery-1.3.2.min.js"></script>
   
        <script src="js/jquery.js"></script>
<?php 
session_start();
include ("config.php");
include ("check.php");
include "header.php";
//include_once("../FCKeditor/fckeditor.php") ;
$msg =!empty($_REQUEST['msg']) ? $_REQUEST['msg'] : "";
	if(isset($_POST['Submit']))
	{
	$title=mysql_real_escape_string(trim($_REQUEST['title']));
	$description=mysql_real_escape_string(trim($_REQUEST['description']));
 	$status=$_REQUEST['status'];
	$sql = mysql_query("insert into tbl_notice_board set title='$title',description='$description',status='$status'");
 
	if($sql)
		{ ?>
	   <script>
			window.location='index.php?pgnm=manage_what_new&result=1';
	</script>
    <?php
		}
		else
		{
		?>
    <script>
			window.location='index.php?pgnm=manage_what_new&result=0';
	</script>
    <?php 
		}

} ?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

  <tr>
    <td>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

        <tr>

          <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="border">

              <tr>

                <td>
					<p><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="24%" class="pageheadTop">Add Blog </td>
            <td width="76%" class="headLink" align="right">		
			<ul>
                <li><a href="index.php?pgnm=manage_what_new">Back</a></li>
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

				<form name="form1" id="form1" action="" enctype="multipart/form-data" method="post" >

				<p><table width="100%" align="left" border="0" cellspacing="0" cellpadding="1">

    <tr>
    
    <td colspan="4"><p><?php echo $msg; ?></p></td>
    </tr>

   
    <tr>
      <td>&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
     <tr>
    <td><p><strong>Heading</strong></p></td>
    <td align="center"><strong>:</strong></td>
    <td><input type="text" size="49" name="title" ></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <td><p><strong>Description</strong></p></td>
    <td align="center"><strong>:</strong></td>
    <td> <textarea  name="description" id="description" ></textarea>
	
	 <script language="javascript">


                                                     CKEDITOR.replace('description',{
                                                         width :800,
                                                         height:200,
                                                         customConfig:'configfull.js'

                                                     });
                                                 </script> </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
     <tr>
    <td><p><strong>Status</strong></p></td>
    <td align="center"><strong>:</strong></td>
    <td>	<select name="status" id="status" class="inpuTxt">
			<option value="1" selected='selected'>Active</option>
			<option value="0" >Inactive</option>
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

				</p> </form>
                <script language="JavaScript" type="text/javascript">
 var frmvalidator = new Validator("form1");

	frmvalidator.addValidation("description","req","Please enter description");
</script>
                </td>

              </tr>

            </table>
          <p>&nbsp;</p></td>
        </tr>
      </table>

      <table width="793" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

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
   </td>
  </tr>
</table>

    <br /></td>

  </tr>

</table>