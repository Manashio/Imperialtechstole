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
          background: #eee url('https://www.technobuffalo.com/wp-content/uploads/2016/12/apple-tv-5.jpg');
          background-size:100%;
          background-repeat:no-repeat;
          background-position:center center;
      }
      h4.card-title{
           display:block;
           background:#eee;
           padding :20px 0px;
           text-align:center;
      }
      
      .lcd{
          background:#fff url('https://product.hstatic.net/1000189326/product/upload_ab778b11295d4585b113e9d9ad5b6e7a_master.jpg');
          background-position:center center;
          background-size:70%;
          background-repeat:no-repeat;
      }

      .led{
        background:#fff url('https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png');
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
    <div class="cover"></div>
      
        <div class="container pb-5 pt-5">
        <div class="row pt-5">
        
             
            <div class="col-md-6">
                <a href="video-wall-lcd.php">
                <div class="box lcd">
     
                </div>
                <h4 class="card-title">LCD Video Wall</h4>
                </a>
            </div>

            <div class="col-md-6">
             <a href="video-wall-led.php">             
                <div class="box led">
     
                </div>
                <h4 class="card-title"> LED Video Wall </h4>
               
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