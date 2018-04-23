<?php
require_once('../core/db_conn.php');
if(empty($_POST)===false){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $image = $_POST['image'];
    $point = $_POST['point'];
    $multipart = $_POST['multipart'];
    $brand = $_POST['brand'];
    // cng
    $status = "active";
  if(empty($name) || empty($point) || empty($brand) || empty($image) || empty($multipart) || empty($status)) {
      echo 
       "<div class='error_box' id='box_e'>
                            You might Left Some Empty Fields
         </div>";
  }else{
      $updateData = $db->updateData("UPDATE my_videoconferencing SET `my_videoconference_name` = ? , `my_images` = ? ,`my_point_desc` = ? , `my_multipart_desc` = ? , `my_brand` = ? ,`my_status` = ? ,`updated_at` = ? WHERE my_id = ? ", [$name,$image,$point,$multipart,$brand,$status,TIME(),$id]);
      header("location: index.php");
  }
}
