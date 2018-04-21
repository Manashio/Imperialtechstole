<?php
error_reporting(0);
  if($title_name == "Admin : index"){
        $home = "active";
  }elseif($title_name == "Admin : my_catagory"){
	$catagory = "active";                       
  }elseif($title_name == "Admin : my_format_display"){
        $display = "active";                       
  }elseif($title_name == "Admin : my_subcatagory"){
        $subcatagory = "active";                       
  }elseif($title_name == "Admin : my_projector.php"){
	$projector = "active";
  }elseif($title_name == "Admin : my_videoconferencing"){
	$video = "active";
  }
?>
<nav class="my_nav" id="menu">
		<ul class="sidenav">
			<li class = "<?php echo $home;?>">
				<a href="index.php">Dashboard</a>
			</li>
			<li class = "<?php echo $catagory;?>">
				<a href="my_catagory/my_catagory.php">Catagory</a>
			</li>
			<li class = "<?php echo $subcatagory;?>">
				<a href="my_subcatagory/my_subcatagory.php">Sub Catagory</a>
			</li>
			<li class = "<?php echo $display;?>">
				<a href="my_format_display/my_format_display.php">Display</a>
			</li>
			<li class = "<?php echo $projector;?>">
				<a href="my_projector/my_projector.php" class="">Projector</a>
			</li>
			
			<li class = "<?php echo $video;?>">
				<a href="my_videoconferencing/my_videoconferencing.php">Video Conferencing</a>
			</li>
			
			<div class="hr"></div>
			<li>
				<a href="logout.php">Logout</a>
			</li>
			
			
		</ul>
	</nav>

	<div class="menu-top">

	<!-- **********		Menu btn		 ********** -->
			<div id="target" class="hum-btn  pl-3 pt-4">   
				<span></span>
				<span></span>
				<span></span>
				<p class="hide_print  text-center title">Admin</p>
			</div>

	<!-- **********		TOP NAV		 ********** -->
		
			
	</div>
	<div class="div"  id="block"></div>