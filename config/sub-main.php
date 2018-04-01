<?php include("config/config.inc.php");
$catid = $_REQUEST['catid'];

if(DB_ENABLE_URL_REWRITING==1)
          {
               echo $tag = "fld_seourl='".basename($_SERVER['REQUEST_URI'])."'";
		  }
		  else
		  {
			  
			   $tag = "fld_id=".$_REQUEST['catid'];
			  
		  }
$sqlCat = "SELECT fld_id,fld_name FROM tbl_category WHERE fld_id=16";
$rsCat = $dbquery->query($sqlCat);
$rowCat = $rsCat->fetch_object();
 
?>
<!doctype html>

<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" > <![endif]-->

<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" > <![endif]-->

<!--[if IE 8]>    <html class="lt-ie9" > <![endif]-->

<!--[if gt IE 8]><!--> <html> <!--<![endif]-->

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Portal</title>
<base href="<? echo WEBSITE_URL;?>" />

<style type="text/css">

img.wp-smiley, img.emoji {

display: inline !important;

border: none !important;

box-shadow: none !important;

height: 1em !important;

width: 1em !important;

margin: 0 .07em !important;

vertical-align: -0.1em !important;

background: none !important;

padding: 0 !important;

}

</style>

<link rel='stylesheet' href='wp-content/plugins/quick-and-easy-faqs/public/css/css/font-awesome.min8a54.css' type='text/css' media='all' />

<link rel='stylesheet' href='wp-content/plugins/responsive-mortgage-calculator/css/stylede92.css' type='text/css' media='screen' />

<link rel='stylesheet' href='wp-content/plugins/revslider/public/assets/css/settings5bca.css' type='text/css' media='all' />

<style id='rs-plugin-settings-inline-css' type='text/css'>

.tp-button.green.custom {

font-size:16px;

text-transform:uppercase;

border-radius:0;

box-shadow:none;

text-shadow:none;

padding:10px 15px;

letter-spacing:1px;

background:#ec894d

}

</style>

<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto%3A400%2C400italic%2C500%2C500italic%2C700%2C700italic&amp;subset=latin%2Ccyrillic&amp;' type='text/css' media='all' />

<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C400italic%2C700italic&amp;' type='text/css' media='all' />

<link rel='stylesheet' href='wp-content/themes/realhomes/css/bootstrap605a.css' type='text/css' media='all' />

<link rel='stylesheet' href='wp-content/themes/realhomes/css/responsive605a.css' type='text/css' media='all' />

<link rel='stylesheet' href='wp-content/themes/realhomes/js/flexslider/flexsliderd315.css' type='text/css' media='all' />

<link rel='stylesheet' href='wp-content/themes/realhomes/js/prettyphoto/css/prettyPhoto005e.css' type='text/css' media='all' />

<link rel='stylesheet' href='wp-content/themes/realhomes/js/swipebox/css/swipebox.min6f3e.css' type='text/css' media='all' />

<link rel='stylesheet' href='wp-content/themes/realhomes/js/select2/select205da.css' type='text/css' media='all' />

<link rel='stylesheet' href='wp-content/themes/realhomes/css/main4468.css' type='text/css' media='all' />

<link rel='stylesheet' href='wp-content/themes/realhomes/css/custom-responsive4468.css' type='text/css' media='all' />

<link rel='stylesheet' href='.wp-content/themes/realhomes/style4468.css' type='text/css' media='all' />

<link rel='stylesheet' href='wp-content/themes/realhomes/css/custom4468.css' type='text/css' media='all' />

<script type='text/javascript' src='wp-includes/js/jquery/jquerycad0.js'></script>

<script type='text/javascript' src='wp-content/themes/realhomes/js/bootstrap.min3428.js'></script>



<link rel="stylesheet" href="css/extra.css" type="text/css" media="all">

<script type="text/javascript">

var RecaptchaOptions = {

theme : 'custom', custom_theme_widget : 'recaptcha_widget'

};

</script>

<!--[if lt IE 9]>

<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->



</head>

<body class="archive tax-property-status term-for-rent term-20">

<!-- Start Header -->

<?php include('common/header.php'); ?>

<!-- End Header -->

<hr>



<div class="container contents listing-grid-layout">

<div class="row">

<div class="span9 main-wrap">

<div class="main">



<div id="overview">

<article class="property-item clearfix">

<div class="features">

<h4 class="title"><?php echo strtoupper($rowCat->fld_name);?></h4>

</div>

</article>

</div>

