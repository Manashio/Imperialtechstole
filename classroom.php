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
      #videoSection .box{
    /* display: table-cell; */
    /* vertical-align: middle; */
    position: relative;
    /* height: 300px; */
    /* width: 100vw; */

    /* margin: 50px!important; */
    text-align: center;

    height:300px;
    overflow:hidden;
      }
      .cover{
          width:100%;
          height:400px;
          background: #eee url('https://e3.365dm.com/17/04/1096x616/41a2b46eee0889ce2885bf1d5e49b15aaf17bdc8eac9ff7d9c4a4acd6be54753_3935392.jpg?20170421030841');
          background-size:100%;
          background-repeat:no-repeat;
          background-position:center center;
          position:relative;
          top:40px;
      }
      h4.card-title{
           display:block;
           background:#eee;
           padding :20px 0px;
           text-align:center;
      }
      
      .vcr{
          background:#fff url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaadAZFchKKT_9VwSZI2aPDx91ByphiM5HJkeNdb-GkTNBIMVanA');
          background-position:center center;
          background-size:70%;
          background-repeat:no-repeat;
      }

      .scr{
        background:#fff url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKvYJyDmONQSKI7Yde_ffCL4cH7ZMlP7x7kmHmecnSEmrn5Tdk1w');
          background-position:center center;
          background-size:70%;
          background-repeat:no-repeat;
      }

    </style>
</head>
<body>
    <?php require('header/navbar.php'); ?>
    <?php require('header/catagory.php'); ?>

        

    <div class="contents" style="padding:70px 0px 1px 0px">


  <!-- Start change content here -->

       
        <section id="videoSection">
    <div class="cover">
        </div>
      
        <div class="container pb-5 pt-5">
        <div class="row pt-5">
        
             
            <div class="col-md-6">
                <a href="classroom_types.php?id=12">
                <div class="box vcr">
     
                </div>
                <h4 class="card-title">Virtual Classroom</h4>
                </a>
            </div>

            <div class="col-md-6">
             <a href="classroom_types.php?id=12">             
                <div class="box scr">
     
                </div>
                <h4 class="card-title">Smart Classroom</h4>
               
            </div>
            </a>
             
        </div>
        </div>

    </section>


<!-- end content here     -->

    <?php require('footer/footer.php');?>
    
    </div>




    <?php require('footer/component.php');?>
</body>
</html>