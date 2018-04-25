<?php
require_once('../core/db_conn.php');

if(empty($_POST)===false){
    $id = $_POST['id'];
    $name =$_POST['name'];
    $size =$_POST['size'];
    $model =$_POST['model'];
    $brand = $_POST['brand'];
    $specification = $_POST['specification'];
    $broucher = $_POST['broucher'];
    $image = $_POST['image'];
    $status =  $_POST['status'];
  if(empty($name) || empty($size) || empty($brand) || empty($specification) || empty($broucher) || empty($image) || empty($status)) {
      echo 
       "<div class='error_box' id='box_e'>
                            You might Left Some Empty Fields
         </div>";
  }else{
      $updateData = $db->updateData("UPDATE my_format_display SET `my_display_name` = ? , `my_display_size` = ?, `my_model_number` = ? ,`my_display_brand` = ? , `my_display_specification` = ? , `my_display_broucher` = ? ,`my_display_image` = ? ,`my_display_status` = ? ,`my_display_updated_at` = ? WHERE my_id = ? ", [$name,$size,$model,$brand,$specification,$broucher,$image,$status,TIME(),$id]);
     
      header("location: index.php");
  }
}
