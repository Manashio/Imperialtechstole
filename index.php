<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Imperialtechstole : Home </title>
	<?php require('header/component.php'); ?>
	<style>
		.slider_done{
			height:360px;
		}
		.mystyle{
			width:100%;
			height:100vh;
			background:#eee;
			position:fixed;
			z-index:3;
			-webkit-animation: mymove 0.9s ease-out; /* Safari 4.0 - 8.0 */
    			animation: mymove 0.9s ease-out;
		}
		.res{
			width:100%;
			height:300px;
			background:#eee;
		}
		@-webkit-keyframes mymove {
			from {bottom: 1000px;}
			to {bottom: 0px;}
		}
		@keyframes mymove {
			from {bottom: 1000px;}
			to {bottom: 0px;}
		}
	</style>
</head>
<body>

<?php require('header/navbar.php'); ?>
<?php require('header/catagory.php'); ?>

<div id="div_target" class="" style="display:none;">
	<div class="container pt-5 pb-5">
		<div class="text-right">
			<button class="btn btn-danger" id="close"><i class="fas fa-times"></i> Close</button>
		</div>
		<h1>OUR PRODUCTS</h1>
		<br><br>
			<div class="row">
				<div class="col-md-4">
					<img src="https://images.yourstory.com/2016/08/125-fall-in-love.png" alt="" class="res mb-3">
					<h4 class="text-center">Product Name</h4>
				</div>

				<div class="col-md-4">
					<img src="https://images.yourstory.com/2016/08/125-fall-in-love.png" alt="" class="res mb-3">
					<h4 class="text-center">Product Name</h4>
				</div>

				<div class="col-md-4">
					<img src="https://images.yourstory.com/2016/08/125-fall-in-love.png" alt="" class="res mb-3">
					<h4 class="text-center">Product Name</h4>
				</div>				
			</div>
		<br><br><br><br>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non tempore placeat provident eveniet a ad harum exercitationem quae rerum, neque, quidem iusto, rem distinctio ullam. Commodi aperiam quo sequi reprehenderit.</p>
	</div>
</div>

<div class="title-box">	
	<div id="carouselSection">
				<div id="carousel-1" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="images\1.gif" alt="First slide">
									<div class="sld caption1">
										<h1>CCTV SERVILANCE</h1>
										<h3>TRACK ALL MOMENTS OF YOUR VALUABLES</h3>
									</div>
								</div>

								<div class="carousel-item">
									<img class="d-block w-100" src="images\2.gif">
									<div class="sld caption2">
                  <h1>PRINTERS</h1>
                  <h3>PRINT COLOUR OF YOUR LIFE ON A PAPER</h3>
                </div>
              </div>

								<div class="carousel-item">
									<img class="d-block w-100" src="images\3.gif" alt="Third slide">
										<div class="sld caption3">
										<h1>PROJECTOR</h1>
										<h3>Fill Display Of Your Wall</h3>
									</div>
								</div>


								<div class="carousel-item">
									<img class="d-block w-100" src="images\4.gif" alt="Third slide">
									<div class="sld caption4">
										<h1>Video Wall</h1>
										<h3>Digital Flat Display on your Wall!</h3>
									</div>
								</div>
					</div>
		
						<a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				</div>
	
	<div class="container">
	<div class="row mt-5">
		<div class="col-lg-6">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					
					<div class="carousel-inner">
								<div class="carousel-item active slider_done">
									<img class="d-block w-100" src="http://carsonsigns.com.au/gallery/d3.jpg" alt="First slide">
									<div class="carousel-caption d-none d-md-block">
											<!-- <h5>Item name</h5>
										<p>Lorem ipsum dolor sit amet.</p> -->
									</div>
								</div>
								<div class="carousel-item slider_done">
									<img class="d-block w-100" src="https://cdn.varstreet.com/uploads/VS_UH55F-E.jpg">
								</div>
								<div class="carousel-item slider_done">
									<img class="d-block w-100" src="https://www.digitalcinema.com.au/media/catalog/product/cache/1/image/2535x1694/9df78eab33525d08d6e5fb8d27136e95/y/h/yht-8930ax.jpg" alt="Third slide">
								</div>
					</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
		</div>
		<div class="col-lg-6 mt-5">
		<div class="container pt-5">
			<h1 class="title-heading white">Connecting technologies <br> with their audience.</h1>

				<a href="all-products.php" class="title-link">View All of our products</a>
		</div>
		</div>
	</div>
	</div>
	</div>


