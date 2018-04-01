<form name="frm_login" method="post" action="">
    		<div class="admin">
            	
                <p> Administration Login</p>
                
                	<div class="box">
                    	
                        <div class="box-1">
                        	<p>Use a valid username and password to gain access to the administrator backend.</p>
                           
                          <p>&nbsp;</p>
                            <p><img src="images/lock.png" width="152" height="137" alt="" /></p>
                             <p>&nbsp;</p>
                          <p style="margin-left:40px;"><a href="#">Forget password</a></p>
                        </div>
                        
                        	<div class="box-2">
                            	
                                <table width="297" border="0" cellspacing="10px">
       <?php if($codmsg!='') { ?><tr>
        <td align="center" colspan="2"><?php echo $codmsg; ?></td>
      </tr>
      <?php } ?>
      <tr>
    <td width="72">User Type</td>
    <td width="191"><label for="name"></label>
      <select name="usertype" id="usertype">
      <option value="000">Select user type</option>
    
    
        <option value="admin">Admin</option>
      </select>      
      </td>
  </tr>
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
    <td><img src="../CaptchaSecurityImages.php?width=155&height=30&characters=5" />
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
            <script xml:space="preserve" type="text/javascript" language="JavaScript">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("frm_login");
    frmvalidator.addValidation("usertype","dontselect='000'","Please select user type");
  frmvalidator.addValidation("username","req","Please enter your username");
  frmvalidator.addValidation("password","req","Please enter your password");
  frmvalidator.addValidation("security_code","req","Please enter given code");
//]]></script>
</form>