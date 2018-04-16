<?php 

    require("config/dbconnect.php");

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
      #videoSection .box{
    /* display: table-cell; */
    /* vertical-align: middle; */
    position: relative;
    padding: 50px 10px;
    /* height: 300px; */
    /* width: 100vw; */
    background: #ccc;
    /* margin: 50px!important; */
    text-align: center;
    /* bottom: 50px; */
    margin-bottom: 50px;
      }

    </style>
</head>
<body>
    <?php require('header/navbar.php'); ?>
    <?php require('header/catagory.php'); ?>

     <div class="contents" style="padding:70px 0px 1px 0px">

  <!-- Start change content here -->
    <section id="videoSection">
        <div class="jumbotron">
        <h1 class="text-center">Video Wall</h1>
        </div>
        <div class="container">
        <div class="row">
        
             <div class="col-sm-3">
             
            </div>
            <div class="col-sm-3">
                <a href="video-wall-product.php?id=1">
                <div class="box">
                    LCD Video Wall 
                </div>
                </a>
            </div>
            <div class="col-sm-3">
             <a href="video-wall-product.php?id=2">             
                <div class="box">
                    LED Video Wall 
                </div>
            </div>
            </a>
             <div class="col-sm-3">
             
            </div>
        </div>
        </div>

    </section>

<!-- end content here     -->

    <?php require('footer/footer.php');?>
    
    </div>




    <?php require('footer/component.php');?>
</body>
</html>