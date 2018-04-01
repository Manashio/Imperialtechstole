<!doctype html>
	<html>
		<head>
			<meta charset="utf-8">
				<title><?php echo SITEADMIN_WEBSITE_TITLE; ?></title>
				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
				<!-- Css file here -->
				<link href="css/style.css" rel="stylesheet" type="text/css">
				<link href="css/bootstrap.min.css" rel="stylesheet">
				<link href="css/responsivenav.css" rel="stylesheet">
				<link href="css/layout.css" rel="stylesheet" type="text/css">
				<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
				<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
				<!--[if IE]>
				<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
				<![endif]-->
				<script type="text/javascript" language="javascript" src="js/frmvalidation.js"></script>
				<?php if($ceditor==1) { ?>
				<!--For Ckeditor -->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
				<?php } ?>
			</head>

			<!--Magnific-Popup-->
			<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
			<?php if($magnificpopup==1) { ?>
			<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
			<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
			<script type="text/javascript">
				$(document).ready(function() {
				$('.fancybox').fancybox();
			});
			</script>
			<?php } ?>

			<?php if($showdatepicker==1) { ?>
			<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
			<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
			<script type="text/javascript">
			  $(function() {
				$(".sdate").datepicker({changeMonth:true,changeYear: true, dateFormat: 'yy-mm-dd'});

				var d = new Date();
				var year = d.getFullYear() - 18;
				d.setFullYear(year);
				$( ".showdatepicker1" ).datepicker({changeMonth: true,changeYear: true,yearRange: '1920:' + year + '', defaultDate: d});
			  });
			  </script>
			<?php } ?>

			<body>
			<?php if($adminIndex==1) { ?>
			<section class="toppart bgnone">
				<a href="dashboard.php"  title="Dashbaord"><div class="logo" style=" float:none; margin:50px auto 10px auto; padding:0px;"><img src="images/apache_pb2.png" alt="" width="200" height="70"></div></a>
			</section>
			<?php } else { ?>
			<section class="toppart" style="height:94px;">
				<div style=" float:left; width:20%; margin:10px 0; height:150px; padding:0px 0px 30px 20px;">
				<a href="dashboard.php"  title="Dashbaord"><img src="images/admininner-logo.png" alt="" width="220" height="78"></a></div>
				<?php if($_SESSION['LoggedName']!="") { ?><div style="width:20%; line-height:1.5em; float:right" class="welcomepart datetime"><span>Welcome</span> <?php echo $_SESSION['LoggedName']; ?>!<br><span><?php echo $_SESSION['sesscurrlogindate'];?></span></div><?php } ?>
			</section>

			<div class="topnavbar"> 
				<a class="menu-link1" href="dashboard.php"></a>
				<nav id="menu1" class="menu1">
					<ul>
                    <li><a href="dashboard.php"<?php if($selectedPage==0) { echo 'class="active"'; } ?>>Dashboard</a></li>
                        <?php /*?> <li><a href="province-mgmt.php"<?php if($selectedPage==11) { echo 'class="active"'; } ?>>Province </a></li><?php */?>
                    <!--  <li><a href="category-mgmt.php"<?php if($selectedPage==1) { echo 'class="active"'; } ?>>Category </a></li>
                        <li><a href="company-mgmt.php"<?php if($selectedPage==3) { echo 'class="active"'; } ?>>Company </a></li>
                        -->
                        
<?php /*?>						<li><a href="exp-mgmt.php"<?php if($selectedPage==41) { echo 'class="active"'; } ?>>China Exp Section </a></li>
						<li><a href="ecomm-mgmt.php"<?php if($selectedPage==4) { echo 'class="active"'; } ?>>E-commerce Hub </a></li>
<?php */?>                        
                        
                        
                    <li><a href="slider-mgmt.php"<?php if($selectedPage==3) { echo 'class="active"'; } ?>>Slider </a></li>
                    <li><a href="service-mgmt.php"<?php if($selectedPage==4) { echo 'class="active"'; } ?>>Manage Products </a></li>
                    <li><a href="gallery-mgmt.php"<?php if($selectedPage==4) { echo 'class="active"'; } ?>>Brands </a></li>
                    <li><a href="page-mgmt.php"<?php if($selectedPage==2) { echo 'class="active"'; } ?>>Pages </a></li>
                   <!-- <li><a href="events.php"<?php if($selectedPage==3) { echo 'class="active"'; } ?>>Events </a></li>-->
                    
                   <!-- <li><a href="gallery-mgmt.php"<?php if($selectedPage==4) { echo 'class="active"'; } ?>>Sponsors/Partners </a></li>                     <!--<li><a href="articles-mgmt.php"<?php if($selectedPage==5) { echo 'class="active"'; } ?>>Services </a></li>
                    <li><a href="faq-mgmt.php"<?php if($selectedPage==7) { echo 'class="active"'; } ?>>Faq </a></li> 
                 	  
                 	  -->
							<li class="has-submenu">
							<a href="#" <?php if($selectedPage==6) { echo 'class="active"'; } ?>>Settings</a>
							<ul class="sub-menu">
							  <!--  <li><a href="genral-setting.php">General Settings</a></li>-->
								<li><a href="change-password.php">Change Password</a></li>
								<!--<li><a href="database_backup.php">Database Backup</a></li>-->
 								
							</ul>
						</li>
						  <li><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
			</div>
		<?php } ?>


		
			

