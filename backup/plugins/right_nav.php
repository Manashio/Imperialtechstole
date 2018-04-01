<table width="230" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="40" bgcolor="#38a5c2" class="heading1">Useful Resources</td>
              </tr>
              <tr>
                <td align="left" class="box">

                  <p class="leftlink">
				  <img src="images/aero.jpg" width="12" height="12" /> <a href="pdf/Types of business entities in India.pdf" target="_blank" class="leftlink1">Types of Business Entities in India </a><br />
				  <img src="images/aero.jpg" width="12" height="12" /> <a href="pdf/Anil Agrawal & Co - Analysis of Union Budget 2015.pdf" target="_blank" class="leftlink1">Analysis of Union Budget 2015 </a><br />
				  
				  
				  
				  
                      <img src="images/aero.jpg" width="12" height="12" /> <a href="pdf/FAQ ON NRI TAXATION.pdf" target="_blank" class="leftlink1">FAQ on NRI Taxation</a></p>
                 </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
               <td height="40" bgcolor="#38a5c2" class="heading1">Enquiry Form</td>
              </tr>
              <tr>
              <td align="left" class="box"><table width="228" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><form action="maileract.php" method="post" onsubmit="return validate(this);"> <table width="100%" border="0" cellpadding="1" cellspacing="1" >
                  <tr>
                    <td width="43%"><strong>Name</strong></td>
                    <td width="57%"><input name="name" type="text" class="frm" id="name" /></td>
                  </tr>
                  
                  <tr>
                    <td><strong> E-mail </strong></td>
                    <td><input name="email" type="text" class="frm" id="email"/></td>
                  </tr>
                  <tr>
                    <td><strong> Mobile</strong></td>
                    <td><input name="mobile" type="text" class="frm" id="mobile"/></td>
                  </tr>
                  
                  <tr>
                    <td><strong> Query</strong></td>
                    <td><textarea name="query" class="frm1" id="query"></textarea></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><input name="submit" type="submit" class="btn" value="Submit" /></td>
                  </tr>
                </table>
                  </form>
                    
                    
                  </td></tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align="center"><p class="leftlink"><img src="images/aero.jpg" width="12" height="12" /> <a href="newsletter.php"  class="leftlink1">Subscribe Newsletter </a><br />
	<img src="images/aero.jpg" width="12" height="12" /> <a href="newsletter.php"  class="leftlink1">Unsubscribe Newsletter </a>	</p>		  
				  </td>
                </tr>
              </table>
         
                <p>&nbsp;</p></td>
              </tr>
            </table>
			
			<script language="javascript">
function validate(objForm)
{
if(objForm.name.value.length=='')
{
        alert("Please Enter Name");
        objForm.name.focus();
        return false;
    }
if(objForm.email.value.length=='' )
    {
        alert("Please Enter Email Address");
        objForm.email.focus();
        return false;
    }
if(objForm.email.value.length!=0)
    {
      validRegExp = /^[^@]+@[^@]+.[a-z]{2,}$/i;
        strEmail =objForm.email.value;
if (strEmail.search(validRegExp) == -1) 
{
alert("Email Address is not valid ");
objForm.email.focus();
return false;
    }
if(objForm.email.value.length!=0)
    {
      validRegExp = /^[^@]+@[^@]+.[a-z]{2,}$/i;

        strEmail =objForm.email.value;
if (strEmail.search(validRegExp) == -1) 
{
alert("Email Address is not valid ");
objForm.email.focus();
return false;
    }
}
}
if(objForm.mobile.value.length=='' )
    {
        alert("Please Enter Contact No");
        objForm.mobile.focus();
        return false;
		}
}
</script>