<section id="productSection">
	<div class="container">
		<div class="row">

			<div class="col-sm-4">
				<a href="video-wall.php">
					<div class="product-box">
					<div class="img">
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK85B5tfGr-hYm21W-YA_AtlLYdYG6zV_mKv63ZSJddCyq1km-" alt="" >
					</div>
				<h2 class="text-center">Video Walls</h2>
				</div>
				</a>
			</div>


			<div class="col-sm-4">
			<a href="itnetworking.php">
				<div class="product-box">
					<div class="img">
					<img src="https://5.imimg.com/data5/IM/EY/MY-10708136/laptop-500x500.png" alt="" >
					</div>
				<h2 class="text-center">IT networking</h2>
				</div>
				</a>
			</div>

				
				<div class="col-sm-4">
			<a href="security.php">
				<div class="product-box">
					<div class="img">
					<img src="http://www.cynics.com.my/wp-content/uploads/2017/05/1000-systems.png" alt="" >
					</div>
				<h2 class="text-center">Security Servilance</h2>
				</div>
				</a>
			</div>


		</div>
	</div>
</section>

	<div class="cover-img lg_banner">
		
	</div>


	<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6 pt-5 pb-5">
				<h4 class="title-heading black pt-5">Need help?</h4>
				
				<p class="pt-5 pb-5">
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos consectetur ducimus non minima earum ipsam asperiores totam dolore nam maxime, nobis repellendus dolorem doloremque doloribus temporibus officiis. Veniam, praesentium ipsam ?
				</p>
			</div>

			<div class="col-md-6 pt-5 pb-5">
				<h4 class="title-heading black pt-5 text-center">
					 We're on social media
				</h4>
				<p class="pt-5 pb-5 lg text-center">
					
					<a href="https://www.facebook.com/imperialtechsolindia/"><i class="fab fa-facebook-f ml-5 mr-2"></i></a>

					<a href="https://twitter.com/imperialtechsol"><i class="fab fa-twitter ml-2 mr-2"></i></a>

					<a href="https://www.instagram.com/imperialtechsol/"> <i class="fab fa-instagram ml-2 mr-2"></i></a>

					 <!-- <a href=""><i class="fab fa-google-plus-g ml-2 mr-2"></i></a> -->
					<a href="https://www.pinterest.com/imperialtechsol/"><i class="fab fa-pinterest-p"></i></a>
					<a href="https://au.linkedin.com/company/imperial-techsol-pvt-ltd"><i class="fab fa-linkedin-in ml-2 mr-2"></i></a>

				</p>
				
			</div>
		</div>
	</div>
	</section>




	<div class="cover-img small_cover dell_banner">	
	</div>





	<section>
	<div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="https://cdn.dribbble.com/users/736867/screenshots/4416803/aiko.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">

                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="https://cdn.dribbble.com/users/1063469/screenshots/4134344/deerdribbble_1.gif" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                   
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
		  </div>
		</div>

		
	</div>
	</section>

		<div class="cover-img small_cover server_banner">	
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

<?php require('footer/footer.php'); ?>
<?php require("footer/component.php");?>

<script>
	const div_target = document.getElementById("div_target");
	const close = document.getElementById("close");
	close.addEventListener("click", function(){
    		div_target.style.display = "none";
	});
	setTimeout(() => {
		div_target.classList.add("mystyle");
		div_target.style.display = "block";
	}, 5000);

</script>

</body>
</html>