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
     <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</head>
<body>
	<div class="menu-top">
          <div class="row">
               <div class="col-md-3">
                    <div class="brand-icon ml-4 mr-5 pl-4px pr-4 text-center">
                         <a href="" class=" text-center" >Brand</a>
                    </div>
                        
               </div>
               <div class="col-md-5">
               <div class="search1">
                         <!-- <label for="search"><i class="fas fa-search searchicon"></i>
                              <input type="text" name="searchText" id="searchb" class="searchbar">
                         </label>  -->
                         <form action="">
                         <i class="fas fa-search searchicon"></i> 
                          <input class="search1 ml-2" type="text" placeholder=""> 
                         </form>

                    </div>
               </div>

               <div class="col-md-1">
                    <a href="#" class="btn org">Get started</a>
               </div>

               <div class="col-md-3">
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
				<li><a href="#"><i class="fas fa-home mr-2"></i>  Home</a></li>
				<li><a href="#"><i class="fas fa-wrench mr-2"></i>  Service</a></li>
				<li><a href="#"><i class="fas fa-home mr-2"></i>  About Us</a></li>
				<li><a href="#"><i class="fas fa-home mr-2"></i>  Contact Us</a></li>
			</ul>
	</nav>


	
		</div>



     <div class="div"></div>
	<div class="title-box">
		
		<div class="container pt-5">
			<h1 class="title-heading pt-5">Connecting technologies <br> with their audience.</h1>
		</div>

		<a href="" class="title-link">View some of our products</a>
	</div>



	<div class="cover-img">
		
	</div>


	<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 class="title-heading pt-5">Need help?</h4>
				<p class="pt-5 pb-5">
				hello world
				</p>
			</div>

			<div class="col-md-6">
				<h4 class="title-heading pt-5 pb-5 text-center">
					 Ask me anything
				</h4>
				
			</div>
		</div>
	</div>
	</section>


	<div class="cover-img">	
	</div>


	<section>
	<div class="container">
		<div class="text-center">
			<h4 class="title-heading pt-5">What do we deliver</h4>
			
		</div>
	</div>
	</section>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script>
     	$(document).ready(function(){
		$("#target").click( function(){
			$("#menu").toggleClass('active');
			$(".div").toggleClass('off');
			$("#target").toggleClass('on');
		});	
	});
     </script>

</body>
</html>