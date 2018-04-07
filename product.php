<?php include("config/config.inc.php");
$id = $_GET['id'];

$data = getstaticPagesContant($dbquery, 9);
$query = mysqli_query($dbquery, "SELECT * FROM tbl_service where fld_id='$id'");
$query2 = mysqli_query($dbquery, "SELECT * FROM tbl_service where fld_id='$id'");
$array = mysqli_fetch_array($query2);
$product_name = $array['fld_product_name'];

$products_lists_query = mysqli_query($dbquery, "SELECT * FROM products_lists where product_of='$product_name'");


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
        .panel-title a{
            background: #333;
            padding: 15px;
            margin-bottom: -10px;
            display: block;
            font-size: 0.87rem;
            color:#fff;
            transition: 0.5s;
            border-left: 4px solid #333;
        }
        
        .panel-title a:hover,.panel-title a:focus{
            background:#000;
            color:#fff;
            /* border-top: 2px solid #8253dc; */
            border-left: 4px solid #8253dc;
        }
        #all-product li{
            list-style-type: none;
            display: inline-block;
            margin: 5px;
            width: 250px;
            height: 250px;
            text-align: center;
        }
        #all-product .product-list{
        }
        
        #all-product .product-list h3{
            font-size: 16px;
            color: #555;
            padding: 15px;
        }
        
        #all-product .product-list img{
            height: auto;
            width: 250px;
        }
        .banner{
            display:table-cell;
            vertical-align:middle;
            height: 300px;
            width: 100vw;
            background: #ccc url('https://pre00.deviantart.net/0ea8/th/pre/i/2006/019/e/3/cctv_1280x800_wallpaper_by_mountaincanon.jpg');
            background-position:center;
            background-size:cover;
            margin:-15px;
        }
        .item-holder{
            padding:25px 150px;
        }
    </style>
</head>
<body>
    <?php require('header/navbar.php'); ?>

        

    <div class="contents" style="padding:70px 0px 1px 0px">


  <!-- Start change content here -->
        <section id="all-product">
        <div class="banner">            
            <h1 class="text-center"><?php echo $array['fld_product_name'] ?></h1>

        </div>
        
      
        <div class="item-holder">
      
      <?php
        //  echo $products_lists_query
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

         <?php } ?>
        </div>

        </div>
        </section>
        




<!-- end content here     -->

    <?php require('footer/footer.php');?>
    
    </div>




    <?php require('footer/component.php');?>
</body>
</html>