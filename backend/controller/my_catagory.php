<?php
     if(empty($_POST)===false){
      $name = $_POST['name'];
      $seo = $_POST['seo'];
      $pagename = $_POST['pagename'];
      $status = "active";
      
      if (empty($name) || empty($seo) || empty($pagename) || empty($status)) {
          echo  "<div class='error_box' id='box_e'>
                                  You might Left Some Empty Fields
                                  </div>";
      }else{
 $insert = $db->insertData("INSERT INTO my_catagory(my_catagory_name,my_catagory_seo,my_pagename,my_catagory_status,my_catagory_created_at,my_catagory_updated_at) VALUE (?,?,?,?,?,?)", [$name,$seo,$pagename,$status,TIME(),TIME()]);
          echo "<div id='box_e'>
                        <div class='error_box green'>
                            Your complain has been registered.
                        </div>
                    </div>";
      }
  }

  $getRows = $db->getRows("SELECT * FROM my_catagory");
       foreach ($getRows as $row) {
            $my_id = $row['my_id'];
            $my_catagory_name = $row["my_catagory_name"];
            $my_catagory_seo = $row["my_catagory_seo"];            
            $my_pagename = $row["my_pagename"];
            $my_catagory_status = $row["my_catagory_status"];
            $my_catagory_created_at = $row["my_catagory_created_at"];
?>
<tr class="first">
          <td><?php echo $my_id ;?></td>
          <td><?php echo $my_catagory_name ;?></td>
          <td><?php echo $my_catagory_seo ;?></td>
          <td><?php echo  $my_pagename ;?></td>
          <td><?php echo $my_catagory_status ;?></td>
          <td>
              <b><button id="get" data-id="<?php echo $my_id?>">View</button></b>
              <span></span>
          </td>
      </tr>
<?php
    }

