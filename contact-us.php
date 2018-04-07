<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
		<?php require('header/component.php');?>
		
		<style>
       #map {
				width: 100%;
				height: 400px;
				position:relative;
				float:left;
				top:60px;
       }
    </style>
</head>
<body>

	<?php require('header/navbar.php'); ?>  
	<div id="map">
		<div class="jumbotron text-center" >
				<h1 class=" pt-5 pb-5 mt-5">Contact us</h1>
		</div>
	</div>

<section id="formSection">
	<div class="container">
		<div class="row">


			<div class="col-md-6  pt-5 pb-5" >

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
			<script>
						function initMap() {
							var uluru = {lat: -25.363, lng: 131.044};
							var map = new google.maps.Map(document.getElementById('map'), {
								zoom: 4,
								center: uluru
							});
							var marker = new google.maps.Marker({
								position: uluru,
								map: map
							});
						}
		</script>
		<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9FDi9NYChqbm06P8EI9_dttClbWhxWhQ&callback=initMap">
    </script>

			<div class="col-md-6 pt-5 pb-5 ">
				<h4 class="title-heading text-center pt-5">
					 Get in touch
				</h4>
				<div class="form pb-5">
				<form action="store/mail.php" method="POST" id="form_data">
					<div class="form-group pt-4">
						<input type="text" class="form-control input_bar" id="name" name="name" placeholder="Name : John Doe">
					</div>

					<div class="form-group pt-4">
						<input type="text" class="form-control input_bar" id="email" name="email" placeholder="Email : Johndoe@gmail.com">

						
					</div>

					<div class="form-group pt-4">
						<input type="text" class="form-control input_bar" id="phone" maxlength="10" name="phone" placeholder="Phone no : 9706300000" onkeyup="this.value = this.value.replace(/[^0-9]/, '')">
						
					</div>

					<div class="form-group pt-4">
						<textarea class="form-control input_bar" id="message_text" name="message" 	placeholder="message : Ask me anything"></textarea>
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

    	<script>
				$("#form_data").validate({
					rules: {
							name: "required",
							email: {
								required: true,
								email: true
							},
							phone: {
								required: true,
								number: true
							},
							message: {
								required: true,
							},
					},
					messages: {
					name: "Please specify your name",
					email: {
						required: "We need your email address to contact you",
						email: "Your email address must be in the format of name@domain.com"
					},phone: {
						required: "We need your phone number to contact you",
					},message: {
						required: "Please write something",
					}
				}
				});
		</script>

		
</body>
</html>
