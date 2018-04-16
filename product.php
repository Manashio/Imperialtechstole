<?php include("config/config.inc.php");
$id = $_GET['id'];

$data = getstaticPagesContant($dbquery, 9);
$query = mysqli_query($dbquery, "SELECT * FROM tbl_service where fld_id='$id'");
$query2 = mysqli_query($dbquery, "SELECT * FROM tbl_service where fld_id='$id'");
$array = mysqli_fetch_array($query2);
$product_name = $array['fld_product_name'];

$products_lists_query = mysqli_query($dbquery, "SELECT * FROM products_lists where product_of='$product_name'");

// $testarray= mysqli_fetch_array($products_lists_query);
$rowcount=mysqli_num_rows($products_lists_query);

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
      
    </style>
</head>
<body>
    <?php require('header/navbar.php'); ?>

        

    <div class="contents" style="padding:70px 0px 1px 0px">


  <!-- Start change content here -->
        <section id="all-product">
        <div class="banner">            
            <h1 class="text-center white-heading"><?php echo $array['fld_product_name'] ?></h1>

        </div>
        
      
        <div class="item-holder">
      
      <?php
        //  echo $products_lists_query
         if($rowcount>0){
            
        while($a=mysqli_fetch_array($products_lists_query)){
                    
        ?>

                <a href="product-item.php?id=<?php echo $a['id']; ?>" class="search_item_link ">
                    <div class="search_item_div mb-2">
                         <div class="row">
                              <div class="col-lg-4">
                                   <img class="" src="https://getuikit.com/v2/docs/images/placeholder_600x400.svg">
                              </div>
                              <div class="col-lg-8">
                                  <h5 class="item_title"><?php echo $a['name']; ?></h5>
                                   <h5>Model: <?php echo $a['model']; ?></h5>
                                   <br>
                                   <p class="item_describtion"> <?php echo $a['description']; ?></p>
                              </div>
                         </div>
                    </div>
               </a>

         <?php } 
         
        }else{
            echo "<h3 class='text-center'>Details Have Not Been Updated in Database Yet</h3><br>";
            echo "<h3 class='text-center'>Please Add Into Your DataBase</h3>";
            echo "<p class='text-center'><a  href='siteadmin/'>Click Here </a>  To Add Product Details.</p>";
        }
        ?>
        </div>

        </div>
        </section>
        




<!-- end content here     -->

    <?php require('footer/footer.php');?>
    
    </div>




    <?php require('footer/component.php');?>
</body>
</html>