<?php
  
  if(empty($_POST)===false){
     $page_name = $_POST['page_name'];
     $title_name = $_POST['title_name'];
     $brand = $_POST['brand'];
     $seo = $_POST['seo'];
     $img = "imp.png";//$_POST['img'];
     $description = $_POST['description'];
     $broucher = "file.pdf";//$_POST['broucher'];
     $status = "active";
     
      if (empty($page_name) || empty($title_name) || empty($brand) || empty($seo) || empty($img) || empty($description) || empty($broucher) || empty($status) ) {
        $data =  "<div class='error_box' id='box_e'>
                               You might have left some empty fields!
                      </div>";
     }else{
       $insert = $db->insertData("INSERT INTO tbl_main(page_name,`name`,brand,seo,img,`description`,broucher,`status`,created_at,updated_at
         ) VALUE (?,?,?,?,?,?,?,?,?,?)",[$page_name,$title_name,$brand,$seo,$img,$description,$broucher,$status,TIME(),TIME()]); 
         $data = "<div id='box_e'>
                       <div class='error_box green'>
                          Your data has been saved successfully!
                       </div>
                     </div>";
     }
 }
 $getRows = $db->getRows("SELECT * FROM tbl_main");

 ?>