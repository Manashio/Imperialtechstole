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
  }elseif($title_name == "Admin : my_projector"){
	$projector = "active";
  }elseif($title_name == "Admin : my_videoconferencing"){
	$video = "active";
  }
?>
<nav class="my_nav" id="menu">
		<ul class="sidenav">
			<li class = "<?php echo $home;?>">
				<a href="/index.php">Dashboard</a>
			</li>
			<li class = "<?php echo $catagory;?>">
				<a href="../my_catagory/index.php">Catagory</a>
			</li>
			<li class = "<?php echo $subcatagory;?>">
				<a href="../my_subcatagory/index.php">Sub Catagory</a>
			</li>
			<li class = "<?php echo $display;?>">
				<a href="../my_format_display/index.php">Display</a>
			</li>
			<li class = "<?php echo $projector;?>">
				<a href="../my_projector/index.php">Projector</a>
			</li>
			<li class = "<?php echo $video;?>">
				<a href="../my_videoconferencing/index.php">Video Conferencing</a>
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