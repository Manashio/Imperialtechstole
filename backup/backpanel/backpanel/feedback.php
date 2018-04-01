<link type="text/css" href="css/form.css" rel="stylesheet" />
<script language="javascript">
var digits = "0123456789"; 

var phoneNumberDelimiters = "()- ";

var validWorldPhoneChars = phoneNumberDelimiters + "+";

var minDigitsInIPhoneNumber = 10;

function isInteger(s)
{   var i;
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character is number.
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}
function trim(s)
{   var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not a whitespace, append to returnString.
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character isn't whitespace.
        var c = s.charAt(i);
        if (c != " ") returnString += c;
    }
    return returnString;
}
function stripCharsInBag(s, bag)
{   var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not in bag, append to returnString.
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character isn't whitespace.
        var c = s.charAt(i);
        if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
}

function checkInternationalPhone(strPhone){
var bracket=3
strPhone=trim(strPhone)
if(strPhone.indexOf("+")>1) return false
if(strPhone.indexOf("-")!=-1)bracket=bracket+1
if(strPhone.indexOf("(")!=-1 && strPhone.indexOf("(")>bracket)return false
var brchr=strPhone.indexOf("(")
if(strPhone.indexOf("(")!=-1 && strPhone.charAt(brchr+2)!=")")return false
if(strPhone.indexOf("(")==-1 && strPhone.indexOf(")")!=-1)return false
s=stripCharsInBag(strPhone,validWorldPhoneChars);
return (isInteger(s) && s.length >= minDigitsInIPhoneNumber);
}
function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}

		  function valid(){
		     if(document.form1.name.value==''){
			   alert('Please enter name');
			   document.form1.name.focus();
			   return false;		  
		     }
			 	var emailID=document.form1.Email
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter your Email ID")
		emailID.focus()
		return false
	}
	if (echeck(emailID.value)==false){
		emailID.value=""
		emailID.focus()
		return false
	}
		var Phone=document.form1.Phone_no
	if ((Phone.value==null)||(Phone.value=="")){
		alert("Please Enter your Phone Number")
		Phone.focus()
		return false
	}
	if (checkInternationalPhone(Phone.value)==false){
		alert("Please Enter a Valid Phone Number")
		Phone.value=""
		Phone.focus()
		return false
	}
			 if(document.form1.message.value==''){
			   alert('Please enter message');
			   document.form1.message.focus();
			   return false;		  
		     }
		  return true;
  		  }
		  </script>
<div id="wrapmain">
<div id="containerfeedb">

<div id="formboxf">
  <div id="topheadingf">
  <div id="boxf" style="padding-top:15px;"><img src="images/imgi.png" width="36" height="36"/></div>   <div id="box1f" style="padding-top:15px;">	 Feedback / Report a Problem</div>
  <div id="box2f"> <a href="#"class="close"/><img src="images/x.png" width="25" height="29" align="right" border="0"/></a></div>
  </div>
  <!--end of topheading-->
     <div id="mainformboxf">
      <div id="formbox_leftf">
      <br/><div class="formalinf">Tip Box</div><br/><br/>
      If you are facing problems in using control panel, or want to provide any kind of feedback, just fill in this form and click send. <br/><br/><br/>
      Please allow 2 working days for our team to respond.
      </div>
         <!--end of formbox_left-->
        
        


 <div id="login_response"><!-- spanner --></div> </center>
 <form name="form1" action="sendmail.php"   method="post" onsubmit="return valid();"  >
          <div class="textboxf">
            <div class="textbox1f">
             Website:
           </div>
              <div class="textbox2f">
                <input name="sitename" type="text" value="Main center Login" size="37" readonly="readonly" class="colf"/>
              </div>
          </div> 
          <!--end of textbox-->
           
      <div class="textboxf">
       <div class="textbox1f">
               Name: 
            </div>
              <div class="textbox2f"> 
                 <input name="name" type="text" id="name" value="" size="37" class="col1f"/>
              </div>
         </div>
         <!--end of textbox-->     
              
      
       <div class="textboxf">
              <div class="textbox1f">
                Subject: 
              </div>  
               <div class="textbox21f-select"> 
               
                           <select name="select-box" id="select-box"> 
<option value="I want to report a problem">I want to report a problem</option> 
<option value="I want to provide feedback">I want to provide feedback</option>
</select></div>
        </div> 
         <!--end of textbox-->       
    
            <div class="textboxf">
              <div class="textbox1f">
                Email:  
              </div>
                 <div class="textbox2f"> 
                 <input name="email" type="text" value="" id="Email" size="37" class="col1f"/>
                </div>
            </div>    
         
         <div class="textboxf">
              <div class="textbox1f">
                Phone No.: 
            </div>  
               <div class="textbox2f">                 
                  <input name="phoneno" type="text" id="Phone_no" value="" size="37" class="col1f"/>
            </div>
       </div>
       <!--end of textbox-->
      
         <div class="textbox4f" align="right">
              <div class="textbox1f"> 
                  Message:  
              </div>  
             <div class="textbox21f-textarea"><textarea name="message" id="message" rows="6" cols="30" class="col1f"></textarea></div>
                      
        </div>
      <!--end of textbox-->       
       
        <div class="textbox3f">
        <div class="boxf">
        <input type="submit" name="Submit" value="Send" class="roundboxf"/> </div>
    <a href="#"class="close"/> <input type="button" name="Cencel" value="Cancel" class="roundboxf"/></a> </div>

                 
       
        
     </form>  
           
 </div>
        <!--end of formbox_right-->
      </div>
        <!--end of mainformbox-->
        
</div>
<!--end of formbox-->
</div>
<!--end of container-->
</div>
