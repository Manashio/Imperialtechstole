<?php

  $centerId=!empty($_REQUEST['cid']) ? $_REQUEST['cid'] : "";

 $cntrCalse = "where id='".$centerId."'";

$fetchdata=$s->getDataWithCondition('pcf_centres',  $cntrCalse);

$row=mysql_fetch_object($fetchdata);

$fetchemail=$s->getDataWithCondition('pcf_centre_lgn',  $cntrCalse);

$chkemail=mysql_fetch_object($fetchemail);

	

if(isset($_REQUEST['submit']))

{

	$contactnumber 	= $_REQUEST['contNumber'];	
	$Selcordinator  = $_REQUEST['Selcordinator'];

$id				= $_REQUEST['eid'];

$institute_name	= $_REQUEST['institute_name'];

$country		= $_REQUEST['country'];

$state			= $_REQUEST['state'];

$email			= $_REQUEST['email'];

$contactno		= $_REQUEST['contactno'];

$address		= $_REQUEST['address'];

$usrname		= $_REQUEST['username'];

$paswrd 		= $_REQUEST['password'];



 $Dtcntr['institute_name'] =$institute_name;

 $Dtcntr['country']=$country;

 $Dtcntr['state']=$state;

 $Dtcntr['contactno']=$contactno;

 $Dtcntr['address']=$address;

$Dtcntr['regnl_Id']= $Selcordinator;

$Dtcntr['cont_number']=$contactnumber;

$qry=$s->editRecord('pcf_centres', $Dtcntr, 'id' , $centerId);



$DtctRg['ename'] =$institute_name;

$DtctRg['email']=$email;

$DtctRg['contact_no']=$contactno;

$DtctRg['address']=$address;

$DtctRg['state']=$state;

$DtctRg['user_name']=$usrname;

$DtctRg['password']=$paswrd;
$DtctRg['regnl_Id']= $Selcordinator;
$qry=$s->editRecord1('pcf_centre_lgn', $DtctRg, 'id' , $centerId);



if($qry==0)

{

	$s->javascriptRedirect('index.php?pgnm=update-center&cid='.$centerId.'&ad=sv');

}

else

{

$msg="<font color='#990000'>Sorry Record Not Inserted, Try Again....</font>";

}



	}

	$adsucful=!empty($_REQUEST['ad']) ? $_REQUEST['ad'] : "";

if($adsucful=='sv'){

	$msg="<font color='#003300'>Record Inserted Successfully!!</font>";



}


 $cordianators = $s->cordinator('1');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<div style="color:#000; font-size:15px;" >



<form action="index.php?pgnm=update-center&cid=<?php echo $centerId;?>" name="add_center" enctype="multipart/form-data" method="post" >



<input type="hidden" name="cid" value="<?php echo $centerId;?>" />



<br>

<div class="filed" style="width:900px;"><?php echo $msg;?>&nbsp;<span style="text-align:right; float:right;">

<a href="index.php?pgnm=allcenter"><strong>Back</strong></a>

</span></div>

<div style=" width:500px; text-decoration:underline; margin-bottom:10px;"><strong>Update Center</strong></div>

<div class="form">Country :</div>

<div class="filed"><input type="hidden" name="country" value="1">India

  </div>

<div class="blank"></div>

<div class="form">State :</div>

