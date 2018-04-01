function call()
{
	var t1 = document.newsform.title.value
	var t2 = document.newsform.decs.value
	var t3 = document.newsform.status.value
	
		
	if(t1=="")
	{
		alert("Please Enter Your Name.")
		document.newsform.title.focus()
		return false	
	}
	
	if(email == "")
	{
	alert("Please Description.")
	document.newsform.decs.focus()
	return false
	}
		
	if(t3=="")
	{
		alert("Please Select Status.");
		document.newsform.status.focus();
		return false;
		
	}
	else
	{
		
	
	return true;
	
	document.newsform.action="save_news.php".submit();    
	
	document.newsform.submit();
	
	}
}

