
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Imperialtechstole : Home </title>
	<?php require('header/component.php'); ?>
	
</head>
<body>

<?php require('header/navbar.php'); ?>
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
			<div class="container ">
				<h1>Find us</h1>
			</div>
		</section>

<?php require('footer/footer.php'); ?>

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

        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

   <?php require("footer/component.php");?>

</body>
</html>