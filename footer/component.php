	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="dev/assets/js/fontawesome.js"></script>
	<script src="dev/assets/js/jquery.validate.min.js"></script>
	

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

	<script>
		$("#form_data_nav").validate({
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
