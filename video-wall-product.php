<?php 


    // include("config/config.inc.php");
    require('config/dbconnect.php');

    $id = $_GET['id'];
   
    // print_r($array['my_video_name']);

    // $name = $array['my_video_name'];
    // echo $name;
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
      
    </style>
</head>
<body>
    <?php require('header/navbar.php'); ?>
    <?php require('header/catagory.php'); 

     $query = mysqli_query($dbquery,"SELECT * FROM my_videowall where my_id='$id'");
     $array = mysqli_fetch_array($query);
    ?>

        

    <div class="contents" style="padding:70px 0px 1px 0px">


  <!-- Start change content here -->

    <div class="jumbotron">
        <h1 class="text-center"><?php echo $array['my_video_name']; ?></h1>
    </div>
    <div class="description">
        <?php echo $array['my_video_description']; ?>
    </div>


<!-- end content here     -->

    <?php require('footer/footer.php');?>
    
    </div>
    <?php require('footer/component.php');?>
</body>
</html>