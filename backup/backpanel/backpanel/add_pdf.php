<?php
$msg='';
  if(isset($_REQUEST['submit'])=="Save" && !$errors) 

 {

 	$file_name = $_FILES['uploadFile']['name'];
$uploadDir = '../../PDF/';
$tmpName  = $_FILES['uploadFile']['tmp_name'];
$fileSize = $_FILES['uploadFile']['size'];
$fileType = $_FILES['uploadFile']['type'];
$res=mysql_query("select * from manage_link order by ID desc limit 0,1");
$res1=mysql_fetch_array($res);
$num2=$res1['ID'] + 1;
$filePath = $uploadDir.$num2.$file_name;
move_uploaded_file($tmpName, $filePath);

		$Status	 = $_REQUEST['status'];

		$qry=mysql_query("insert into  manage_link set images='$filePath',status='$Status'");


		if($qry)

		{

			header("location: index.php?pgnm=manage_pdf&msg=sv");

		}


 }





	if($msg=='sv')

	{

		$msg="<font color='#006600'>Record Updated Successfully!!</font>";

	}

?>

<div style="color:#000; font-size:15px; padding-left:20px;" align="left">

<form action="" enctype="multipart/form-data" method="post" name="sampleform" onsubmit="return formValidator();" >

<table width="100%" >

  <tr>

    <td width="286"  class="text1">&nbsp;</td>

   

    <td width="778"  class="text1"><?php echo $msg; ?><div class="backbtn"><a href="index.php?pgnm=pcf-student">Back</a></div></td>
  </tr>
   
   <tr>

    <td  class="text1">Upload PDF file </td>



    <td width="778"  class="text1"><input name="uploadFile" type="file" class="style5" /></td>
  </tr>


    <td  class="text1">Status:</td>



    <td width="778"  class="text1"><select name="status" id="status" class="inpuTxt">
			<option value="1" selected='selected'>Active</option>
			<option value="0" >Inactive</option>
		</select>    </td>
  </tr>

   <tr>

    <td  class="text1"></td>



    <td  class="text1"><input type="submit"  name="submit" value="Save"  style="float:left; margin:5px 10px 0 10px;" />

    <input type="reset" name="reset" class="center_reset_cls" value="Reset" style="float:left; margin:5px 10px 0 10px;" /></td>
  </tr>
</table>

</form>

     