<div class="filed"><select name="state" id="state"  style="width:162px">

		<option  value="<?php echo $row->state;?>" selected="selected"><?php echo $row->state;?></option>

		<option  value="Andhra Pradesh" >Andhra Pradesh</option>

		<option  value="Arunachal Pradesh">Arunachal Pradesh</option>

		<option  value="Assam">Assam</option>

		<option  value="Bihar">Bihar</option>

		<option  value="Chhattisgarh">Chhattisgarh</option>

		<option  value="Delhi" >Delhi</option>

		<option  value="Gujarat">Gujarat</option>

		<option  value="Goa">Goa</option>

		<option  value="Haryana">Haryana</option>

		<option  value="Himachal Pradesh">Himachal Pradesh</option>

		<option  value="Jammu and Kashmir">Jammu and Kashmir</option>

		<option  value="Jharkhand">Jharkhand</option>

		<option  value="Karnataka">Karnataka</option>

		<option  value="Kerala">Kerala</option>

		<option  value="Madhya Pradesh">Madhya Pradesh</option>

		<option  value="Maharashtra">Maharashtra</option>

		<option  value="Manipur">Manipur</option>

		<option  value="Meghalaya">Meghalaya</option>

		<option  value="Mizoram">Mizoram</option>

		<option  value="Nagaland">Nagaland</option>

		<option  value="Orissa">Orissa</option>

		<option  value="Punjab">Punjab</option>

		<option  value="Rajasthan">Rajasthan</option>

		<option  value="Sikkim">Sikkim</option>

		<option  value="Tamil Nadu">Tamil Nadu</option>

		<option  value="Tripura">Tripura</option>

		<option  value="Uttar Pradesh">Uttar Pradesh</option>

		<option  value="Uttarakhand">Uttarakhand</option>

		<option  value="West Bengal">West Bengal</option>

			<option  value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>

			<option  value="Chandigarh">Chandigarh</option>

			<option  value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>

			<option  value="Daman and Diu">Daman and Diu</option>

			<option  value="Lakshadweep">Lakshadweep</option>

			<option  value="Puducherry">Puducherry</option>

			</select></div>
<div class="blank"></div>

<div class="form">Select Reginal Cordinator:</div>

<div class="filed"><select name="Selcordinator" id="Selcordinator">
<option value="" selected="selected">Select Cordinator</option>
<option value="direct">Direct</option>
<?php while($data = mysql_fetch_object($cordianators)){ ?>
<option <?php echo 'value="'.$data->id.'"'; if($data->id==$row->regnl_Id){ echo 'selected="selected"';  } ?>><?php echo $data->center_name;?></option>
<?php } ?>
</select>
</div>
<div class="blank"></div>

<div class="form">Institute Name :</div>

<div class="filed"><input type="text" name="institute_name"  value="<?php echo $row->institute_name;?>" size="32" /></div>

<div class="blank"></div>

<div class="form">Email Address :</div>

<div class="filed"><input type="text" name="email"  value="<?php echo $chkemail->email;?>" size="32" /></div>

<div class="blank"></div>

<div class="form">Contact Person.:</div>

<div class="filed"><input type="text" name="contactno" value="<?php echo $row->contactno;?>" size="32" /></div>

<div class="blank"></div>
<div class="form">Contact Number.:</div>

<div class="filed"><input type="text" name="contactnumber" value="<?php echo $row->cont_number;?>" size="32" /></div>

<div class="blank"></div>

<div class="form" style="margin-top:13px;">Address :</div>

<div class="filed" style="height:55px;"><textarea cols="24" name="address"><?php echo $row->address;?></textarea></div>

<div class="blank"></div>

<div class="form">User name :</div>

<div class="filed"><input type="text" name="username" id="username"  value="<?php echo $chkemail->user_name;?>" size="32" /></div>

<div class="blank"></div>

<div class="form">Password :</div>

<div class="filed"><input type="text" name="password" id="password"  value="<?php echo $chkemail->password;?>" size="32" /></div>

<div class="blank"></div>



<div class="form">&nbsp;</div>

<div class="filed"><input name="submit" type="submit" value="Save"  class="button_cls" />&nbsp;&nbsp;<input name="reset" type="reset" value="Reset" class="reset_cls"/></div>

<div class="blank"></div>

</form>

 <script xml:space="preserve" type="text/javascript" language="JavaScript">//<![CDATA[

  var frmvalidator  = new Validator("add_center");

  frmvalidator.addValidation("institute_name","req","Please enter institute name");



  frmvalidator.addValidation("email","req","Please enter email address");

  frmvalidator.addValidation("email","email","Please enter valid email address");

  frmvalidator.addValidation("contactno","req","Please enter contact no.");

  frmvalidator.addValidation("address","req","Please enter Address.");



  frmvalidator.addValidation("username","req","Please enter user name");

  frmvalidator.addValidation("password","req","Please enter password");

  

//]]></script></div>