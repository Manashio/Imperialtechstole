<?php 
// include("config/config.inc.php");
    require('config/dbconnect.php');
    $id = $_GET['id'];
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
     #classroom_types .image{
         height:200px;
         width: 200px;
     }
    </style>
</head>
<body>
    <?php require('header/navbar.php'); ?>
    <?php require('header/catagory.php'); ?>

    <div class="contents" style="padding:70px 0px 1px 0px">

  <!-- Start change content here -->
         
        <div class="jumbotron">
            <h1 class="text-center">Classroom Types</h1>
        </div>
        <section id="classroom_types">

        <?php 
        $query=mysqli_query($dbquery,"SELECT * FROM my_classroom WHERE my_subcatagory_id = '$id'");
        $count = mysqli_num_rows($query);
        
        if($count<=0){
            echo "<h1 class='text-center'>Nothing Found in DataBase. Please Add in Database.</h1>";
        }else{
           
        while($a=mysqli_fetch_array($query)){
            echo "
               <div class='col-sm-12'>
                <img class='image' src='images/dummy.png'/>
               </div>
               <div class='col-sm-12'>
               Name: ".$a['my_name']."<br>
               Description: ".$a['my_description']."<br>
               Products: ".$a['my_products_of']."
               </div>
               <div class='col-sm-12'>
               </div>
            ";
        }

        $classroomid=mysqli_query($dbquery,"SELECT * FROM my_classroom WHERE my_subcatagory_id = '$id'") or die();
        $query2=mysqli_query($dbquery,"SELECT * FROM my_classroom_product WHERE my_subcatagory_id = '$classroomid'");
        $count = mysqli_num_rows($query2);
        echo "Product Of Smart classRoom:<br>";
        while($array= mysqli_fetch_array($query2)){
            echo "Name:".$array['my_products_name'];
            echo "Description:".$array['description'];
            echo "Broucher".$array['broucher'];
                
           
        }
    }
        
?>

</section>
        
<!-- end content here     -->

    <?php require('footer/footer.php');?>
    
    </div>




    <?php require('footer/component.php');?>
</body>
</html>