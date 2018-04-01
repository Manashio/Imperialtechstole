$(document).ready(function() {
 $('.top-menu li').mouseover(function(){  
    $(this).children('.dropdown-wrap').show(); 
});
$('.top-menu li').mouseleave(function(){
	$(this).children('.dropdown-wrap').hide(); 
     $(this).siblings().children('.dropdown-wrap').hide(); 
}); 


$('.dropdown-wrap').mouseleave(function() {
    setTimeout(function () {
        $(this).hide();
    }, 3000);
});


function switch_tabs($obj){
$('.tabs-content-wrap').hide();
$('.nav-tabs a').removeClass('active');
var id = $obj.attr('href');
$(id).show().css('display', 'block');
$obj.addClass('active');
}
$('.nav-tabs a').click(function(){
switch_tabs($(this));
return false;
});
switch_tabs($('.nav-tabs a.active'));

$(window).width(function(){
if ($(window).width() <= 767) {
   $('.dropdown-nav').removeClass('mob-drop').addClass('mob-navi');
}  
});
$(window).resize(function(){
if ($(window).width() < 767) {  
	 $('.dropdown-nav').removeClass('mob-drop').addClass('mob-navi');
} 
});


var estado="big";
$(".menu").click(function() {
if(estado == "big"){
$('.side-nav').animate({left:"0"}, 200);
$('.right-panel').animate({width:"1181px", margin:"0 0 0 242px"}, 200).css({'border-left':'1px solid #D9DDDD'});
$('body').css({'overflow-x':'hidden', 'overflow-y':'visible'});
return estado="small";
} else if(estado == "small") {
$('.side-nav').animate({left:"-280px"},200);
$('.right-panel').animate({width:"100%", margin:"0"}, 200).css({'border-left':'0'});
$('body').css({'overflow':'visible'});
return estado="big";
}
});


$('.mov-tab').click(function(){
	$(this).next('.res-table').slideToggle();
	$(this).siblings().next('.res-table').slideUp();
	$(this).toggleClass('active');
	$(this).siblings().removeClass('active');
	
});	

$('.navbar-nav li').click(function(){
	$(this).children('.mob-navi').slideToggle();
});

$(".side-nav li a").click(function(){
	$(this).parent().children(".side-sub-nav").slideToggle();
	$(this).toggleClass("active");
});
});
  
  
if (top.location != location) {
top.location.href = document.location.href ;
}
$(function(){
window.prettyPrint && prettyPrint();
$('.dp').datepicker({
	format: 'dd-mm-yyyy'
});
});



