<?php
error_reporting(0);	
session_start();

date_default_timezone_set("Asia/Kolkata");

$arrGPath = explode("/", $_SERVER['SCRIPT_NAME']);
if(count($arrGPath)>0)
{
	for($ixp=0;$ixp<(count($arrGPath)-1);$ixp++)
	{
		if(trim($arrGPath[$ixp])!="")
		{
			$mnIncludePath .= "/" . $arrGPath[$ixp];
		}
	}
	if($mnIncludePath!="") { $mnIncludePath .= "/"; }
}
	 
if($mnIncludePath=="") { $mnIncludePath .= "/"; }
## SET SERVER ROOT PATH
if($_SERVER['HTTP_HOST']=="localhost")
{
	define("DB_USERNAME",'root');
	define("DB_PASSWORD",''); 
	define("DB_DNAME",'imperial_admin');
	define("DB_HOST",'localhost');
	
	#set path
	define("BASE_PATH", $mnIncludePath);
	define("DB_ENABLE_URL_REWRITING",0); //0 to disable or 1 to enable
	define("WEBSITE_URL", "http://localhost/zhang_eng/");
	define('FILES_PATH_4_INCLUDE', $_SERVER['DOCUMENT_ROOT'] . BASE_PATH);
	define('ROOT_PATH_URL', $_SERVER['DOCUMENT_ROOT']."/zhang_eng/");
	define('PAGE_NAME', $arrGPath[2]);
	
}
elseif($_SERVER['HTTP_HOST']=="localhost"){
	define("DB_USERNAME",'root');
	define("DB_PASSWORD",'password'); 
	define("DB_DNAME",'imperial_admin');
	define("DB_HOST",'localhost');
	
	#set path
	define("BASE_PATH", $mnIncludePath);
	define("DB_ENABLE_URL_REWRITING",0); //0 to disable or 1 to enable
	define("WEBSITE_URL", "http://localhost/zhang_eng/");
	define('FILES_PATH_4_INCLUDE', $_SERVER['DOCUMENT_ROOT'] . BASE_PATH);
	define('ROOT_PATH_URL', $_SERVER['DOCUMENT_ROOT']."/zhang_eng/");
	define('PAGE_NAME', $arrGPath[2]);
}
else
{
	/*
		@	DB SET USERNAEM PASSWORD
	*/
	
	define("DB_USERNAME",'imp-user');
	define("DB_PASSWORD",'ew$dJ8C~g[5!');
	define("DB_DNAME",'inperial-db');
	define("DB_HOST",'localhost');

	/*
		@	DB SET USERNAEM PASSWORD
	*/
	

	#set path
	define("BASE_PATH", $mnIncludePath);
	define("DB_ENABLE_URL_REWRITING",1); //0 to disable or 1 to enable
	define("WEBSITE_URL", "http://feixiexports.com/");
	define('FILES_PATH_4_INCLUDE', $_SERVER['DOCUMENT_ROOT'] . BASE_PATH);
	define('ROOT_PATH_URL', $_SERVER['DOCUMENT_ROOT']."/");
	
	
	define('PAGE_NAME', $arrGPath[1]);

}
   ## GET DB CONNECTION	
$dbquery = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DNAME);
if($dbquery->connect_errno > 0)
{
	die('Unable to connect to database ['.$dbquery->connect_error.']');
}

 
  
# constants
define("DATABASE_NAME4BKUP", 'DB');
define("WEBSITE_NAME","");
define("SITEADMIN_WEBSITE_TITLE","Imperial TechSol Pvt. Ltd.- Administrator Section");
define("POWERED_BY_WEBSITE",'Creative Web Solutions');
define("POWERED_BY_URL", "http://www.creativewebsolution.co/");

## Meta Info.
$_CONF['META_TITLE'] = "Welcome To Imperial TechSol Pvt. Ltd.";
$_CONF['META_KEYWORDS'] = "Welcome To Imperial TechSol Pvt. Ltd.";
$_CONF['META_DESC'] = "Welcome To Imperial TechSol Pvt. Ltd.";

