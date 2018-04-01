// Mega Format Functions Start
function checkval(id)
{
	var sval=id.value;
	var i;
	var finalval="";
	for(i=0;i<sval.length;i++)
	{
		if(sval.charAt(i)>='0' && sval.charAt(i)<='9')
		{
			finalval=finalval + sval.charAt(i);
		}
	}
	id.value=finalval;
}
function deleterec(val)
{
	//alert(val);
	var r = confirm("Do you really want to delete?");
	if (r == true)
	{
		//alert("You pressed OK!");
		window.location="brochures-mgmt.php?btnsubmit=Delete&code="+val;
	}
	else
	{
		//alert("You pressed Cancel!");
	}
	return false;
}
 function deleterecflyer(val)
{
	//alert(val);
	var r = confirm("Do you really want to delete?");
	if (r == true)
	{
		//alert("You pressed OK!");
		window.location="flyers-mgmt.php?btnsubmit=Delete&code="+val;
	}
	else
	{
		//alert("You pressed Cancel!");
	}
	return false;
}
function isInteger(s)
{
    var i;
	for (i = 0; i < s.length; i++)
	{
		var c = s.charAt(i);
		if (((c < "0") || (c > "9"))) return false;
	}
	// All characters are numbers.
	return true;
}
function validateFrm()
{
	document.getElementById('nameErr').innerHTML="";
	document.getElementById('linkErr').innerHTML="";
	var name = document.getElementById('name').value;
	var link1 = document.getElementById('link').value;
	if(name == "")
	{
		document.getElementById('nameErr').innerHTML = "*Please Enter Canvas Name";
		document.getElementById('name').value = "";
		document.getElementById('name').focus();
		return false;
	}
	if(link1 == "")
	{
		document.getElementById('linkErr').innerHTML = "*Please Enter canvas Date";
		document.getElementById('link').value = "";
		document.getElementById('link').focus();
		return false;
	}
	return true;
}

function validateFrmmesh()
{
	document.getElementById('nameErr').innerHTML="";
	document.getElementById('linkErr').innerHTML="";
	var name = document.getElementById('name').value;
	var link1 = document.getElementById('link').value;
	if(name == "")
	{
		document.getElementById('nameErr').innerHTML = "*Please Enter mesh Name";
		document.getElementById('name').value = "";
		document.getElementById('name').focus();
		return false;
	}
	if(link1 == "")
	{
		document.getElementById('linkErr').innerHTML = "*Please Enter mesh Date";
		document.getElementById('link').value = "";
		document.getElementById('link').focus();
		return false;
	}
	return true;
}
function validateFrmvinyl()
{
	document.getElementById('nameErr').innerHTML="";
	document.getElementById('linkErr').innerHTML="";
	var name = document.getElementById('name').value;
	var link1 = document.getElementById('link').value;
	if(name == "")
	{
		document.getElementById('nameErr').innerHTML = "*Please Enter vinyl Name";
		document.getElementById('name').value = "";
		document.getElementById('name').focus();
		return false;
	}
	if(link1 == "")
	{
		document.getElementById('linkErr').innerHTML = "*Please Enter vinyl Date";
		document.getElementById('link').value = "";
		document.getElementById('link').focus();
		return false;
	}
	return true;
}
function validateFrmMountedrecord()
{
	document.getElementById('nameErr').innerHTML="";
	document.getElementById('linkErr').innerHTML="";
	var name = document.getElementById('name').value;
	var link1 = document.getElementById('link').value;
	if(name == "")
	{
		document.getElementById('nameErr').innerHTML = "*Please Enter Mounted Name";
		document.getElementById('name').value = "";
		document.getElementById('name').focus();
		return false;
	}
	if(link1 == "")
	{
		document.getElementById('linkErr').innerHTML = "*Please Enter  Mounted";
		document.getElementById('link').value = "";
		document.getElementById('link').focus();
		return false;
	}
	return true;
}

function deleterecdisplaysize(val)
            {
                //alert(val);
                var r = confirm("Do you really want to delete?");
                if (r == true)
                {
                    //alert("You pressed OK!");
                    window.location="popup-sizedisplay-mgmt.php?btnsubmit=Delete&code="+val;
                }
                else
                {
                    //alert("You pressed Cancel!");
                }
                return false;
            }
 function deleterecpostcard(val)
            {
                //alert(val);
                var r = confirm("Do you really want to delete?");
                if (r == true)
                {
                    //alert("You pressed OK!");
                    window.location="postcard-mgmt.php?btnsubmit=Delete&code="+val;
                }
                else
                {
                    //alert("You pressed Cancel!");
                }
                return false;
            }
