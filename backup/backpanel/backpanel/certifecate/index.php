<?php

include("../include/flsdb.php");

$adminId=!empty($_SESSION['id']) ? $_SESSION['id'] : "";

if($adminId=="")

{

	header("location: ../index.php");

}







 $id 			= !empty($_REQUEST['id']) ? $_REQUEST['id'] : "";



$studntdata = mysql_fetch_assoc(mysql_query("select * from pcf_stu_dtl where id ='$id'"));

 $sub_Arry = $studntdata['sel_sub_Id'];

 $crsIds = $studntdata['course'];

	if($sub_Arry=='')

	{

		$Subdata = mysql_query("select * from pcf_subjts where course_id='".$crsIds."' and year ='".$studntdata['admission_year']."' order by position asc");

	}

	else{

			$Subdata = mysql_query("select * from pcf_subjts where course_id='".$crsIds."' and year ='".$studntdata['admission_year']."' and find_in_set(`id`,'$sub_Arry') order by position asc"); 

	}

 

 

 $chkRows = mysql_num_rows($Subdata);

 $mysqlProg = mysql_fetch_assoc(mysql_query("select * from pcf_prgm where id = '".$studntdata['course']."'"));

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>



<title>Mark Sheet</title>

<link rel="stylesheet" href="script.css" type="text/css" />

<script>

function marksheets(val,ids)

{

	

var xmlhttp;

if (window.XMLHttpRequest)

  {// code for IE7+, Firefox, Chrome, Opera, Safari

  xmlhttp=new XMLHttpRequest();

  }

else

  {// code for IE6, IE5

  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

  }

xmlhttp.onreadystatechange=function()

  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)

    {

		document.getElementById("sheet").innerHTML='';

    document.getElementById("sheet").innerHTML=xmlhttp.responseText;

    }

  }

xmlhttp.open("GET","sheets.php?val="+val+"&ids="+ids,true);

xmlhttp.send();

}

</script>

<script type="text/javascript" language="javascript">



function print_marksheet(printContainer) {


    var DocumentContainer = document.getElementById(printContainer);

	var WindowObject = window.open('', "Mark Sheet", "width=615,height=650,top=200,left=250,toolbars=no,scrollbars=no,status=no,resizable=no");

	WindowObject.document.write("<link href='script.css' rel='stylesheet' type='text/css'>");

	WindowObject.document.writeln(DocumentContainer.innerHTML);

	WindowObject.focus();

	WindowObject.print();

	WindowObject.close();

}



</script>

</head>



<body>

<div class="wrap">
  <div style="float:left; width:971px; height:1050px; overflow:hidden; position:relative; z-index:1; "> <img src="images/background.jpg"  /> </div>
  <div id="print_contaner">
    
    
    
  <div class="mein">

 <div style="float:left; margin-top:-1050px; width:100%; position:relative; z-index:20;">

  	<table width="100%" border="0" cellpadding="0" cellspacing="0" height="604" background="none">
 <tr>

					<td height="19" colspan="2">&nbsp;</td>

                    <td width="77">&nbsp;</td>

                    <td colspan="6" >&nbsp;</td>

                               

        </tr>
	    <tr>

					<td height="47" colspan="2">&nbsp;</td>

                    <td width="77">&nbsp;</td>
 <td width="168">&nbsp;</td>
  <td width="101">&nbsp;</td>
   <td width="101">&nbsp;</td>
    
    
     <td width="101">&nbsp;</td>
          <td width="37"></td>

                               

                </tr>
                
                 <tr>

					<td width="36" height="43"  align="center">&nbsp;</td>