$_CONF['FOOTER_COPYRIGHT'] = "� Copyright 2018. flexi. All Rights Reserved.";

define("TOT_REC_PER_PAGE","10");
define("TOT_PAGES_TO_SHOW", 5); //total number of pages to show
define("CURR_PAGE_POS", 3); //set position for current page	
define("RECIEPT_PREFIX", 'EHT'); //set position for current page



#Product img Size 
define("PRODUCT_WIDTH_SIZE", '200'); 
define("PRODUCT_HEIGHT_SIZE", '180'); 
#Product img Size 
define("PRODUCT_WIDTH_THUMB_SIZE", '200'); 
define("PRODUCT_HEIGHT_THUMB_SIZE", '200'); 

# COMPANY IMAGE SIZE

#Product img Size 
define("COMPANY_WIDTH_SIZE", '244'); 
define("COMPANY_HEIGHT_SIZE", '163'); 






   ?>
 
<?php


##Admin function  
function checkAdminLogin()
{
	if((!isset($_SESSION['AID'])) || (!isset($_SESSION['dbAdminUserID'])) || (!isset($_SESSION['dbAdminUserPwd'])) || (!isset($_SESSION['adminUserID'])) || (!isset($_SESSION['adminUserPwd'])))
	{
		return false;
	}
	elseif($_SESSION['AID']=="" || $_SESSION['dbAdminUserID']=="" || $_SESSION['dbAdminUserPwd']=="" || $_SESSION['adminUserID']=="" || $_SESSION['adminUserPwd']=="")
	{
		return false;
	}
	if($_SESSION['adminUserID']==$_SESSION['dbAdminUserID'] && $_SESSION['adminUserPwd']==$_SESSION['dbAdminUserPwd'])
	{
		return true;
	}
	else
	{
		return false;
	}
}

##Front End function 
function checkUserLogin()
{
	if((!isset($_SESSION['UID'])) || (!isset($_SESSION['dbUserID'])) || (!isset($_SESSION['dbUserPwd'])))
	{
		return false;
	}
	elseif($_SESSION['UID']=="" || $_SESSION['dbUserID']=="" || $_SESSION['dbUserPwd']=="")
	{
		return false;
	}
	if($_SESSION['dbUserID']!="" && $_SESSION['dbUserPwd']!="" && $_SESSION['UID']!="")
	{
		return true;
	}
	else
	{
		return false;
	}
}

#Date formate
function convertDate($dt)
{
	$dats = explode("-", $dt);
	$retdate = date('d-M-Y', mktime(0, 0, 0, $dats[1], $dats[2], $dats[0]));
	return $retdate;
}
#Date formate
function convertDateformat($dt)
{
	$dats = explode("-", $dt);
	$retdate = date('Y-m-d', mktime(0, 0, 0, $dats[1], $dats[2], $dats[0]));
	return $retdate;
}

function convert2DateTimeMinute($dt)
{
	if($dt!="")
	{
		$datm = explode(" ", $dt);
		$dats = explode("-", $datm[0]);
		$datms = explode(":", $datm[1]);
		$retdate = date('d-M-Y h:i', mktime($datms[0], $datms[1], $datms[2], $dats[1], $dats[2], $dats[0]));
		return $retdate;
	}
}



function createslugtitle($str){
	// $string = strtolower(trim($string));
	 
  // $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
  // return $slug;
  
  	$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $str);
	$clean = strtolower(trim($clean, '-'));
	$clean = preg_replace("/[\/_|+ -]+/", '-', $clean);

	return $clean;
	
	
}







	


//function shortDescription
function shortDescription($fullDescription,$initialCount=0) 
{
	$shortDescription ='';
	$fullDescription = trim(strip_tags($fullDescription));
	if($fullDescription) {
		if (strlen($fullDescription) > $initialCount) {
		$shortDescription = substr($fullDescription,0,$initialCount).'...';
		}
		else 
		{
			return $fullDescription;
		}
	}
	return $shortDescription;
}

