
<?php
if(isset($_POST['Submit']))
{
 include('connect.php');
$file_name = $_FILES['uploadFile']['name'];
$uploadDir = 'pdf_image/';
$tmpName  = $_FILES['uploadFile']['tmp_name'];
$fileSize = $_FILES['uploadFile']['size'];
$fileType = $_FILES['uploadFile']['type'];
$res2=mysql_query("select * from scroltxt where PDF_Title='".$_POST['PDF_Title']."'");
$num=mysql_num_rows($res2);
if($num>0)
{
?>
 <script language="javascript">
 alert('Name Is already exists');
 document.location.href="javascript:history.go(-1)";
 </script>
<?php
}
else
{

$res=mysql_query("select * from scroltxt order by id desc limit 0,1");
$res1=mysql_fetch_array($res);
$num2=$res1['id'] + 1;
$filePath = $uploadDir.$num2.$file_name;
move_uploaded_file($tmpName, $filePath);
$Result=mysql_query("insert into scroltxt(PDF_Title,PDF_File) values('".$_POST['PDF_Title']."','$filePath')") or die(mysql_error());
$num2=mysql_insert_id()+1;

 if($Result)
 {
 ?>
 <script language="javascript">
 alert('Record Succesfully Added');
 document.location.href="javascript:history.go(-1)";
 </script>
 <?php
 } 
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
					<p><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="24%" class="pageheadTop">Add PDF </td>
            <td width="76%" class="headLink" align="right">		
			<ul>
                <li><a href="index.php?pgnm=manage_scrolling">Back</a></li>
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
    <td><p><strong>PDF Title </strong></p></td>
    <td align="center"><strong>:</strong></td>
    <td><input name="PDF_Title" type="text" id="PDF_Title" size="49" ></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <td><p><strong>Upload PDF </strong></p></td>
    <td align="center"><strong>:</strong></td>
    <td><input name="uploadFile" type="file" class="style5" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
     <tr>
    <td><p>&nbsp;</p></td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
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
                
                </td>

              </tr>

            </table>
          <p>&nbsp;</p></td>
        </tr>
      </table>

      <br /></td>

  </tr>

</table>