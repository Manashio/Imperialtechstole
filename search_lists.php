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
               <h1 class="mt-5 mb-5">Search items</h1>
               <a href="search_item.php" class="search_item_link ">
                    <div class="search_item_div mb-2">
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
               </a>

               <a href="search_item.php" class="search_item_link">
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
               </a>
               
          </div>
     </section>

<?php require('footer/footer.php'); ?>
<?php require("footer/component.php");?>

</body>
</html>