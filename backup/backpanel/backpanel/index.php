<?php
	include("includes/mainCls.php");
	$codmsg= '';
	$indexpg = !empty($_SESSION['id']) ?  $_SESSION['id'] : "";
	$chkpg = !empty($_REQUEST['pgnm']) ? $_REQUEST['pgnm'] : "";
	 $data_action   	    = !empty($_REQUEST["submit"]) ? $_REQUEST["submit"] : "";
	 
	if($data_action	== 'Log in')
	{
	   if($_SESSION['security_code'] == $_REQUEST["security_code"])
		{
			if($_REQUEST['usertype']=='admin')
			{
				$codmsg ='<font color="#FF0000">Sorry! Please enter correct Username and password.</font>';
			$uid 	   = mysql_real_escape_string($_REQUEST["username"]);
		    $password  = mysql_real_escape_string($_REQUEST["password"]);
		 	$sql_login = "select * from pcf_adm_lgn where username = '$uid' and password = '$password' and admin_status = '1'";
 			$rs_login  = mysql_query($sql_login);
						if(mysql_num_rows($rs_login)>0)
						{
							$row_login 					  = mysql_fetch_object($rs_login);
					
							 $admin_types				  =	$row_login->user_type;
			
							
							if($admin_types!="super admin")
							{
									 $crntDate = strtotime(date('d-m-Y')); 
									 $chkdate = strtotime($row_login->admin_validity);
									if($chkdate>=$crntDate){
											 $_SESSION["adminLogin"]		 = "adminlogin";
											 $_SESSION["AdminLoginID_SET"]   = $row_login->admin_id;
											 $_SESSION["Super_ADMIN"] 	     = 0;
											 $_SESSION["adminid"] 		     = $row_login->admin_id;
											 $_SESSION["AdminName_SET"]      = $row_login->name; 
										 	 $_SESSION['id']				 = $row_login->admin_id;
											 $adminid						 = "$chg'$row_login->name $_REQUEST[password]')";
											 $_SESSION['SESSION_USER']		 = $row_login->name;
											 $_SESSION['admin_login'] 	 	 = "admin";
											 $_SESSION['admintyp'] 		 	 = $admin_types;
											 $indexpg 						 = $_SESSION['id'];
									}
									else
									{
										$indexpg = "";
										$codmsg = '<font color="#FF0000">Sorry! Your login time period is over.<br>Please contact administator now.</font>';
										
									}
								
							}
							else
							{
								 			 $_SESSION["adminLogin"]		 = "adminlogin";
											 $_SESSION["AdminLoginID_SET"]   = $row_login->admin_id;
											 $_SESSION["Super_ADMIN"] 	     = 1;
											 $_SESSION["adminid"] 		     = $row_login->admin_id;
											 $_SESSION["AdminName_SET"]      = $row_login->name; 
										 	 $_SESSION['id']				 = $row_login->admin_id;
											 $adminid						 = "$chg'$row_login->name $_REQUEST[password]')";
											 $_SESSION['admintyp'] 			 = $admin_types;
											 $_SESSION['SESSION_USER']		 = $row_login->name;
											 $_SESSION['admin_login'] 		 = "admin";
											 $indexpg						 = $row_login->admin_id;
						
							}
						}
						else
						{
							$indexpg = "";
							$msg = "You have entered wrong code.";
						}
			}
			else if($_REQUEST['usertype']=='aiCenter')
			{
				
				

			$codmsg ='<font color="#FF0000">Sorry! Please enter correct Username and password.</font>';

				$uid 	   = $_REQUEST["username"];
		    $password  = $_REQUEST["password"];

		 	 $sql_login = "select * from pcf_centre_lgn where user_name = '$uid' and password = '$password' and accept = 'yes'";

 			$rs_login  = mysql_query($sql_login);
			
						if(mysql_num_rows($rs_login)>0)

						{

											$row_login 					  = mysql_fetch_object($rs_login);

											$chkUplod = mysql_fetch_assoc(mysql_query("select upload_studnt from pcf_centres where id='".$row_login->id."'"));

											 $_SESSION['chkUplod']			 =  $chkUplod['upload_studnt'];

											 $_SESSION["adminLogin"]		 = "centerlogin";

											 $_SESSION["AdminLoginID_SET"]   = $row_login->id;

											 $_SESSION["Super_ADMIN"] 	     = "center";

											 $_SESSION["adminid"] 		     = $row_login->id;

											 $_SESSION["AdminName_SET"]      = $row_login->ename; 

										 	 $_SESSION['id']				 = $row_login->id;

											 

											 $_SESSION['SESSION_USER']		 = $row_login->ename;

											 $indexpg						 = $_SESSION['id'];
											$s->javascriptRedirect('../centerpanel/');
						}

						else

						{

							$indexpg = "";

							$codmsg ='<font color="#FF0000">Sorry! You have entered wrong username or Password.</font>';

						}



				
				
			
			}
			else
			{
				
				

			$codmsg ='<font color="#FF0000">Sorry! Please enter correct Username and password.</font>';

				$uid 	   = $_REQUEST["username"];
		    $password  = $_REQUEST["password"];

		 	 $sql_login = "select * from pcf_reg_cntr where user_name = '$uid' and password = '$password' and status = '1'";

 			$rs_login  = mysql_query($sql_login);
			
						if(mysql_num_rows($rs_login)>0)

						{

											$row_login 					  = mysql_fetch_object($rs_login);

										
											 $_SESSION['chkUplod']		  =  5000;

											 $_SESSION["adminLogin"]		= "centerlogin";

											 $_SESSION["AdminLoginID_SET"]  = $row_login->id;

											 $_SESSION["Super_ADMIN"] 	   = "reginal center";

											 $_SESSION["adminid"] 		   = $row_login->id;

											 $_SESSION["AdminName_SET"]     = $row_login->center_name; 

										 	 $_SESSION['id']				= $row_login->id;

											 $_SESSION['SESSION_USER']	  = $row_login->center_name;

											 $indexpg					   = $_SESSION['id'];
											$s->javascriptRedirect('../centerpanel/');
						}

						else

						{

							$indexpg = "";

							$codmsg ='<font color="#FF0000">Sorry! You have entered wrong username or Password.</font>';

						}



				
				
			
			}
	}
	else
	{
		$indexpg = "";
		$codmsg ='<font color="#FF0000">Sorry! You have entered wrong code.</font>';	
	}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin Login</title>


<link href="../css/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="js/gen_validatorv2.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"> </script>
<script type="text/javascript" src="ckeditor/adapters/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#Conti_moto").ckeditor();
});
</script>


</head>

<body>
<div class="wrap">
<div class="pacific">

<p class="mrgn">Administration <?php if($_SESSION['SESSION_USER']!=''){?><font style="float:right; margin-right:140px; font-size:15px; padding-top:-8px;">Welcome <?php echo $_SESSION['SESSION_USER']; ?><br /><?php echo date("l F d, Y");?></font><?php } ?></p>


<?php if($indexpg!='') { ?>
<div class="menuDiv"><?php include("include/topheader.php"); ?></div>
<?php }?>
	<div class="outer">
    <?php if($indexpg=='') { include("includes/loginDtl.php");  } else { ?>
       	
    	<div style=" width:100%; text-align:left;  height:auto;">
        <div style=" float:left; width:100%; text-align:left; ">
		<?php  include("include/leftnavigation.php"); ?>
		  
		<div id="roundedbord1" style="color:#000; font-size:15px; padding-left:20px; min-height:500px; height:auto; min-height:350px; "  align="left"> 
      
      <?php if($chkpg!=''){
	  include($chkpg.".php"); }else{
	  include("includes/welcome.php"); }?>
      
   </div>
   </div>
   </div>
   <?php }?>
    </div>


</div>
</div>
<?php include("include/model.php"); ?>

</body>
</html>
