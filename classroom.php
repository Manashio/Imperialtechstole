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
    #classroom{
        padding: 50px 20px;
    }
           .class-box{
            background: #ccc;
            text-align:center;
        }
        .class-box h4{
            padding:100px 0px;
            display: block;
            text-align:center;
        }
    </style>
</head>
<body>
    <?php require('header/navbar.php'); ?>
    <?php require('header/catagory.php'); ?>

        

    <div class="contents" style="padding:70px 0px 1px 0px">


  <!-- Start change content here -->

        <div class="jumbotron">
            <h1 class="text-center">Classroom</h1>
        </div>
        
        <section id="classroom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">  
                    </div>
                    <div class="col-sm-3">
                    <a href="classroom_types.php">
                        <div class="class-box">
                            <h4>Smart ClassRoom</h4>
                        </div>                  
                    </div></a>
                    <div class="col-sm-3">
                    <a href="classroom_types.php">                 
                        <div class="class-box">
                            <h4>Virtal ClassRoom</h4>
                        </div>                  
                    </div></a> 
                    <div class="col-sm-3"></div>

                </div>
            </div>
        </section>


<!-- end content here     -->

    <?php require('footer/footer.php');?>
    
    </div>




    <?php require('footer/component.php');?>
</body>
</html>