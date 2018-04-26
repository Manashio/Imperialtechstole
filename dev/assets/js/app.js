

let right_menu_btn = document.querySelector(".right-menu-btn");
let nav_container = document.querySelector(".nav-container");


right_menu_btn.addEventListener('click', function(){
	nav_container.classList.toggle('active');
	console.log('working app');
} );


$( "#consultationForm" ).submit(function( event ) {
	$('#applybutton').attr('disabled',true);
	$("#applybutton").html('Processing');
});

console.log('working app');