<?php

if(empty($_POST)===false){
  $name = $_POST['name'];
  $brand = $_POST['brand'];
  $specification = $_POST['specification'];
  $broucher = $_POST['broucher'];
  $image = $_POST['image'];

  $status = "active";
  $some = 3;

  if(empty($name) || empty($brand) || empty($specification) || empty($image) || empty($broucher) || empty($status)) {
      echo  "<div class='error_box' id='box_e'>
                            You might have left some empty fields!
                 </div>";
  }else{
          

            $db->insertData("INSERT INTO my_projector(my_projector_id,my_projector_name,my_projector_brand,my_projector_specification,my_projector_broucher,image,my_projector_status,my_projector_created_at,my_projector_updated_at) VALUE (?,?,?,?,?,?,?,?,?)", [$some,$name,$brand,$specification,$broucher,$image,$status,TIME(),TIME()]);

        echo "<div id='box_e'>
                    <div class='error_box green'>
                    Your data has been saved successfully!
                    </div>
                    </div>";
  }
}

$getRows = $db->getRows("SELECT * FROM my_projector");
$getRow = $db->getRow("SELECT * FROM my_projector WHERE my_id =? ", [$id]);
print_r($getRow);

?>