function deleterecbooklet(val)
            {
                //alert(val);
                var r = confirm("Do you really want to delete?");
                if (r == true)
                {
                    //alert("You pressed OK!");
                    window.location="booklet-mgmt.php?btnsubmit=Delete&code="+val;
                }
                else
                {
                    //alert("You pressed Cancel!");
                }
                return false;
            }
 function deleterectablethrow(val)
            {
                //alert(val);
                var r = confirm("Do you really want to delete?");
                if (r == true)
                {
                    //alert("You pressed OK!");
                    window.location="tablethrow-mgmt.php?idd="+val;
                }
                else
                {
                    alert("You pressed Cancel!");
                }
                return false;
            }
// Mega Format Functions End


function confirmDelete()
{
	var agree=confirm("This will delete info. permanently.\nAre you sure?");
	if (agree)
		return true;
		else
		return false;
}

function checkdate(bdDay, dbMonth, dbYear)
{
	if(!IsValidDate(bdDay, dbMonth, dbYear)) 
	{
		return false;
	}
	return true;
}

function DaysInMonth(CMonth,CYear)
{
	 var intMonth = parseInt(CMonth);
	 var intYear = parseInt(CYear);
	 if ((intMonth == 4) ||
	  (intMonth == 6) ||
	  (intMonth == 9) ||
	  (intMonth == 11))
	  return 30;
	 if (intMonth==2) {  // Leap year stuff
	  if ((intYear % 400)==0) return 29;
	  if ((intYear % 100)==0) return 28;
	  if ((intYear % 4)==0) return 29;
	  return 28;
	 }
	 return 31;
}

function IsDate(CDay, CMonth, CYear)
{
	if ((CDay <= 0) || (CDay > 31) ||
	(CMonth <= 0) || (CMonth > 12) ||
	(CYear <= 0))
	return false;
	var intDay = parseInt(CDay);
	var intMonth = parseInt(CMonth);
	var intYear = parseInt(CYear);
	if (intDay <= DaysInMonth(intMonth, intYear)) return true;
	return false;
}

function IsValidDate(CDay, CMonth, CYear)
{
	if(!IsDate(CDay, CMonth, CYear)) 
	{
		alert("Please select valid date");
		return false;
	}
	Today = new Date();
	DayBeforeYesterday = new Date((Today.getTime() - 172800000));
	Hours = Today.getHours();
	Minutes = Today.getMinutes()+1;
	Seconds = Today.getSeconds();
	StartDate= new Date(CYear,(CMonth - 1),CDay,Hours,Minutes,Seconds);
	if (StartDate<Today) 
	{ 
		alert("Date must be above current date!");
		return false;
	}
	return true;
}


/* Validate Password */
function validatePass(password1, password2) 
{
    if(password2.value != password1.value || password1.value == '' || password2.value == '') 
	{
        password2.setCustomValidity('Password incorrect');
    } 
	else 
	{
        password2.setCustomValidity('');
    }
}


/* Display Subject Name */
function showSubcategory(sel,sid,typ) {
	var categoryid = document.getElementById('catpid').value; 
	if(sid!="")
	{
		var subid = sid;
	}
	$("#output1").html("");
    if (categoryid.length > 0 ) {
     $.ajax({
            type: "POST",
            url: "get-subject.php",
            data: "category_id="+categoryid+"&subid="+subid+"&typeid="+typ,
            cache: false,
            beforeSend: function () {
                $('#output1').html('<img src="/siteadmin/images/ajax_loader_small.gif" alt="" width="24" height="24">');
			},
            success: function(html) {    
                $("#output1").html(html);
            }
        });
    }
}


/* Display Chapter Name */
function showChapter(sel, chapid, typ) {
	var Subjectid = sel; 
	$("#outputchap").html("");
    if (Subjectid.length > 0 ) {
     $.ajax({
            type: "POST",
            url: "get-chapter.php",
            data: "subject_id="+Subjectid+"&chapid="+chapid+"&typeid="+typ,
            cache: false,
            beforeSend: function () {
                $('#outputchap').html('<img src="/siteadmin/images/ajax_loader_small.gif" alt="" width="24" height="24">');
			},
            success: function(html) {    
                $("#outputchap").html(html);
            }
        });
    }
}




/* Display Membership Details */
function showMemberDetails(mid) {
	var membid = mid; 
	$("#outputmemb").html("");
    if (membid.length > 0 ) {
     $.ajax({
            type: "POST",
            url: "get-membership.php",
            data: "mid="+membid,
            cache: false,
            beforeSend: function () {
                $('#outputmemb').html('<img src="/siteadmin/images/ajax_loader_small.gif" alt="" width="24" height="24">');
			},
            success: function(html) {    
                $("#outputmemb").html(html);
            }
        });
    }
}


/* Category Checkbox Validation in user Page */
function checkTheBox() {
var checked = false;
	var element = document.getElementsByClassName("categoryname");
	for(var i=0; i < element.length; i++){
	if(element[i].checked)
		checked = true;
	}
	if(checked==false)
	{
		alert("please checked atleast one category");
		return false;
	}
	else
	{
		return true
	}
}