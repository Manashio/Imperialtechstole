<div class="clr"></div>
<?php if($adminIndex==1) { $showfootercls = 'class="bgnone1"'; } else { $showfootercls = "";} ?>
<footer <?php echo $showfootercls; ?>>&copy; Copyright <span>,&nbsp; <?php echo POWERED_BY_WEBSITE;?></span> <?php echo date('Y'); ?>. All Rights Reserved.</footer>

<script type="text/javascript" src="js/html5.js"></script> 
<script src="js/cbpHorizontalMenu.min.js"></script> 
<script>
	$(function() {
		cbpHorizontalMenu.init();
	});
</script> 
<script>
jQuery( document ).ready( function( $ ) {
	var $menu = $('#menu1'),
	  $menulink = $('.menu-link1'),
	  $menuTrigger = $('.has-submenu > a');

	$menulink.click(function(e) {
		e.preventDefault();
		$menulink.toggleClass('active');
		$menu.toggleClass('active');
	});
	{
	$menuTrigger.click(function(e) {
		e.preventDefault();
		var $this = $(this);
		$this.toggleClass('active').next('ul').toggleClass('active');
	});
	
	}

});
</script> 
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/ajaxjs.js"></script>

</body>
</html>