<?php 
      $arrCompanyId = array();
       $sqlId = "SELECT DISTINCT(fld_company_id) as companyid  FROM tbl_product WHERE fld_subcatid='".$catid."' AND fld_status='Active'";
      $rsId = $dbquery->query($sqlId);
	  while($rowId = $rsId->fetch_object())
	  {
	  if(!in_array($rowId->companyid,$arrCompanyId))
	  {
	  array_push($arrCompanyId,$rowId->companyid);
	    }
	  }
	  
	  $sqlId1 = "SELECT DISTINCT(fld_company_id) as companyid  FROM tbl_service WHERE fld_subcatid='".$catid."' AND fld_status='Active'";
      $rsId1 = $dbquery->query($sqlId1);
	  while($rowId1 = $rsId1->fetch_object())
	  {
	  if(!in_array($rowId1->companyid,$arrCompanyId))
	  {
	  array_push($arrCompanyId,$rowId1->companyid);
	    }
	  }
	 $compIds = implode(",",$arrCompanyId);
	 
	 
?>

<section class="listing-layout ">
<?php if(count($arrCompanyId)>0)
	 {
	 ?>
<div class="list-container clearfix">



<?php  $sqlComp = "SELECT * FROM tbl_company WHERE fld_id IN ($compIds)";
       $rsComp = $dbquery->query($sqlComp);
	   while($rowComp = $rsComp->fetch_object())
	   {
	   
	   $businessType = explode(",",$rowComp->fld_business_type);
	    $imagePath = "images/company/thumb/";
	    $image = $rowComp->fld_image;
?>


<div class="property-item-wrapper">

<article class="property-item clearfix">

<figure>

<a href="#"><img width="244" height="163" src="<?php echo BASE_PATH.$imagePath.$image;?>" class="" /> </a>

</figure>

<div class="detail">

<h5 class="price"> <?php echo ucwords($rowComp->fld_company_name);?> </h5>

<p><?php echo shortDescription($rowComp->fld_desc,180);?> <a class="more-details" href="#">More Details <i class="fa fa-caret-right"></i></a></p>

<p><b>Business Type</b> :<?php $cnt = count($businessType);foreach($businessType as $id){  echo $arrBusinessType["$id"]; if($cnt!=1){ echo ", ";}; $cnt--;}?>

<br>

<b>Address</b> : <?php echo $rowComp->fld_address;?>, <?php echo $rowComp->fld_city;?>, <?php echo $rowComp->fld_state;?>-<?php echo $rowComp->fld_pincode;?>, <?php echo $arrCounty["$rowComp->fld_country"];?></p>

</div>

<div class="property-meta">

<span><a href='#' class='real-btn'>Contact Details</a></span>

<span><a href='product-list.php?compId=<?php echo $rowComp->fld_id;?>' class='real-btn'>View Product</a></span>

<span><a href='<?php echo $rowComp->fld_website_url;?>' target="_blank" class='real-btn'>Vist Website</a></span>

<span><a href='#' class='real-btn'>Send Enquiry</a></span>

</div>

</article>

</div>
 <?php }?>




</div>

<!--<div class='pagination'>

<a href='#' class='real-btn current' >1</a>

<a href='#' class='real-btn'>2</a>

<a href='#' class='real-btn'>3</a>

<a href='#' class='real-btn'>4</a>

<a href='#' class='real-btn'>5</a>

</div>-->

<?php }?>

</section>



</div>

<!-- End Main Content -->

</div>

<!-- End span9 -->

<?php include('common/sidebar-listing.php'); ?>



</div>

</div>

<hr />

<!-- Start Footer -->

<?php include('common/footer.php'); ?>

<!-- End Footer -->





<a href="#top" id="scroll-top"><i class="fa fa-chevron-up"></i></a>

<script type='text/javascript' src='wp-includes/js/jquery/ui/core.mine899.js'></script>

<script type='text/javascript' src='wp-includes/js/jquery/ui/widget.mine899.js'></script>

<script type='text/javascript' src='wp-includes/js/jquery/ui/position.mine899.js'></script>

<script type='text/javascript' src='wp-includes/js/jquery/ui/menu.mine899.js'></script>

<script type='text/javascript' src='wp-includes/js/wp-a11y.min3428.js'></script>

<script type='text/javascript' src='wp-includes/js/jquery/ui/autocomplete.mine899.js'></script>

<script type='text/javascript' src='wp-content/themes/realhomes/js/inspiry-login-register4468.js'></script>

<script type='text/javascript' src='wp-content/themes/realhomes/js/inspiry-search-form4468.js'></script>

<script type='text/javascript'>

/* <![CDATA[ */

var localized = {"nav_title":"Go to..."};

/* ]]> */

</script>

<script type='text/javascript' src='wp-content/themes/realhomes/js/custom4468.js'></script>

<script type='text/javascript' src='wp-includes/js/wp-embed.min3428.js'></script>

<script type='text/javascript' src='wp-content/plugins/dsidxpress/js/autocomplete3f87.js'></script>

</body>

</html>