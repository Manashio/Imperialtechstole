<?php 

if(DB_ENABLE_URL_REWRITING==1)
{	
	//$home  =  BASE_PATH."home/";
	
	$home  =  BASE_PATH;
	$chinacommodites = BASE_PATH;
	$chinasection = BASE_PATH."china-exp-section/";
	$province = BASE_PATH."province/$url";
	$expcompany  = BASE_PATH."exp/$url";
	
	$company  = BASE_PATH."company/$url";
	      
	$chinacompanies = BASE_PATH."china-exp-companies/"; 
    $cbecservicecenter = BASE_PATH."service-center/";
	
	$ecommercehub = BASE_PATH."ecommercehub/";
	$ecommcompany = BASE_PATH."ecommerce/$url";  
	
	$buyoffer = BASE_PATH."buy-offer/";
	$buyofferdetails = BASE_PATH."buy-offer/$url";
	$selloffer = BASE_PATH."sell-offer/";
	$sellofferdetails = BASE_PATH."sell-offer/$url";
	$maincat = BASE_PATH."category/$url";
    $subcat = BASE_PATH."subcategory/$url";
	$productlist = BASE_PATH."products/$url";
	$productdetails = BASE_PATH."product-details/$url";
	
	$login = BASE_PATH."login/";
	$registration =BASE_PATH."registration/";
	
	$faq = BASE_PATH."faq/";
	$about = BASE_PATH."about/";
	$helpcenter = BASE_PATH."help-center/";
	$submitcomplain = BASE_PATH."submit-a-complain/";
	$policy = BASE_PATH."policies-rules/";
	$feedback = BASE_PATH."get-paid-your-feedback/";
	$servicecenter = BASE_PATH."service-center/";
	$recommedtofriend = BASE_PATH."recommend-friend/";
	
	
  }
   else {
    $home  =  BASE_PATH."index.php";
	$chinacommodites = BASE_PATH."index.php";
	$company  = BASE_PATH."company.php?compId=$id";
	  
	$chinasection = BASE_PATH."china-exp-section.php";
	$province = BASE_PATH."china-exp-section-province.php?provinceId=$id";
	$expcompany  = BASE_PATH."exp-company.php?compId=$id";
	
	
	$chinacompanies = BASE_PATH."china-exp-companies.php"; 
    $cbecservicecenter = BASE_PATH."service-center.php";
	
	$ecommercehub = BASE_PATH."ecommercehub.php";
	$ecommcompany = BASE_PATH."ecomm-company.php?compId=$id"; 
	
	$buyoffer = BASE_PATH."buy-offer.php";
	$buyofferdetails = BASE_PATH."buy-offer-details.php?offerid=$id";
	$selloffer = BASE_PATH."sell-offer.php";
	$sellofferdetails = BASE_PATH."sell-offer-details.php?offerid=$id";
	$maincat = BASE_PATH."main.php?catid=$id";
    $subcat = BASE_PATH."sub-main.php?catid=$id";
	$productlist = BASE_PATH."product-list.php?compId=$id";
	$productdetails = BASE_PATH."product-details.php?prodId=$id";
	
	
	$login = BASE_PATH."login.php";
	$registration =BASE_PATH."registration.php";
	
	$faq = BASE_PATH."faq.php";
	$about = BASE_PATH."about-us.php";
	$helpcenter = BASE_PATH."help-center.php";
	$submitcomplain = BASE_PATH."submit-a-complain.php";
	$policy = BASE_PATH."policies-rules.php";
	$feedback = BASE_PATH."get-paid-your-feedback.php";
	$servicecenter = BASE_PATH."service-center.php";
	$recommedtofriend = BASE_PATH."recommend-friend.php";
	
 
  }
 $pagename = basename($_SERVER['SCRIPT_FILENAME']);
 if($pagename=="index.php"){
    $pageid =1;
  }
  if($pagename=="help-center.php"){  $pageid =2; }
  if($pagename=="submit-a-complain.php"){  $pageid =3; }
  if($pagename=="policies-rules.php"){  $pageid =4; }
  if($pagename=="get-paid-your-feedback.php"){  $pageid =5; }
  if($pagename=="service-center.php"){  $pageid =6; }
  if($pagename=="recommend-friend.php"){  $pageid =7; }
  if($pagename=="about-us.php"){  $pageid =8; }
  
   if($pagename=="china-exp-section.php" ){  $pageid =9; } 
   if($pagename=="china-exp-section-province.php" ){  $pageid =10; } 
   if($pagename=="china-exp-companies.php"){  $pageid =11; }
   
   if($pagename=="ecommercehub.php"){  $pageid =13; }
   $data = getstaticPagesContant($dbquery, $pageid);
    $generaldata =  generalSetting($dbquery);
 	
?>