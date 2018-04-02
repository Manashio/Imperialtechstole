<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require('header/component.php'); ?>
    <title>Document</title>
    <style>
        .sidebar{
            position: fixed;
            margin-top: 0px;
            width: 250px;
            padding-top: 100px;
            height: 100vh;
            color: #fff;
            background: #ccc;
            z-index: 1;
            overflow-y: scroll;
        }
        .contents{
            /* padding-left:250px; */
            padding: 200px 0px 250px 250px;
        }
                    
            #style-3::-webkit-scrollbar-track
            {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                background-color: #F5F5F5;
            }

            #style-3::-webkit-scrollbar
            {
                width: 6px;
                background-color: #F5F5F5;
            }

            #style-3::-webkit-scrollbar-thumb
            {
                background-color: #000000;
            }
            *{
  margin: 0px;
  padding: 0px;
}

html {
  height: 100%;
}

body {
  position: relative;
  min-height: 100%;
}
footer{
  text-align: center;
  position: absolute;
  bottom: 0px;
  width: calc(100% - 250px);
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
        <h1>Container</h1>






    <?php require('footer/footer.php');?>
    
    </div>

<!-- end content here     -->



    <?php require('footer/component.php');?>
</body>
</html>