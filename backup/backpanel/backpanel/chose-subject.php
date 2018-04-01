<?php 

include("include/flsdb.php");

	 $Crids =  $_REQUEST['yar'];
	$selcrs = mysql_fetch_assoc(mysql_query("select * from pcf_prgm where id ='".$Crids."'"));

	$Subdata = mysql_query("select * from pcf_subjts where course_id = '".$Crids."'");

	$chkRows = mysql_num_rows($Subdata);

	$grupStendrd = mysql_fetch_assoc(mysql_query("select standrd_id as stdId from pcf_prgm where id = '".$Crids."' group by standrd_id"));

	$chkRows = mysql_num_rows($Subdata);

	$chkSelected = mysql_query("select * from pcf_subjts where default_selected = 'yes'");

	$chkeddata = "";

while($selId = mysql_fetch_assoc($chkSelected))

{   

		

     $chkeddata.= $selId['id'].",";

}   

   $dfltchked 		=  rtrim($chkeddata,",");

   $fDtaType       = $dfltchked ;

   $DataArr        = explode(",",$fDtaType);

if($chkRows>0){

 ?>

  <table width="645" border="1" bordercolor="#2073b5" cellspacing="0" cellpadding="0">

 <tr>

 <td colspan="6" bgcolor="#E9E9FE"  align="left">&nbsp;<strong>Choose Your Subject</strong></td>

  

  </tr>

  <tr>

 <td width="79"  align="center"><strong>Select subject</strong></td>

   <td width="196"  align="center"><strong>Subject</strong></td>

   <td width="79"  align="center"><strong>Code</strong></td>

    <td width="112"   align="center"><strong>Practical Code</strong></td>

      <td width="167"   align="center"><strong>Compulsary / Optional</strong></td>

  </tr>

 

  

  <?php  

  $i=1;

  $g=0;

   while($sel_sub = mysql_fetch_object($Subdata)){

	   $code_chng = explode("/",$sel_sub->subject_code); 

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

		

		 $rslt = "result".$j;

		 $grd = "grade".$j;   

	   

   ?>

  <tr>

   <td height="30" >&nbsp;<input type="checkbox" name="sel_sub[<?php echo $i;?>]" id="sel_sub<?php echo $g; ?>" <?php  if($sel_sub->default_selected=='1'){ echo "checked='checked'";?> onclick="compulsarySub('sel_sub<?php echo $g; ?>');" <?php } else { ?>onclick="CountChecks('<?php echo $chkRows; ?>','sel_sub<?php echo $g; ?>')" <?php } ?>value="<?php echo $sel_sub->id;?>" /> </td>

    <td height="30" >&nbsp;<?php echo $sel_sub->subject_name;?></td>

    <td>&nbsp;<?php if(!empty($code_chng[0])){ echo $code_chng[0]; } else { echo "N/A"; }?></td>

    <td>&nbsp;<?php if(!empty($code_chng[1])){ echo $code_chng[1]; } else { echo "N/A"; }?></td>

    <td>&nbsp;<?php if($sel_sub->default_selected=='1'){ echo "Compulsory"; } else { echo "<b>Optional</b>";} ?> </td>

    

  </tr>

   <?php $i++;  $g++;}   ?>

</table>

<?php } ?>

<input type="hidden" name="year" id="year" value="<?php echo $selcrs['year_of_stream'];?>" />