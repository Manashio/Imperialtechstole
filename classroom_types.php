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
     .cover{
          width:100%;
          height:400px;
          background: #eee url('https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/Andrew_Classroom_De_La_Salle_University.jpeg/1200px-Andrew_Classroom_De_La_Salle_University.jpeg');
          background-size:cover;
          background-repeat:no-repeat;
          background-position:center center;
      }
      .product-img{
          width :100%;
          height:300px;
          background:#eee url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJcmRcvkK9Ya0tfcnaI6XE01jWZVSTdQvuqDvc-OlB9Bn9BSk1');
          background-size:cover;
          background-repeat:no-repeat;
          background-position:center center;
      }
    </style>
</head>
<body>
    <?php require('header/navbar.php'); ?>
    <?php require('header/catagory.php'); ?>

    <div class="contents" style="padding:70px 0px 1px 0px">

  <!-- Start change content here -->
         
     
        <section id="classroom_types">

        <?php 
        $query=mysqli_query($dbquery,"SELECT * FROM my_classroom WHERE my_subcatagory_id = '$id'");
        $count = mysqli_num_rows($query);
        $a=mysqli_fetch_array($query)
        
        // if($count<=0){
        //     echo "<h1 class='text-center'>Nothing Found in DataBase. Please Add in Database.</h1>";
        // }else{
           
        // while($a=mysqli_fetch_array($query)){
        //     echo "
        //        <div class='col-sm-12'>
        //         <img class='image' src='images/dummy.png'/>
        //        </div>
        //        <div class='col-sm-12'>
        //        Name: ".$a['my_name']."<br>
        //        Description: ".$a['my_description']."<br>
        //        Products: ".$a['my_products_of']."
        //        </div>
        //        <div class='col-sm-12'>
        //        </div>
        //     ";
        // }
        

    //     $classroomid=mysqli_query($dbquery,"SELECT * FROM my_classroom WHERE my_subcatagory_id = '$id'") or die();
    //     $query2=mysqli_query($dbquery,"SELECT * FROM my_classroom_product WHERE my_subcatagory_id = '$classroomid'");
    //     $count = mysqli_num_rows($query2);
    //     echo "Product Of Smart classRoom:<br>";
    //     while($array= mysqli_fetch_array($query2)){
    //         echo "Name:".$array['my_products_name'];
    //         echo "Description:".$array['description'];
    //         echo "Broucher".$array['broucher'];
                
           
    //     }
    //  }
    
        
?>


</section>

    <div class="cover">
    <h1 class="text-center" style="padding-top:200px; font-weight:bold; font-size:40px; color:#fff; text-transform:uppercase;"><?php echo $a['my_name']; ?> </h1>
    </div>

<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-md-4">
            <div class="product-img">
                
            </div>
        </div>

        <div class="col-md-8">
            <h3 class="mt-3">Product Name</h3>

                <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, doloremque fugit distinctio quaerat harum vitae ducimus eos exercitationem autem sapiente molestiae ullam repudiandae corrupti laborum pariatur id maxime labore? Consequatur? <?php echo $array['my_video_description']; ?></p>
    
                <h5 class="mt-5 mb-5">Product Description</h5>
                
                <table class="mt-5 table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
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