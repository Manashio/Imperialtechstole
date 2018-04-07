<?php 

require('config/dbconnect.php');
$srch_id = $_GET['search'];
$sql="SELECT * FROM tbl_service  WHERE fld_mkeywords like '%".$srch_id."%' OR fld_product_name like '%".$srch_id."%'  OR fld_mtitle like '%".$srch_id."%'";

$search_query = mysqli_query($dbquery,$sql);
$search_query_array = mysqli_fetch_array($search_query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Imperialtechstole : Home </title>
     <?php require('header/component.php'); ?>
     
     </head>
<body>

<?php require('header/navbar.php'); ?>
<?php require('header/catagory.php'); ?>

     <section class="search_only">
          <div class="container mt-5 mb-5">
               <h2 class="mt-5 mb-5">Search for :  <span><b> <?php echo $srch_id; ?> </b></span></h2>
               <?php 
              if($search_query_array <= 0){
                  ?>
                  <h1 class="text-center">OOPS !</h1>
                  <p class="text-center">Result Not Found</p>
                  <?php
               }else{
               while($a=mysqli_fetch_array($search_query)){
                
                ?>


               <a href="product-item.php?id=<?php echo $a['fld_id']; ?>" class="search_item_link ">
                    <div class="search_item_div mb-2">
                         <div class="row">
                              <div class="col-lg-4">
                                   <img class="" src="images/packages/<?php echo $a['fld_image']; ?>">
                              </div>
                              <div class="col-lg-8">
                                   <h5 class="item_title"><?php echo $a['fld_product_name']; ?></h5>
                                   <br>
                                   <p class="item_describtion"><?php echo $a['']; ?> </p>
                              </div>
                         </div>
                    </div>
               </a>

               <?php
                     }
                   }
               ?>

               <!-- <a href="search_item.php" class="search_item_link">
                    <div class="search_item_div">
                         <div class="row">
                              <div class="col-lg-4">
                                   <img class="" src="https://getuikit.com/v2/docs/images/placeholder_600x400.svg">
                              </div>
                              <div class="col-lg-8">
                                   <h5 class="item_title">Product name</h5>
                                   <br>
                                   <p class="item_describtion">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              </div>
                         </div>
                    </div>
               </a> -->
               
          </div>
     </section>

<?php require('footer/footer.php'); ?>
<?php require("footer/component.php");?>

</body>
</html>