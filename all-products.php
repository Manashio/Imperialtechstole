<?php include("config/config.inc.php");

$data = getstaticPagesContant($dbquery, 9);
$query = mysqli_query($dbquery, "SELECT * FROM tbl_service");
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
            background:#fff;
            height:220px;
            overflow: hidden;
            border:2px solid #fff;
            transition: 0.5s;

        }
        #all-product .product-list:hover{
            border:2px solid #eee;
            background:#eee;
        }
        #all-product .product-list:hover.product-list h3{
            color:#8253dc;
        }
        
        #all-product .product-list h3{
            font-size: 14px;
            color: #000;
            padding: 15px;
            font-weight:bold;
        }
        
        #all-product .product-list img{
            height: 160px;
            width: 250px;
            border:0px;
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
    </style>
</head>
<body>
    <?php require('header/navbar.php'); ?>

        

    <div class="contents" style="padding:70px 0px 1px 0px">


  <!-- Start change content here -->
        <section id="all-product">
        <div class="banner">            
            <h1 class="text-center">Our Products</h1>

        </div>
        <div class="container pt-5 pb-5">
            
            <ul>
                <?php while($a=mysqli_fetch_array($query)){
                    echo "<a href='product.php?id=".$a['fld_id']."'><li>";
                    echo "<div class='product-list'>
                        <div class='img'>
                            <img src='images/packages/".$a['fld_image']."' />
                        </div>
                        <h3>".$a['fld_product_name']."</h3>
                    ";
                    echo "</div>";
                    echo "</li></a>";
                }
                ?>
            </ul>
        </div>
           

        </div>
        </section>
        




<!-- end content here     -->

    <?php require('footer/footer.php');?>
    
    </div>




    <?php require('footer/component.php');?>
</body>
</html>