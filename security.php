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
           .cover{
          width:100%;
          height:400px;
          background: #eee url('http://signagelive.com/wp-content/uploads/2015/05/Eurostar-Video-Wall-2.png');
          background-size:cover;
          background-repeat:no-repeat;
          background-position:center center;
      }
      .product-img{
          width :100%;
          height:300px;
          background:#eee url('http://bwindia.net/bwfiles/images/Monitor%20Dell%20Ultrasharp%20U2518D%2025%20inch%20QHD%20DP%20mDP%20HDMI%205%20USB%201.jpg');
          background-size:cover;
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
        <div class="cover">
        <h1 class="text-center"><?php echo $array['my_video_name']; ?></h1>
    </div>

<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-md-4">
            <div class="product-img">
                
            </div>
        </div>

        <div class="col-md-8">
            <h3 class="mt-3">Product Name</h3>

                <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, doloremque fugit distinctio quaerat harum vitae ducimus eos exercitationem autem sapiente molestiae ullam repudiandae corrupti laborum pariatur id maxime labore? Consequatur? <?php echo $array['my_video_description']; ?></p>
    
                <h5 class="mt-5 mb-5">Product Description</h5>
                
                <table class="mt-5 table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                        </table>
        </div>
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