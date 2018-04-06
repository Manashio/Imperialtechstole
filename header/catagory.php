<?php

    require("config/config.inc.php");
    $sql_audiovideo= mysqli_query($dbquery,"SELECT * FROM tbl_service where fld_catagory = 'audio_video'");
    $sql_servilance= mysqli_query($dbquery,"SELECT * FROM tbl_service where fld_catagory = 'securityservilance'");
    $sql_itnetworking= mysqli_query($dbquery,"SELECT * FROM tbl_service where fld_catagory = 'it_networking'");
    $sql_solutions=  mysqli_query($dbquery,"SELECT * FROM tbl_service where fld_catagory = 'solutions'");
    $sql_other= mysqli_query($dbquery,"SELECT * FROM tbl_service where fld_catagory = 'other'");
?>
<section id="catagory">

<ul>
<li><a href="#">Audio/Video <i class="fas fa-caret-down"></i></a>
    <ul>
        <?php
        while($array=mysqli_fetch_array($sql_audiovideo)){
            echo "<li><a href='product.php?id=".$array['fld_id']."'>".$array['fld_product_name']. "</a></li>";
        }
        ?>
       
    </ul>

</li>
<li><a href="#">IT networking <i class="fas fa-caret-down"></i></a>
    <ul>
    <?php
        while($array=mysqli_fetch_array($sql_itnetworking)){
            echo "<li><a href='product.php?id=".$array['fld_id']."'>".$array['fld_product_name']. "</a></li>";
        }
        ?>
    
    </ul>
</li>
<li><a href="#">Security Servilance <i class="fas fa-caret-down"></i></a>
    <ul>
    <?php
        while($array=mysqli_fetch_array($sql_servilance)){
            echo "<li><a href='product.php?id=".$array['fld_id']."'>".$array['fld_product_name']. "</a></li>";
        }
        ?>
    </ul>
</li>
<li><a href="#">Solution <i class="fas fa-caret-down"></i></a>
    <ul>
        <?php
            while($array=mysqli_fetch_array($sql_solutions)){
                echo "<li><a href='product.php?id=".$array['fld_id']."'>".$array['fld_product_name']. "</a></li>";
            }
            ?>
    </ul>
</li>
<li><a href="#">Other <i class="fas fa-caret-down"></i></a>
<ul>
    <?php
        while($array=mysqli_fetch_array($sql_other)){
            echo "<li><a href='product.php?id=".$array['fld_id']."'>".$array['fld_product_name']. "</a></li>";
        }
        ?>
    </ul>
</li>
</ul>
</section>