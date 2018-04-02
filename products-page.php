<?php require_once("config/config.inc.php");


$sqlProd = "SELECT * FROM tbl_service WHERE fld_id='1' ";
$rsProd = $dbquery->query($sqlProd);
$rowProd = $rsProd->fetch_object();
$image = $rowProd->fld_image;
$imagePath = "images/packages/";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require('header/component.php'); ?>
    <title>Document</title>
    
</head>
<body>
    
<section class="left-nav">
  <div class="container">
    <div class="col-md-12">
       <?php include('addons/sidebar.php'); ?>
	        <div class="col-md-9 text-justify">
          </div>
    </div>
  </div>
</section>

</body>
</html>