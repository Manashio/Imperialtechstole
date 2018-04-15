<?php

    require("config/config.inc.php");

    $sql_catagory= mysqli_query($dbquery,"SELECT * FROM my_catagory");
   
?>
<section id="catagory">
     <ul>
<?php 
    while($a=mysqli_fetch_array($sql_catagory)){
?>
     
            <li><a href="<?php echo $a['my_pagename']; ?>"><?php echo $a['my_catagory_name']; ?> <i class="fas fa-caret-down"></i></a>
                <ul>
                    <?php
                    $cat_id = $a['my_id'];
                    // print_r($cat_id); die();
                    
                     $sql_subcatagory = mysqli_query($dbquery,"SELECT * FROM my_subcatagory where my_catagory_id='$cat_id'");
                    while($array=mysqli_fetch_array($sql_subcatagory)){
                       ?>
                   
                    <li><a href="<?php echo $array['my_pagename']; ?>?id=<?php echo $array['my_id'];?>"> <?php echo $array['my_subcatagory_name']; ?> </a></li>
                    

                    <?php
                         }
                    ?>
                </ul>
               
            </li>
<?php

    }
?>   
</ul>
</section>