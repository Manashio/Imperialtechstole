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



  <!-- Start change content here -->

    <div class="contents">
        <div class="p-3">
            <h1>This is amazing</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi animi veritatis dicta, dolorum enim saepe impedit harum culpa aliquid suscipit repellat tempore explicabo architecto, fuga maxime, quis ut ea veniam!
                Temporibus similique quidem in possimus quibusdam exercitationem rerum tempora? Quas ea officiis voluptate facere, minima iure? Aliquam adipisci mollitia suscipit animi qui quasi rem esse ipsam, praesentium, quia sapiente harum.
                Veritatis voluptatum incidunt, beatae necessitatibus, quibusdam vero reiciendis voluptatibus repudiandae culpa veniam unde eius, tenetur harum architecto ipsum! Tempore, et ad voluptatibus in commodi distinctio amet nobis quas nihil repellendus!
                Voluptas commodi voluptate voluptatum eius reiciendis expedita exercitationem ipsa nemo neque. Inventore quo autem dignissimos possimus veniam voluptate totam magni facere voluptatum harum quas minus ea ex asperiores, fugiat impedit.
   </p>
        </div>






    <?php require('footer/footer.php');?>
    
    </div>

<!-- end content here     -->



    <?php require('footer/component.php');?>
</body>
</html>