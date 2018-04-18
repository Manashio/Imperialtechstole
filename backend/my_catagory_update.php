<?php
require_once('core/db_conn.php');
if(empty($_POST)===false){
  $id = $_POST['id'];
  $new_name = $_POST['new_name'];
  $new_seo = $_POST['new_seo'];
  $new_pagename = $_POST['new_pagename'];
  $new_status = "active";
  if(empty($new_name) || empty($new_seo) || empty($new_pagename) || empty($new_status)) {
      echo 
       "<div class='error_box' id='box_e'>
                            You might Left Some Empty Fields
         </div>";
  }else{
      $updateData = $db->updateData("UPDATE my_catagory SET `my_catagory_name` = ? , `my_catagory_seo` = ? ,`my_pagename` = ? , `my_catagory_status` = ? , `my_catagory_updated_at`  = ? WHERE my_id = ? ", [$new_name,$new_seo,$new_pagename,$new_status,TIME(),$id]);
      header("location: my_catagory.php");
  }
}
