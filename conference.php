<?php 
// include("config/config.inc.php");
    require('config/dbconnect.php');

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
        .img{
            width: 100%;
            height: auto;
        }
        .ul{
            text-align:center;
        }
        .ul li{
            display: inline-block;
            
        }
        .ul li a{
            padding: 10px;
            display: block;
            background: #555;
            width: 100px;
            color: #fff;
        }
        .cover{
          width:100%;
          height:400px;
          background: #eee url('http://www.conklinoffice.com/files/conklin/pages/about/conference-room-design-tips/Room---Conf-Cherry.jpg');
          background-size:100%;
          background-repeat:no-repeat;
          background-position:center center;
      }
    </style>
</head>
<body>
    <?php require('header/navbar.php'); ?>
    <?php require('header/catagory.php'); ?>

        

    <div class="contents" style="padding:70px 0px 1px 0px">


  <!-- Start change content here -->
        <div class="cover"></div>

        <div class="container pt-5 pb-5">
            <div class="row pt-5 pb-5">
                <div class="col-md-4">
                    <img class="img" src="images/dummy.png" alt="">
                </div>

                <div class="col-md-8">
                    <h1 class="pb-5"> Video Conferencing</h1>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae assumenda esse nesciunt dicta soluta quibusdam magnam molestias, harum saepe minima qui maiores beatae deleniti magni explicabo incidunt exercitationem nobis pariatur?
                    Voluptas dicta provident eius iure fuga quidem sed consectetur neque placeat explicabo ex cum quam minima deserunt aliquid dolorum, ducimus corrupti rem dolor labore. Dicta, ducimus voluptatem. Aliquam, in cupiditate?
                    Nesciunt tempora, voluptatum in enim odit distinctio nobis? Soluta velit expedita inventore ut doloremque saepe fugiat voluptatibus distinctio, eos assumenda quasi atque totam eligendi quos odio optio a, aliquam illo.
                    Asperiores iusto, exercitationem, nisi dolor voluptatibus totam reiciendis iste, accusamus temporibus rerum nesciunt quod? Obcaecati quos nostrum dignissimos. Consequuntur error id quo doloremque aperiam! Esse adipisci rerum voluptatum harum recusandae!
                    
                </div>
            </div>

            <div class="row ">
                <div class="col-md-4">
                    <img class="img" src="images/dummy.png" alt="">
                </div>
                <div class="col-md-8">
                    <h3 class="pb-5"> About Product</h3>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae assumenda esse nesciunt dicta soluta quibusdam magnam molestias, harum saepe minima qui maiores beatae deleniti magni explicabo incidunt exercitationem nobis pariatur?
                    Voluptas dicta provident eius iure fuga quidem sed consectetur neque placeat explicabo ex cum quam minima deserunt aliquid dolorum, ducimus corrupti rem dolor labore. Dicta, ducimus voluptatem. Aliquam, in cupiditate?
                    Nesciunt tempora, voluptatum in enim odit distinctio nobis? Soluta velit expedita inventore ut doloremque saepe fugiat voluptatibus distinctio, eos assumenda quasi atque totam eligendi quos odio optio a, aliquam illo.
                    Asperiores iusto, exercitationem, nisi dolor voluptatibus totam reiciendis iste, accusamus temporibus rerum nesciunt quod? Obcaecati quos nostrum dignissimos. Consequuntur error id quo doloremque aperiam! Esse adipisci rerum voluptatum harum recusandae!
                    
                </div>
            </div>

            <div class="mt-5 pt-5 pb-5">
                <h1 class="">Point to point solution</h1>
                <hr>
                <p class="pt-5 pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique rerum provident qui! Dolore, laborum quidem, sint voluptatum voluptates tenetur ipsam itaque vitae magni distinctio nesciunt, placeat reprehenderit voluptas voluptatibus deleniti.Non provident repellat aliquam veritatis. Vitae, adipisci iste! Amet, eius? Voluptatibus tempora modi placeat illum quis optio, doloremque esse veniam eveniet laboriosam cum dolorum ipsum dolore. Fugit, iste. Recusandae, deleniti.
                Nemo eos dolore, magnam, amet repudiandae at quas quis nisi, ipsam porro temporibus corrupti. Natus minima voluptatibus, consequuntur placeat voluptatem corporis ipsum aspernatur mollitia porro quod esse impedit eligendi maxime!
                </p>
            </div>


               <section>
			<div class="container pt-5 pb-5">
				<div id="company">
					<h1 class="pt-5 pb-5 text-center">Products Partners</h1>
							<ul class="company_logo text-center">
								<li><img src="images/lg.png" alt="" class="brandlogo"></li>
								<li><img src="images/philips.png" alt="" class="brandlogo"></li>
								
								<li><img src="images/hp.png" alt="" class="brandlogo"></li>
								<li><img src="images/dell.png" alt="" class="brandlogo"></li>
								<li><img src="images/hitachi.png" alt="" class="brandlogo"></li>
								<li><img src="images/bose.png" alt="" class="brandlogo"></li>
								<li><img src="images/yamaha.png" alt="" class="brandlogo"></li>
								<li><img src="images/sennheiser.png" alt="" class="brandlogo"></li>
							</ul>
				</div>
			</div>
		</section>

        </div>

<!-- end content here     -->

    <?php require('footer/footer.php');?>
    
    </div>




    <?php require('footer/component.php');?>
</body>
</html>