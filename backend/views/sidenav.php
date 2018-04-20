<?php
error_reporting(0);
  if($title_name == "Admin : home"){
        $home = "active";
  }elseif($title_name == "Admin : add"){
        $add = "active";                       
  }elseif($title_name == "Admin : logbook"){
        $log = "active";                       
  }elseif($title_name == "Admin : setting"){
        $setting = "active";                       
  }
?>
<nav class="my_nav" id="menu">
		<ul class="sidenav">
			<li class = "<?php echo $home;?>">
				<a href="home.php">Dashboard</a>
			</li>
			<li class = "<?php echo $add;?>">
				<a href="add.php">Add log</a>
			</li>
			<li class = "<?php echo $log;?>">
				<a href="logbook.php">Log book</a>
			</li>
			<li class = "<?php echo $setting;?>">
				<a href="" class="">Settings</a>
			</li>
			<li class = "<?php echo $api;?>">
				<a href="logout.php">Logout</a>
			</li>
			<div class="hr"></div>
			<li class = "<?php echo $profile;?>">
				<a href="">profile</a>
			</li>
			<li class = "<?php echo $databse;?>">
				<a href="">database</a>
			</li>
			<li class = "<?php echo $api;?>">
				<a href="">API</a>
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