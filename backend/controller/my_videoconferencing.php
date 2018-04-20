<?php

if(empty($_POST)===false){

  $name = $_POST['name'];
  $image = $_POST['image'];
  $point = $_POST['point'];
  $multipart = $_POST['multipart'];
  $brand = $_POST['brand'];
  $status = "active";
  $some_id = 3;
  if(empty($name) || empty($point) || empty($brand) || empty($image) || empty($multipart) || empty($status)) {
      echo  "<div class='error_box' id='box_e'>
                            You might Left Some Empty Fields
                 </div>";
  }else{
      $db->insertData("INSERT INTO my_videoconferencing(my_catagory_id,my_videoconference_name,my_images,my_point_desc,my_multipart_desc, my_brand,my_status,created_at,updated_at) VALUE (?,?,?,?,?,?,?,?,?)", [$some_id,$name,$image,$point,$multipart,$brand,$status,TIME(),TIME()]);
      echo "<div id='box_e'>
                    <div class='error_box green'>
                        Your complain has been registered.
                    </div>
                    </div>";
  }
}
$getRow = $db->getRow("SELECT * FROM my_videoconferencing WHERE my_id =? ", [$id]);
$getRows = $db->getRows("SELECT * FROM my_videoconferencing");
?>