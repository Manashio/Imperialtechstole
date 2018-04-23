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
        .img{
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <?php require_once('header/navbar.php'); ?>
    <?php
     require_once('header/catagory.php');
      ?>

        

    <div class="contents" style="padding:70px 0px 1px 0px">


  <!-- Start change content here -->

  <?php 
    $query = mysqli_query($dbquery,"SELECT * FROM my_projector");
    
  ?>

    
       
    

    <div class="container pt-5 pb-5">
        <div class="row pt-5 pb-5">
        <div class="col-sm-4">
                <img src="images/dummy.png" class="img" alt="">
        </div>
        <div class="col-sm-8">
        <h1 class="pb-5">Projector</h1>
            <table class="table">
                <tr>
                    <th>SL.No</th>
                    <th>Brand</th>
                    <th>Specification</th>
                    <th>Broucher</th>
                </tr>
                <?php
                $slno = 1;
                  while($a=mysqli_fetch_array($query)){
                        echo "
                        <tr>
                            <td>".$slno."</td>
                            <td>".$a['my_projector_brand']."</td>
                            <td>".$a['my_projector_specification']."</td>
                            <td><a href='".$a['my_projector_broucher']."' class='btn btn-info' download> Download </a></td>
                        </tr>
                        ";
                        $slno++;
                    }
               
                ?>
            </table>
            </div>
        </div>
    </div>

<!-- end content here     -->

    <?php require('footer/footer.php');?>
    
    </div>




    <?php require('footer/component.php');?>
</body>
</html>