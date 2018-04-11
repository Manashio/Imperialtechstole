<?php 

require('config/dbconnect.php');
$sql="SELECT * FROM tbl_service  WHERE fld_catagory = 'it_networking'";

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

     <section class="search_only eee">
        <section class=" mb-5">
            <div class="container mt-5 mb-5">
                <h2 class="mt-5 mb-5">IT NETWORKING LISTS</h2>
                <?php 
                if($search_query_array <= 0){
                    ?>
                    <h1 class="text-center">OOPS !</h1>
                    <p class="text-center">Result Not Found</p>
                    <?php
                }else{
                while($a=mysqli_fetch_array($search_query)){
                    ?>
                    <a href="product.php?id=<?php echo $a['fld_id']; ?>" class="search_item_link ">
                        <div class="items_search">
                                    <div class="search_img">    
                                        <img class="" src="images/packages/<?php echo $a['fld_image']; ?>" align="middle">
                                        <h5 class="item_title"><?php echo $a['fld_product_name']; ?></h5>
                                        <p class="item_describtion"><?php echo $a['']; ?> </p>
                                    </div>
                        </div>
                    </a>

                <?php
                        }
                    }
                ?>          
            </div>
         </section>
     </section>

<?php require('footer/footer.php'); ?>
<?php require("footer/component.php");?>

</body>
</html>