<td width="48" height="43"  align="center">&nbsp;</td>
                    <td width="77"><strong><?php echo rand('99999','00000');?></strong>	</td>
 <td width="168">&nbsp;</td>
  <td width="101">&nbsp;</td>
   <td width="101">&nbsp;</td>
    
    
     <td width="101">&nbsp;</td>
          <td>&nbsp;</td>                

        </tr>
        
        <tr>

					<td height="43" colspan="2">&nbsp;</td>

                    <td width="77">&nbsp;</td>
 <td width="168">&nbsp;</td>
  <td width="101">&nbsp;</td>
   <td width="101">&nbsp;</td>
    
    
     <td width="101">&nbsp;</td>
          <td>&nbsp;</td>                

        </tr><tr>

					<td height="43" colspan="2">&nbsp;</td>

                    <td width="77">&nbsp;</td>
 <td width="168">&nbsp;</td>
  <td width="101">&nbsp;</td>
   <td width="101">&nbsp;</td>
    
    
     <td width="101">&nbsp;</td>
          <td>&nbsp;</td>                

        </tr><tr>

					<td height="43" colspan="2">&nbsp;</td>

                    <td width="77">&nbsp;</td>
 <td width="168">&nbsp;</td>
  <td width="101">&nbsp;</td>
   <td width="101">&nbsp;</td>
    
    
     <td width="101">&nbsp;</td>
          <td>&nbsp;</td>                

        </tr><tr>

					<td height="40" colspan="2">&nbsp;</td>

                    <td width="77">&nbsp;</td>
 <td width="168">&nbsp;</td>
  <td width="101">&nbsp;</td>
   <td width="101">&nbsp;</td>
    
    
     <td width="101">&nbsp;</td>
          <td>&nbsp;</td>                

        </tr>
                  <tr>

					<td height="28" colspan="2">&nbsp;</td>

                    <td width="77">&nbsp;</td>
 <td width="168">&nbsp;</td>
  <td width="101">&nbsp;</td>
   <td width="101" style="padding-left:10px;"><strong><?php echo $studntdata['sessipn_yr'];?></strong></td>
    
    
     <td width="101">&nbsp;</td>
          <td>&nbsp;</td>                

        </tr><tr>

					<td height="18" colspan="2">&nbsp;</td>

                    <td width="77">&nbsp;</td>
 <td width="168">&nbsp;</td>
  <td width="101">&nbsp;</td>
   <td colspan="3" style="padding-left:82px;"><strong><?php echo $studntdata['sessipn_yr'];?></strong></td>
    
                 

        </tr><tr>

					<td height="40" colspan="2">&nbsp;</td>

                    <td width="77">&nbsp;</td>
 <td width="168">&nbsp;</td>
  <td width="101">&nbsp;</td>
   <td width="101">&nbsp;</td>
    
    
     <td width="101">&nbsp;</td>
          <td>&nbsp;</td>                

        </tr>
         <tr>
					<td height="27" >&nbsp;</td>
					<td height="27" align="right">&nbsp;</td>

                    <td width="77">&nbsp;</td>
 <td width="168"><strong><?php echo strtoupper($studntdata['name']);?></strong></td>
  <td width="101">&nbsp;</td>
   <td width="101">&nbsp;</td>
    
    
     <td width="101"><strong>&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <?php echo $studntdata['roll_no'];?></strong></td>
          <td>&nbsp;</td>                

        </tr>
        
        <tr>
					<td height="23" >&nbsp;</td>
					<td height="23" align="right">&nbsp;</td>

                    <td width="77"><strong>&nbsp;&nbsp;&nbsp;</strong></td>
 <td width="168"><strong><?php echo strtoupper($studntdata['m_name']);?></strong></td>
  <td width="101">&nbsp;</td>
   <td width="101">&nbsp;</td>
    
    
     <td width="101"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
          <td>&nbsp;</td>                

        </tr>
        
        <tr>
					<td height="30" >&nbsp;</td>
					<td height="30" align="right">&nbsp;</td>

                    <td width="77"><strong>&nbsp;&nbsp;&nbsp;</strong></td>
 <td width="168"><strong><?php echo strtoupper($studntdata['f_name']);?></strong></td>
  <td width="101">&nbsp;</td>
   <td width="101">&nbsp;</td>
    
    
     <td width="101"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
          <td>&nbsp;</td>                

        </tr>
        <tr>
					<td height="30" >&nbsp;</td>
					<td height="30" align="right">&nbsp;</td>

                    <td colspan="6"><strong><?php $centrnam = mysql_fetch_assoc(mysql_query("select * from pcf_centres where id ='".$studntdata['study_center']."'")); echo strtoupper($centrnam['institute_name'])."-".strtoupper($centrnam['state']);?></strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
 </tr>
