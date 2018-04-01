<?php

function menu($dbquery)
{
   
     $sql = "SELECT * FROM tbl_category where fld_parentid =0 and fld_status='Active' order by fld_name ASC ";
	 $rsquery = $dbquery->query($sql) or die("Error" .$dbquery->error);
	  $first=0;
	 while($rowData = $rsquery->fetch_object())
	 {
		 if($first==1){
			 $drop="dropdown-submenu";
		 }else{
			$drop=''; 
		 }
	$menu.='<li class="dropdown '.$drop.'">';
	 $menu.='<ul class="dropdown-menu">';
     
	 $sql1 = "SELECT * FROM tbl_category where fld_parentid ='".$rowData->fld_id."' and fld_status='Active' order by fld_name ASC";
	
	 $rsquery1 = $dbquery->query($sql1) or die("Error" .$dbquery->error);
	 if($rsquery1->num_rows>0){
		 $first=1;
	 }else{
		$first==0; 
	 }
	 $second=0;
	 while($rowData1 = $rsquery1->fetch_object())
	 {
		 if($second==1){
			 $drop2="dropdown-submenu";
		 }else{
			$drop2=''; 
		 }
	   $menu.='<li class="dropdown '.$drop2.'">';
	    
		 $menu.=' <ul class="dropdown-menu"> ';
	 $sql2 = "SELECT * FROM tbl_category where fld_parentid ='".$rowData1->fld_id."' and fld_status='Active' order by fld_name ASC";
	
	  $rsquery2 = $dbquery->query($sql2) or die("Error" .$dbquery->error);
	 if($rsquery1->num_rows>0){
		 $second=1;
	 }else{
		$second==0; 
	 }
	 $third=0;
	  while($rowData2 = $rsquery2->fetch_object())
	  {
		  
		  
		  if($third==1){
			 $drop3="dropdown-submenu";
		 }else{
			$drop3=''; 
		 }
	     $menu.='<li class="dropdown '.$drop3.'">';
	    $menu.='<a href="product-details.php?id='.$rowData2->fld_id.'">'.$rowData2->fld_name.'</a>';
		 $menu.='</li>';
	   }
		 
		 $menu.='</ul>';	
$menu.='<a href="product-details.php?id='.$rowData1->fld_id.'" class="dropdown-toggle">'.$rowData1->fld_name.'</a>';		 
	    $menu.='</li>';
	 }
	 
	 $menu.='</ul>';
	 $menu.='<a href="product-details.php?id='.$rowData->fld_id.'" class="dropdown-toggle">'.$rowData->fld_name.'</a>';
	 $menu.='</li>';
	 
	 }
	 
	  return $menu;
}

###---------------static page content---------------------
 function getstaticPagesContant($dbquery, $pageid)
 { 
	
	 $sql = "SELECT * FROM tbl_pages where fld_id ='".$pageid."' and fld_status=1";
	 $rsquery = $dbquery->query($sql) or die("Error" .$dbquery->error);
	 $rowData = $rsquery->fetch_object();
     $data = array("title"=>$rowData->fld_title,"metatitle"=>$rowData->fld_mtitle,"metakeywords"=>$rowData->fld_mkeywords,"metadescription"=>$rowData->fld_mdesc,"content"=>html_entity_decode($rowData->fld_desc),"image"=>$rowData->fld_image);
  
    return $data;
 }
 
 
 ###---------------company document content---------------------
 function getcompDocument($dbquery,$companyid,$type)
 { 
	 $data = array();
	 $sql = "SELECT * FROM tbl_document where fld_company_id ='".$companyid."' and fld_image_cat='".$type."' and fld_status=1";
	 $rsquery = $dbquery->query($sql) or die("Error" .$dbquery->error);
	 while($rowData = $rsquery->fetch_object())
	 {
	  array_push($data,$rowData->fld_image);
	  }
      return $data;
 }
 
###---------------static page content---------------------
 function generalSetting($dbquery)
 { 
	
	 $sql = "SELECT * FROM tbl_administrator";
	 $rsquery = $dbquery->query($sql) or die("Error" .$dbquery->error);
	 $rowData = $rsquery->fetch_object();
     $data = array(
	 "name"=>$rowData->fld_name,
	 "username"=>$rowData->fld_username,
	 "password"=>$rowData->fld_userpass,
	 "email"=>$rowData->fld_email,
	 "phone"=>$rowData->fld_phone,
	 "facebook"=>$rowData->fld_facebook,
	 "twitter"=>$rowData->fld_twitter,
	 "linkedin"=>$rowData->fld_linkedin,
	 "googleplus"=>$rowData->fld_googleplus,
	  "address"=>$rowData->fld_address,
	   "youtube"=>$rowData->fld_youtube,
	   "pinterest"=>$rowData->fld_youtube,
	 
	 
	 );
  
    return $data;
 }
 
  
 ##-----------------company recored-----------------
 function companyDetails($dbquery,$userid)
 {
	  $sql = "SELECT * FROM tbl_company where fld_id ='".$userid."' and fld_status='Active'";
	 $rsquery = $dbquery->query($sql) or die("Error" .$dbquery->error);
	 $rowData = $rsquery->fetch_object();
     $data = array("id"=>$rowData->fld_id,
	 "email"=>$rowData->fld_email,
	 "metatitle"=>$rowData->fld_mtitle,
	 "metakeywords"=>$rowData->fld_mkeywords,
	 "metadescription"=>$rowData->fld_mdesc,
	 "desc"=>html_entity_decode($rowData->fld_desc),
	 "image"=>$rowData->fld_image,
	 "username"=>$rowData->fld_name,
	 "companyname"=>$rowData->fld_company_name,
	 "mobile"=>$rowData->fld_mobile,
	 "phone"=>$rowData->fld_phone,
	 "address"=>$rowData->fld_address,
	 "city"=>$rowData->fld_city,
	 "state"=>$rowData->fld_state,
	 "country"=>$rowData->fld_country,
	 "pincode"=>$rowData->fld_pincode,
	 "fax"=>$rowData->fld_fax,
	 "status"=>$rowData->fld_status,
	 "regdate"=>$rowData->fld_reg_date,
	 "seourl"=>$rowData->fld_seourl,
	 "businesstype"=>$rowData->fld_business_type,
	 "websiteurl"=>$rowData->fld_website_url
	 );
  
    return $data;
	 
 }
  

?>