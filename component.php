<?php include("config/config.inc.php");


$sqlProd = "SELECT * FROM tbl_service WHERE fld_id='26' ";
$rsProd = $dbquery->query($sqlProd);
$rowProd = $rsProd->fetch_object();
$image = $rowProd->fld_image;
$imagePath = "images/packages/";

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from imperialtechsol.com/page_info.php?P_ID=48 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Sep 2017 18:22:28 GMT -->
<head>
<meta charset="utf-8">
<title><?php echo $rowProd->fld_mtitle;?></title>
<meta name="description" content="<?php echo $rowProd->fld_mdesc;?>"/>
<meta name="keywords" content="<?php echo $rowProd->fld_mkeywords;?>">
<link rel="canonical" href="http://www.imperialtechsol.com/component.php" />
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/flipclock.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style-2.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,800" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/theme-settings.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115469934-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115469934-1');
</script>
</head>

<body>
<div class="page-wrapper"> 
  
  <!-- Preloader -->
  <div class="preloader"></div>
  
  <!-- Main Header -->
  <?php include('common/mainheader.php'); ?>
<!--End Main Header --> 

<!--Main Slider-->

<section class="inner-banner">
  <div class="opacity">
    <div class="container">
      <h4><?php echo $rowProd->fld_product_name;?></h4>
      <ul>
        <li><a href="index-3.html" class="tran3s">Home</a></li>
        <li>Products</li>
      </ul>
    </div>
  </div>
</section>
<section class="left-nav">
  <div class="container">
    <div class="col-md-12">
      <?php include('common/sidebar.php'); ?>
	        <div class="col-md-9 text-justify">
        <h2><?php echo $rowProd->fld_product_name;?></h2>
         <table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tbody>
		<tr>
			<td width="88%">
				<img align="right" height="216" src="<?php echo $imagePath.$image;?>" width="253" /><?php echo $rowProd->fld_desc;?></td>
		</tr>
	</tbody>
</table>      </div>
    </div>
  </div>
</section>
<!--<section class="client-logo mb-20">
  <div class="container">
    <div class="client-div"> 
      <script language="javascript" src="js/img_rotater.js" type="text/javascript"></script> 
    </div>
  </div>
</section>-->
<?php include('common/mainfooter.php'); ?>
</div>
<!--End pagewrapper--> 
<!--Scroll to top--> 
<!--<div class="scroll-to-top scroll-to-target" data-target="#main-header"><span class="fa fa-arrow-up"></span></div>--> 
<script src="js/jquery-latest.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/script.js"></script> 

<!--Slider--> 
<script type="text/javascript" src="js/plugins.js"></script> 
<script type="text/javascript" src="js/theme.js"></script> 
<script type="text/javascript" src="js/left-accordion.js"></script>
</body>

<!-- Mirrored from imperialtechsol.com/page_info.php?P_ID=48 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Sep 2017 18:22:28 GMT -->
</html>
