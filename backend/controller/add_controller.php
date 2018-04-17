<?php
require_once('core/db_conn.php');
function escape($value){
	return $value;
}
 if(empty($_POST)===false){
        $name = escape($_POST['name']);
        $phone  = escape($_POST['phone']);
        $date_e  = escape($_POST['date_e']);
        $address  = escape($_POST['address']);
        $vehicle  = escape($_POST['vehicle']);
        $category  = escape($_POST['category']);
        $complain  = escape($_POST['complain']);
        $forward  = escape($_POST['forward']);
        $taken  = escape($_POST['taken']);
        $cmp_through  = escape($_POST['cmp_through']);
        $status ="active";
         $frag = rand (100,1000000);
        date_default_timezone_set('Asia/Kolkata');
         $appKey = "KEY-0-".$frag;
         $posted = date('d M l, h:i a');
        if (empty($name) || empty($phone) || empty($date_e) || empty($category) || empty($complain) || empty($forward) || empty($taken) || empty($cmp_through)) {
            $message = " Required ! ";
            $error_box = "<div class='error_box' id='box_e'>
                                    You might Left Some Empty Fields
                                    </div>";
        }else{
	 $insert = $db->insertData("INSERT INTO cmp_log(appKey,name,phone, date_e,complain,vehicle,address,category,forward,taken,cmp_through,posted,status) VALUE (?,?,?,?,?,?,?,?,?,?,?,?,?)", [$appKey,$name,$phone,$date_e,$address,$vehicle,$category,$complain,$forward,$taken,$cmp_through,$posted,$status]);
            $error_box = "<div id='box_e'>
                          <div class='error_box green'>
                              Your complain has been registered.
                          </div>
                           Go to - <a href='view.php'>Log Book</a><br><br><br>
                          </div>";
        }
    }
?>