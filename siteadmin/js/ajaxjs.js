var SITEURL = 'http://localhost/ajay/megaformat/';

$('#AddCategory').click( function() {
		var catTitle =  $('#catTitle').val();
		var parentCat =  $('#parentCat').val();
		if(catTitle ==''){
			alert('please enter title.');
			return false;
		}
		var AddCategory = 'AddCategory';
		$.ajax({
				   url: 'myfunction.php',
				   type: 'POST',
				   data: { catTitle:catTitle, parentCat:parentCat,  act:AddCategory},
				   success:function(data){
					 $('#sucmsgg').html(data);  
					 window.location.reload(true);				 
				   }
		   });
	});
	
