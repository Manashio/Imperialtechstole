<?php 

    // include("config/config.inc.php");
    require('config/dbconnect.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require('header/component.php'); ?>
    <title>Document</title>
    <style>
    .image{
        width: 100px;
        height: 100px;
    }
    .table td, .table th{
        vertical-align:middle;
    }
    .view{        
    font-size: 30px;
    }
    </style>
</head>
<body>
    <?php require('header/navbar.php'); ?>
    <?php require('header/catagory.php'); ?>

        

    <div class="contents" style="padding:70px 0px 1px 0px">


  <!-- Start change content here -->

        <div class="jumbotron">
             <h1 class="text-center">Large Format Display</h1>
        </div>
        
        <table class="table">
        <tr>
            <th>SL.No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Size</th>
            <th>Brand</th>
            <th>Specification</th>
            <th>View</th>
        </tr>
            <?php 
             $query = mysqli_query($dbquery,"SELECT * FROM my_format_display");
  
            $slno=1;
            while($array = mysqli_fetch_array($query)){
                echo " 
                <a class='hyperlink' href='#'>
                    <tr>
                        <td>".$slno."</td>
                        <td><a href='format-display-product.php?id=".$array['my_subcatagory_id']."'>
                        <img class='image' src='images/dummy.png'></a></td>
                        <td><a href='format-display-product.php?id=".$array['my_subcatagory_id']."'>".$array['my_display_name']."</a></td>
                        <td>".$array['my_display_size']."</td>
                        <td>".$array['my_display_brand']."</td>
                        <td>".$array['my_display_specification']."</td>
                        <td><a href='format-display-product.php?id=".$array['my_subcatagory_id']."'> <i class='fas fa-eye view'></i> </a></td>
                        
                    </tr>
                    </a>
                    ";
                    $slno++;
                }
            ?>
        </table>


<!-- end content here     -->

    <?php require('footer/footer.php');?>
    
    </div>




    <?php require('footer/component.php');?>
</body>
</html>