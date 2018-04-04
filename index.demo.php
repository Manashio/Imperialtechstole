

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Imperialtechstole : Home </title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
     <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
     <link rel="stylesheet" type="text/css" href="dev/assets/css/app.css">
     <link rel="stylesheet" type="text/css" href="dev/assets/css/custom.css">
     <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
 -->
 <script src="dev/assets/js/fontawesome.js"></script>
	
	<style>
	#catagory{
		margin-top:70px;
	}
		#catagory ul{
			text-align:center;
			margin:0px;
			transition: 0.5s;
		}
		#catagory ul li{
			display: inline-block;
		}
		#catagory ul li a{
			display: block;
			padding: 10px 40px;
			color:#8253dc;
		}

		#catagory ul li ul{
			position: absolute;			
			display: none;
			background: #fff;
			z-index:1;
		}
		
		#catagory ul li:hover ul {
			display: block;
		}
		
		#catagory ul li:hover a{
		}
		#catagory ul li ul li{
			display: block;			
		}
		
		#catagory ul li ul li a{
			padding: 8px 40px;
			text-align: center;
		}
          @media(max-width: 995px){
               .title-link{
                    padding:20px 30px;
               }
              
          }
	</style>
</head>
<body>

<div class="menu-top">
          <div class="row">
			   <div class="col-3">
			   		<a href="index.php" class="brand-icon text-center" >Brand</a>
				</div>
				<div class="col-5">
					<div class="search1">
                         <form action="">
                    	     <i class="fas fa-search searchicon"></i> 
							  <input class="search1 ml-2" type="text" placeholder="Search here"> 
                         </form>
					</div>
				</div>
				<div class="col">
					<a href="#" class="btn org" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Get started</a>
					<div id="target" class="hum-btn pt-3 pr-5">   
                         <span></span>
                         <span></span>
                         <span></span>
                    </div>
				</div>
          </div>
     </div>
	<nav id="menu">
			<ul class="sidenav">
				<li><a href="index.php"><i class="fas fa-home mr-2"></i>  Home</a></li>
				<li><a href="#"><i class="fas fa-wrench mr-2"></i>  Service</a></li>
				<li><a href="#"><i class="fas fa-home mr-2"></i>  About Us</a></li>
				<li><a href="contact-us.php"><i class="fas fa-home mr-2"></i>  Contact Us</a></li>
			</ul>
	</nav>
     <div class="div" id="block"></div>


<!--Model-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="width:100%!important;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ask me anything</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="store/mail.php" method="POST">
          <div class="form-group">
            <label for="name" class="col-form-label">Your name:</label>
            	<input type="text" class="form-control" id="name" name="name" placeholder="John Doe">
          </div>

		<div class="form-group">
            <label for="email" class="col-form-label">Your Email:</label>
            	<input type="text" class="form-control" id="email" name="email" placeholder="Johndoe@gmail.com">
          </div>

		<div class="form-group">
            <label for="phone" class="col-form-label">Your Phone no:</label>
            	<input type="text" class="form-control" id="phone" name="phone" placeholder="9706300000">
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text" name="message"></textarea>
          </div>
					<div class="modal-footer">
						<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
						<button type="submit" class="btn btn-primary">Send message</button>
					</div>
        </form>


      </div>
     </div>
  </div>
</div>

 
<section id="catagory">
<ul>
<li><a href="#">Audio/Video <i class="fas fa-caret-down"></i></a>
    <ul>
        <li><a href="#">dummy product</a></li>
        <li><a href="#">dummy product</a></li>
        <li><a href="#">dummy product</a></li>
        <li><a href="#">dummy product</a></li>
        <li><a href="#">dummy product</a></li>
            </ul>

</li>
<li><a href="#">IT networking <i class="fas fa-caret-down"></i></a>
    <ul>
    
    <li><a href="#">dummy product</a></li>
        <li><a href="#">dummy product</a></li>
        <li><a href="#">dummy product</a></li>
        <li><a href="#">dummy product</a></li>
        <li><a href="#">dummy product</a></li>
    </ul>
</li>
<li><a href="#">Security Servilance <i class="fas fa-caret-down"></i></a></li>
<li><a href="#">Solution <i class="fas fa-caret-down"></i></a></li>
<li><a href="#">Other <i class="fas fa-caret-down"></i></a></li>
</ul>
</section>
	<div class="title-box">
		
		<div class="container pt-5">
			<h1 class="title-heading pt-5">Connecting technologies <br> with their audience.</h1>
		</div>

		<a href="all-products.php" class="title-link">View All of our products</a>
	</div>


