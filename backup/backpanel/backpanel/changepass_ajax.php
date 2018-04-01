<?php
			
						
    $pcode  = $_SESSION["AdminLoginID_SET"]; 
	
	if($data_action=='update')
	{
		$old_pass  = md5($_REQUEST["old_pass"]);
		
		$new_pass  = $_REQUEST["new_pass"];
		$conf_pass = $_REQUEST["confirm_pass"];
		$sql_change = "select * from pcf_adm_lgn where admin_id='$pcode' and password='$old_pass'";
			$rs_change  = mysql_query($sql_change);
			if(mysql_num_rows($rs_change)>0)
			{
				$fileArray["password"] = md5($conf_pass);
				$result=$s->editRecord('pcf_adm_lgn',$fileArray,'admin_id',$pcode);
		 	}
			else
			{
				$msg="aas"; 
			}
	}
?>
<link type="text/css" href="css/pass_ajax.css" rel="stylesheet" />
<script language="javascript" type="text/javascript">
function call()
{
	var t3 = document.from1.old_pass.value;
	var t1 = document.from1.new_pass1.value;
	var t2 = document.from1.new_pass2.value;
		
	if(t3=="")
	{
		alert("Please Enter Your Old Password.");
		document.from1.old_pass.focus();
		return false;
		
	}
	if(t1=="")
	{
		alert("Please Enter New Password.");
		document.from1.new_pass1.focus();
		return false;
		
	}
	
		
      else if(document.from1.new_pass1.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        document.from1.new_pass1.focus();
        return false;
      }
	
	else if(t2=="")
	{
		alert("Please Enter  Password Again.");
		document.from1.new_pass2.focus();
		return false;
		
	}
	else if(document.from1.new_pass1.value!=document.from1.new_pass2.value)
	{
		alert("New and Confirm Password should be same.");
		document.from1.new_pass2.focus();		
		return false;
	}
	else
	{
	     document.from1.action="save_pass.php";
		 document.from1.submit();
	
	}
	}
 </script>

<div id="containerfeedb">

<div id="formboxf">
  <div id="topheadingf">
  <div id="boxf" style="padding-top:15px;"><img src="images/imgi.png" width="36" height="36"/></div>   <div id="box1f" style="padding-top:15px;">	Change Password</div>
  <div id="box2f"> <a href="#"class="close"/><img src="images/x.png" width="25" height="29" align="right" border="0"/></a></div>
  </div>
  <!--end of topheading-->
     <div id="mainformboxf">
      <div id="formbox_leftf">
      <br/><div class="formalinf">Tip Box</div><br/><br/>
      If you are facing problems in using control panel, or want to provide any kind of feedback, just fill feed-back  form and click send. <br/><br/><br/>
      Please allow 2 working days for our team to respond.
      </div>
         <!--end of formbox_left-->
         
<form name="from1"  method="post" >
          <div class="textboxf">
            <div class="textbox1f">
             User:
           </div>
              <div class="textbox2f">
                 <?php echo  $_SESSION['SESSION_USER']; ?>
              </div>
          </div> 
          <!--end of textbox-->
           
      <div class="textboxf">
       <div class="textbox1f"></div>
              <div class="textbox2f"></div>
         </div>
         <!--end of textbox-->     
              
      
       <div class="textboxf">
              <div class="textbox1f">Old Password</div>  
            <div class="textbox2f">
              <input type="password" name="old_pass"  size="20" class="col1f"/>
            </div>
        </div> 
         <!--end of textbox-->       
    
          <div class="textboxf">
              <div class="textbox1f">
                New Password  
            </div>
                 <div class="textbox2f">
                   <input type="password" name="new_pass1"  size="20" class="col1f"/>
                 </div>
            </div>    
         
         <div class="textboxf">
              <div class="textbox1f">
                Confirm Password: 
            </div>  
               <div class="textbox2f"> <input type="password" name="new_pass2"  size="20" class="col1f"/></div>
       </div>
       <!--end of textbox-->
      
         <div class="textbox4f">
              <div class="textbox1f"></div>  
              <div class="textbox21f"></div>
         </div>
      <!--end of textbox-->       
       
        <div class="textbox3f">
        <div class="boxf">
        <input type="button" name="Submit" value="Change" onclick="call();" class="roundboxf"/> </div>
   <a href="#"class="close"/><input type="button" name="Cencel" value="Cancel" class="roundboxf"/></a> 
   
   </div>
       
		</form>  
        </div>
 </div>
    </div>
        
</div>
