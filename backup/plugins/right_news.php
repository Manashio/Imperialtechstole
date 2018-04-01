<table width="230" border="0" cellspacing="0" cellpadding="0">
              
              <tr>
               <td height="40" bgcolor="#38a5c2" class="heading1">Newsletter</td>
              </tr>
              <tr>
              <td align="left" class="box"><table width="228" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><form action="subscribe.php" method="post" onsubmit="return validate(this);"><table width="228" border="0" align="center" cellpadding="1" cellspacing="1">
                    <tr>
                      <td>
                      <input type="text" name="email" class="inputbg" style="padding-left:5px" value="Subscribe"  onfocus="if (this.value == this.defaultValue) {this.value = '';this.style.color='#000';}" onblur="if (this.value == this.defaultValue || this.value == '') {this.value = this.defaultValue;this.style.color='#d9d9d9';}" /></td><td><input type="submit" name="submit" value="" class="go"   /></td>
                    </tr>
                    
                  </table>
                  </form><br />
<form action="subscribe1.php" method="post" onsubmit="return validate1(this);"><table width="228" border="0" align="center" cellpadding="1" cellspacing="1">
                   
                    <tr>
                      <td><input type="text" name="email1" style="padding-left:5px" value="Unsubscribe"  onfocus="if (this.value == this.defaultValue) {this.value = '';this.style.color='#000'; }" onblur="if (this.value == this.defaultValue || this.value == '') {this.value = this.defaultValue;this.style.color='#d9d9d9';}" class="inputbg"/></td><td><input type="submit" name="submit1" value="" class="go"   /></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                  </form><br />				  </td>
                </tr>
				<tr>
                <td height="40" bgcolor="#38a5c2" class="heading1">Useful Resources</td>
              </tr>
              <tr>
                <td align="left" class="box">

                  <p class="leftlink"><img src="images/aero.jpg" width="12" height="12" /> <a href="Anil Agrawal & Co - Analysis of Union Budget 2015.pdf" target="_blank" class="leftlink1">Analysis of Union Budget 2015 </a><br />
                      <img src="images/aero.jpg" width="12" height="12" /> <a href="FAQ ON NRI TAXATION.pdf" target="_blank" class="leftlink1">FAQ on NRI Taxation</a></p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p></td>
              </tr>
              </table>
         
              </td>
              </tr>
            </table>
			
			
			<script language="javascript">
function validate(objForm)
{

if(objForm.email.value.length=='' || objForm.email.value == 'Subscribe' )
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




}


</script>

		<script language="javascript">
function validate1(objForm)
{

if(objForm.email1.value.length=='' || objForm.email1.value == 'Unsubscribe' )
    {
        alert("Please Enter Email Address");
        objForm.email1.focus();
        return false;
    }
if(objForm.email1.value.length!=0)
    {
      validRegExp = /^[^@]+@[^@]+.[a-z]{2,}$/i;
        strEmail =objForm.email.value;
if (strEmail.search(validRegExp) == -1) 
{
alert("Email Address is not valid ");
objForm.email1.focus();
return false;
    }
if(objForm.email1.value.length!=0)
    {
      validRegExp = /^[^@]+@[^@]+.[a-z]{2,}$/i;

        strEmail =objForm.email1.value;
if (strEmail.search(validRegExp) == -1) 
{
alert("Email Address is not valid ");
objForm.email1.focus();
return false;
    }
}
}

}
</script>
