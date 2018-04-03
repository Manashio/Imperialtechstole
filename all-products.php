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
    </style>
</head>
<body>
    <?php require('header/navbar.php'); ?>
    <div class="sidebar" id="style-3">
    <?php require('addons/sidebar.php'); ?>
    </div>

    <div class="contents">


  <!-- Start change content here -->

        <div class="p-3">
            <h1 class="text-center mt-4">These are the Lists of all our products</h1>
           

        </div>





<!-- end content here     -->

    <?php require('footer/footer.php');?>
    
    </div>




    <?php require('footer/component.php');?>
</body>
</html>