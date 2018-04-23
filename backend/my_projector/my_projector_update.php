<?php
require_once('../core/db_conn.php');

if(empty($_POST)===false){
    $id = $_POST['id'];
    $name =$_POST['name'];
    $brand = $_POST['brand'];
    $specification = $_POST['specification'];
    $broucher = $_POST['broucher'];
    $image = $_POST['image'];
    // cng
    $status = "active";
  if(empty($name) || empty($brand) || empty($specification) || empty($broucher) || empty($image) || empty($status)) {
      echo "<div class='error_box' id='box_e'>
                            You might Left Some Empty Fields
         </div>";
  }else{
      $updateData = $db->updateData("UPDATE my_projector SET `my_projector_name` = ? ,`my_projector_brand` = ? , `my_projector_specification` = ? , `my_projector_broucher` = ? ,`image` = ? ,`my_projector_status` = ? ,`my_projector_updated_at` = ? WHERE my_id = ? ", [$name,$brand,$specification,$broucher,$image,$status,TIME(),$id]);
      header("location: index.php");
  }
}
