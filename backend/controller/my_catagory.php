<?php
     if(empty($_POST)===false){
      $name = $_POST['name'];
      $seo = $_POST['seo'];
      $pagename = $_POST['pagename'];
      $status = "active";
      if (empty($name) || empty($seo) || empty($pagename) || empty($status)) {
          echo  "<div class='error_box' id='box_e'>
                                You might have left some empty fields!
                       </div>";
      }else{
            $insert = $db->insertData("INSERT INTO my_catagory(my_catagory_name,my_catagory_seo,my_pagename,my_catagory_status,my_catagory_created_at,my_catagory_updated_at) VALUE (?,?,?,?,?,?)", [$name,$seo,$pagename,$status,TIME(),TIME()]);
            echo "<div id='box_e'>
                        <div class='error_box green'>
                           Your data has been saved successfully!
                        </div>
                      </div>";
      }
  }
  $getRows = $db->getRows("SELECT * FROM my_catagory");
  $getRow = $db->getRow("SELECT * FROM my_catagory WHERE my_id =? ", [$id]);


  $row_count_cata = sizeof($getRows);

?>


