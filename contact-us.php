<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php require('header/component.php');?>
</head>
<body>

	<?php require('header/navbar.php'); ?>  
	<div class="jumbotron text-center">
		<h1 class=" pt-5 pb-5 mt-5">Contact us</h1>
	</div>

<section id="formSection">
	<div class="container">
		<div class="row">
			<div class="col-md-6  pt-5 pb-5">
				<h4 class="title-heading text-center pt-5 pb-4">Happy Customers</h4>
					<div class="happy_client mb-5">
						<i class="far fa-smile"></i> John Doe
					</div>

					<div class="happy_client mb-5">
						<i class="far fa-smile"></i> Sara Doe
					</div>

					<div class="happy_client mb-5">
						<i class="far fa-smile"></i> John Doe
					</div>


			</div>

			<div class="col-md-6 pt-5 pb-5 ">
				<h4 class="title-heading text-center pt-5">
					 Get in touch
				</h4>
				<div class="form pb-5">
					<form action="store/mail.php" method="POST">
					<div class="form-group pt-4">
					<!-- <label for="name" class="col-form-label">Your name:</label> -->
						<input type="text" class="form-control input_bar" id="name" name="name" placeholder="Name : John Doe">
					</div>

					<div class="form-group pt-4">
					<!-- <label for="email" class="col-form-label">Your Email:</label> -->
						<input type="text" class="form-control input_bar" id="email" name="email" placeholder="Email : Johndoe@gmail.com">
					</div>

					<div class="form-group pt-4">
					<!-- <label for="phone" class="col-form-label">Your Phone no:</label> -->
						<input type="text" class="form-control input_bar" id="phone" name="phone" placeholder="Phone no : 9706300000">
					</div>

					<div class="form-group pt-4">
					<!-- <label for="message-text" class="col-form-label">Message:</label> -->
					<textarea class="form-control input_bar" id="message-text" name="message" placeholder="message : Ask me anything"></textarea>
					</div>
						<button type="submit" class="btn mt-3 custom_btn">Send message</button>
					</form>
	     		</div>
			</div>	

		</div>
	</div>
	</section>
	<!-- end content here     -->

    <?php require('footer/footer.php');?>
    
    <?php require('footer/component.php'); ?>
</body>
</html>
