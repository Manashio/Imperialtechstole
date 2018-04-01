<?php
	include("includes/mainCls.php");
	
 
	$codmsg= '';
	 $data_action   	    = !empty($_REQUEST["submit"]) ? $_REQUEST["submit"] : "";
	if($data_action	== 'Log in')
	{
	   if($_SESSION['security_code'] == $_REQUEST["security_code"])
		{
			$codmsg ='<font color="#FF0000">czxczxcxz.</font>';
			
			$uid 	   = $_REQUEST["username"];
		    $password  = md5($_REQUEST["password"]);
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
									}
									else
									{
										$s->pageLocation("admin_login.php?action=lgnovr");
										
									}
								
							}
							else
							{
								 $_SESSION['user']=$_POST['username'];
								 $_SESSION['password']=$_POST['password'];
								 $_SESSION['SESS_admin_id']=$_POST['username'];
								 $_SESSION['id']=$row['id'];
								 $_SESSION['SESSION_USER']=$_POST['username'];
						
							}
								header("Location: home.php?tpnm=Home");
					
							
						
							 
							
						}
						else
						{
							$msg = "You have entered wrong code.";
						}
	
		
		
	}
	else
	{
		$codmsg ='<font color="#FF0000">Sorry! You have entered wrong code.</font>';	
	}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin Login</title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="js/gen_validatorv4.js"></script>
</head>

<body>
<form name="frm_login" method="post" action="">
<div class="pacific">

<p class="mrgn">Administration</p>

	<div class="outer">
    
    		<div class="admin">
            	
                <p>RVV Administration Login</p>
                
                	<div class="box">
                    	
                        <div class="box-1">
                        	<p>Use a valid username and password to gain access to the administrator backend.</p>
                            <p>&nbsp;</p>
                          <p><a href="#">Go to site home page</a></p>
                          <p>&nbsp;</p>
                            <p><img src="images/lock.png" width="152" height="137" alt="" /></p>
                        </div>
                        
                        	<div class="box-2">
                            	
                                <table width="250" border="0" cellspacing="10px">
       <?php if($codmsg!='') { ?><tr>
        <td align="center" colspan="2"><?php echo $codmsg; ?></td>
      </tr>
      <?php } ?>
      
  <tr>
    <td>Username</td>
    <td><label for="name"></label>
      <input type="text" name="username" id="username" class="txt" /></td>
  </tr>
    <tr>
    <td>Password</td>
    <td><label for="password"></label>
      <input type="password" name="password" id="password" class="txt" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><img src="CaptchaSecurityImages.php?width=155&height=30&characters=5" />
	       <div class="text">Enter Code as above </div> <input name="security_code" type="text" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" id="submit" value="Log in" /></td>
  </tr>
  
                              </table>
                                
                            </div>
                        
                    </div>
            			
                        <div class="clr"></div>
            </div>
            
            		
    	
    </div>

</div>
</form>
<script xml:space="preserve" type="text/javascript" language="JavaScript">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("frm_login");
  frmvalidator.addValidation("username","req","Please enter your username");
  frmvalidator.addValidation("password","req","Please enter your password");
  frmvalidator.addValidation("security_code","req","Please enter given code");
//]]></script>
</body>
</html>