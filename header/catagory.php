<?php

    require("config/config.inc.php");
    // $sql_audiovideo= mysqli_query($dbquery,"SELECT * FROM tbl_service where mcatagory = 'audio/video'");
?>
<section id="catagory">
<ul>
<li><a href="#">Audio/Video <i class="fas fa-caret-down"></i></a>
    <ul>
        <li><a href="#">dummy product</a></li>
        <li><a href="#">dummy product</a></li>
        <li><a href="#">dummy product</a></li>
        <li><a href="#">dummy product</a></li>
        <li><a href="#">dummy product</a></li>
        <?php
            // while($a=mysqli_fetch_array[$sql_audiovideo]){
            // echo "<li><a>".$a['mcatagory']."</a></li>";
            // }
        ?>
    </ul>

</li>
<li><a href="#">IT networking <i class="fas fa-caret-down"></i></a>
    <ul>
    
    <li><a href="#">dummy product</a></li>
        <li><a href="#">dummy product</a></li>
        <li><a href="#">dummy product</a></li>
        <li><a href="#">dummy product</a></li>
        <li><a href="#">dummy product</a></li>
    </ul>
</li>
<li><a href="#">Security Servilance <i class="fas fa-caret-down"></i></a></li>
<li><a href="#">Solution <i class="fas fa-caret-down"></i></a></li>
<li><a href="#">Other <i class="fas fa-caret-down"></i></a></li>
</ul>
</section>