<tr>
					<td height="30" >&nbsp;</td>
					<td height="30" align="right">&nbsp;</td>

                    <td colspan="6"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
 </tr>
 <tr>
					<td height="30" >&nbsp;</td>
					<td height="30" align="right">&nbsp;</td>

                    <td colspan="6"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
 </tr>
                <tr>

                <td colspan="12" style="margin:0; padding:0; border:none;">

                <div id="sheet" >

                <table cellpadding="0" cellspacing="0" border="0" width="100%">

                <?php if($chkRows>0){

 ?>
				<?php /*
                <tr>

					<td width="46" rowspan="2">Sr.No.</td>

					<td width="131" rowspan="2">Subject</td>

                    <td width="91" rowspan="2">Max Marks</td>

                    <td width="64" rowspan="2">Min Marks</td>

                    <td height="26" colspan="3" align="center">Marks Obtained</td>

                     <td width="52" rowspan="2" align="center">Result</td>

                </tr>

                <tr>



    <td width="57" height="14" align="center">Theory</td>



    <td width="57" align="center">Practical</td>



    <td width="64" align="center">Total</td>



  </tr>
*/ ?>
  



  <?php $i=1; 



   while($sel_sub = mysql_fetch_object($Subdata)){



	   



	   if($i==1)



		   {



			   $j="";



		   }



		   else



		   {



			  $j=$i;



		   }



		 $th = "theory_marks".$j;



		 $pm = "prac_marks".$j;



		 $tm = "total_marks".$j;



		 $rslt = "result".$j;



		 $grd = "grade".$j; 



		 $maxmark = "max_marks".$j;

		   

		 $streslt = "result".$j;

		 

	



	if($studntdata[$th]!=''){   



   ?>



  <tr>



    <td width="7%" height="18" >&nbsp;</td>

 <td width="8%" >&nbsp;</td>

    <td width="17%" ><?php echo strtoupper($sel_sub->subject_name);?></td>

<td width="16%" align="center" >&nbsp;</td>




    



    <td width="6%" align="left">&nbsp;</td>



    <td width="9%" align="left" <?php if($studntdata[$pm]==""){ ?> <?php } ?> >&nbsp;</td>



    <td width="13%" align="left">&nbsp;</td>
    
     <td width="10%" align="left">&nbsp;</td>

 <td width="14%">&nbsp;</td>

  </tr>

   <?php } $i++; } ?>



  <tr>

<tr>
<td height="41" colspan="9">&nbsp; </td>
</tr>

  <tr>

<td height="37" colspan="4"></td>



<td colspan="2" >&nbsp;</td>

<td colspan="2"><strong> <?php echo $studntdata['total'];?> / <?php echo $chkRows;?>00</strong></td>


<td align="center" ><?php echo strtoupper($studntdata['totalresult']);?></td>

</tr>



<?php } else {?>

    <td colspan="8"><strong>Your Marksheet Not Generated, Please wait</strong></td>



  </tr><?php } ?>



                </table>

                </div>

                </td>

                

                </tr>



        </table>

</div>



</div>

</div>



<div class="print" style="position: absolute; z-index: 3; left: 367px; top: 1138px;">

<input type="button" name="print" value="Print" onclick="print_marksheet('print_contaner');" />

</div>



</div>



</body>

</html>