<section id="productSection">
	<div class="container">
		<div class="row">

			<div class="col-sm-4">
				<a href="video-wall.php">
					<div class="product-box">
					<div class="img">
					<img src="http://www.rawstockmedia.com/photos/high-tech-laptops-for-passionate-gamers-pictures/High-Tech-Laptops-for-Passionate-Gamers2.jpg" alt="" >
					</div>
				<h2 class="text-center">Video Walls</h2>
				</div>
				</a>
			</div>


				<div class="col-sm-4">
				<div class="product-box">
					<div class="img">
					<img src="http://www.rawstockmedia.com/photos/high-tech-laptops-for-passionate-gamers-pictures/High-Tech-Laptops-for-Passionate-Gamers2.jpg" alt="" >
					</div>
				<h2 class="text-center">Some Product</h2>
				</div>
			</div>

				
				<div class="col-sm-4">
				<div class="product-box">
					<div class="img">
					<img src="http://www.rawstockmedia.com/photos/high-tech-laptops-for-passionate-gamers-pictures/High-Tech-Laptops-for-Passionate-Gamers2.jpg" alt="" >
					</div>
				<h2 class="text-center">Some Product</h2>
				</div>
			</div>


		</div>
	</div>
</section>

	<div class="cover-img">
		
	</div>


	<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6 pt-5 pb-5">
				<h4 class="title-heading pt-5">Need help?</h4>
				
				<p class="pt-5 pb-5">
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos consectetur ducimus non minima earum ipsam asperiores totam dolore nam maxime, nobis repellendus dolorem doloremque doloribus temporibus officiis. Veniam, praesentium ipsam ?
				</p>
			</div>

			<div class="col-md-6 pt-5 pb-5">
				<h4 class="title-heading pt-5 text-center">
					 We're on social media
				</h4>
				<p class="pt-5 pb-5 lg text-center">
					<i class="fab fa-facebook-f ml-5 mr-2"></i>  <i class="fab fa-twitter ml-2 mr-2"></i>
					<i class="fab fa-google-plus-g ml-2 mr-2"></i> <i class="fab fa-instagram ml-2 mr-2"></i>
					<i class="fab fa-linkedin-in ml-2 mr-2"></i>
				</p>
				
			</div>
		</div>
	</div>
	</section>




	<div class="cover-img small_cover">	
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

		<div class="cover-img small_cover">	
		</div>

		<section>
			<div class="container pt-5 pb-5">
				<h1 class="pt-5 pb-5">Find us</h1>
			</div>
		</section>

<footer>
<div class="container">
    <div class="row">
    <div class="col-md-3">
    <h1 class="">Product</h1>
        <ul>
        <li><a href="#">Product 1</a></li>
        <li><a href="#">Product 1</a></li>
        <li><a href="#">Product 1</a></li>
        <li><a href="#">Product 1</a></li>
        <li><a href="#">Product 1</a></li>
        
        </ul>
    </div>
    <div class="col-md-3">
    <h1 class="">Product</h1>
        <ul>
        <li><a href="#">Product 1</a></li>
        <li><a href="#">Product 1</a></li>
        <li><a href="#">Product 1</a></li>
        <li><a href="#">Product 1</a></li>
        <li><a href="#">Product 1</a></li>
        
        </ul>
    </div>
    <div class="col-md-3">
    <h1 class="">Product</h1>
        <ul>
        <li><a href="#">Product 1</a></li>
        <li><a href="#">Product 1</a></li>
        <li><a href="#">Product 1</a></li>
        <li><a href="#">Product 1</a></li>
        <li><a href="#">Product 1</a></li>
        
        </ul>
    </div>
    <div class="col-md-3">
    <h1 class="">Product</h1>
        <ul>
        <li><a href="#">Product 1</a></li>
        <li><a href="#">Product 1</a></li>
        <li><a href="#">Product 1</a></li>
        <li><a href="#">Product 1</a></li>
        <li><a href="#">Product 1</a></li>
        
        </ul>
    </div>

    </div>
</div>
   
</footer><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	 <script src="../dev/assets/js/fontawesome.js"></script>
	 <script>
     	$(document).ready(function(){
					$("#target").click( function(){
					$("#menu").toggleClass('active');
					$(".div").toggleClass('off');
					$("#target").toggleClass('on');
				});	

				$("#block").click( function(){
					$("#menu").toggleClass('active');
					$(".div").toggleClass('off');
					$("#target").toggleClass('on');
				});

		});

     </script>
</body>
</html>