//SeoUrl function
function MakeSeoUrl($str)
{
	// html decode, in case it is coming encoded (AJAX request)
	$seo_title = rawurldecode($str);
	// some characters that might create trouble
	$switch_chars = '(,),\,/';
	$sc = explode(',', $switch_chars);
	foreach ($sc as $c) $seo_title = str_replace($c, '-', $seo_title);
	// leave only alphanumeric characters and replace spaces with hyphens
	$seo_title = strtolower(str_replace('--', '-', preg_replace('/[\s]/', '-', preg_replace('/[^[:alnum:]\s-]+/', '', $str))));
	$len = strlen($seo_title);
	if ($seo_title[$len - 1] == '-') $seo_title = substr($seo_title, 0, -1);
	if ($seo_title[0] == '-') $seo_title = substr($seo_title, 1, $len);
	return $seo_title;
}


##Admin Email show
function fnAdminEmail($dbquery,$admid)
{
	$sqlaeml = "SELECT fld_email from tbl_administrator where fld_id='$admid' and fld_status='1'";
	$rsaeml = $dbquery->query($sqlaeml) or die("Admin Email Error:" . $dbquery->error);
	if($rsaeml->num_rows > 0)
	{
		$rowaeml = $rsaeml->fetch_object();
		$admeml = $rowaeml->fld_email;
	}
	return $admeml;
}

##Admin Mobile show
function fnAdminmobile($dbquery,$admid)
{
	$sqlmb = "SELECT fld_mobile from tbl_administrator where fld_id='$admid' and fld_status='1'";
	$rsmb = $dbquery->query($sqlmb) or die("Admin mobile Error:" . $dbquery->error);
	if($rsmb->num_rows > 0)
	{
		$rowmb = $rsmb->fetch_object();
		$admobile = $rowmb->fld_mobile;
	}
	return $admobile;
}

##Function of Category
function fnCategoryTitle($dbquery, $ctid)
{
	$sqlct = "SELECT fld_name FROM tbl_category WHERE fld_id='$ctid' AND fld_status='Active'";
	$rsct = $dbquery->query($sqlct) or die("function category error:" . $dbquery->error);
	if($rsct->num_rows > 0)
	{
		$rowct = $rsct->fetch_object();
		$funcatname = $rowct->fld_name;
	}
	return $funcatname;
}






##SEO URL
function fnSeoUrl($dbquery, $seoid)
{
	$sqlseo = "SELECT fld_seo_url FROM tbl_pages where fld_id='$seoid'";
	$rsseo = $dbquery->query($sqlseo) or die("SEO URL ERROR:" . $dbquery->error);
	if($rsseo->num_rows > 0)
	{
		$rowseo = $rsseo->fetch_object();
		$seourl = $rowseo->fld_seo_url;
		$pageurl = BASE_PATH."page/".$seourl.".html";
	}
	return $pageurl;
}


#get image size
function getUpImageSize($upFileArr)
	{
		$name = $upFileArr['name'];
		$file = $upFileArr['tmp_name'];

		$system=explode('.',$name);
		if (preg_match('/jpg|jpeg|JPG/',$system[count($system)-1])){
			$src_img=imagecreatefromjpeg($file);
		}
		if (preg_match('/png/',$system[count($system)-1])){
			$src_img=imagecreatefrompng($file);
		}
		
		if (preg_match('/gif|GIF/',$system[count($system)-1])){
			$src_img=imagecreatefromgif($file);
		}
		$size['x']=imageSX($src_img);
		$size['y']=imageSY($src_img);
		return $size;
	}
 



define("CAT_INFO","cat/");
define("PAGE_INFO","page/");



include("arraylist.php");

include("functions.php");
include("pages.php");


$arrayImgcat[1] = "Buisness License";
$arrayImgcat[2] = "Organization Code Certificate";
$arrayImgcat[3] = "Tax Registration";

$arrayImgcomp[1] = "Office Infrastructure";
$arrayImgcomp[2] = "Workshop";

$general = generalSetting($dbquery);
?>