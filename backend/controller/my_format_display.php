<?php
     if(empty($_POST)===false){
          $name = $_POST['name'];
          $size = $_POST['size'];
          $brand = $_POST['brand'];
          $specification = $_POST['specification'];
          $broucher = $_POST['broucher'];
          $image = $_POST['image'];
          $status = "active";
          $some_id = 3;
          if(empty($name) || empty($size) || empty($brand) || empty($image) || empty($broucher) || empty($status)) {
              echo  "<div class='error_box' id='box_e'>
                                    You might Left Some Empty Fields
                         </div>";
          }else{

                    $db->insertData("INSERT INTO my_format_display(my_subcatagory_id,my_display_name,my_display_size,my_display_brand,my_display_specification,my_display_broucher, my_display_image,my_display_status,my_display_created_at,my_display_updated_at) VALUE (?,?,?,?,?,?,?,?,?,?)", [$some_id,$name,$size,$brand,$specification,$broucher,$image,$status,TIME(),TIME()]);
                echo "<div id='box_e'>
                            <div class='error_box green'>
                                Your complain has been registered.
                            </div>
                            </div>";
          }
      }

      $getRows = $db->getRows("SELECT * FROM my_format_display");
      $getRow = $db->getRow("SELECT * FROM my_format_display WHERE my_id =? ", [$id]);
    
?>