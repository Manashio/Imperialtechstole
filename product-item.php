<?php 
require("config/dbconnect.php");
$id = $_GET['id'];

$products_lists_query = mysqli_query($dbquery, "SELECT * FROM products_lists where id='$id'");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Imperialtechstole : Home </title>
     <?php require('header/component.php'); ?>
     
     </head>
<body>

<?php require('header/navbar.php'); ?>
<?php require('header/catagory.php'); ?>

     <section>
          <div class="container mt-5 mb-5 text-left">     
              
          
      <?php
        //  echo $products_lists_query
        while($a=mysqli_fetch_array($products_lists_query)){                    
        ?>
               <div class="search_item_div mb-2">
                         <div class="row">
                              <div class="col-lg-4">
                                   <img class="" src="https://getuikit.com/v2/docs/images/placeholder_600x400.svg">
                              </div>
                              <div class="col-lg-8">
                                   <h5 class="item_title"><?php echo $a['name']; ?></h5>
                                   <h5>Model: <?php echo $a['model']; ?></h5>
                                   <br>
                                   <h5>Product description</h5>
                                   <p class="item_description"><?php echo $a['description']; ?> </p><br>
                                   <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed aspernatur vero minima nihil, tenetur exercitationem eum cupiditate voluptate, numquam libero nemo iusto modi corporis temporibus accusantium obcaecati error, provident ipsa.</p> -->
                              </div>
                         </div>
                    </div>

                   
        <?php } ?>

               

          </div>
     </section>

<?php require('footer/footer.php'); ?>
<?php require("footer/component.php");?>

</body>
</html>