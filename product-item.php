<?php 
require("config/dbconnect.php");
$id = $_GET['id'];

$products_lists_query = mysqli_query($dbquery, "SELECT * FROM products_lists where id='$id'");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Imperialtechstole : Home </title>
     <?php require('header/component.php'); ?>
     
     </head>
     <style>
     input[type="email"], input[type="password"] {
    margin: 0px 0px;
}</style>
<body>

<?php require('header/navbar.php'); ?>
<?php require('header/catagory.php'); ?>

     <section>
          <div class="container mt-5 mb-5 text-left">     
              
          
      <?php
        //  echo $products_lists_query
        while($a=mysqli_fetch_array($products_lists_query)){                    
        ?>
               <div class="search_item_div mb-2">
                         <div class="row">
                              <div class="col-lg-4">
                                   <img class="" src="https://getuikit.com/v2/docs/images/placeholder_600x400.svg">
                              </div>
                              <div class="col-lg-4">
                                   <h5 class="item_title"><?php echo $a['name']; ?></h5>
                                   <h5>Model: <?php echo $a['model']; ?></h5>
                                   <br>
                                   <h5>Product description</h5>
                                   <p class="item_description"><?php echo $a['description']; ?> </p><br>
                                   <a href="" class="btn btn-info">Download Broucher</a>
                                   <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed aspernatur vero minima nihil, tenetur exercitationem eum cupiditate voluptate, numquam libero nemo iusto modi corporis temporibus accusantium obcaecati error, provident ipsa.</p> -->
                              </div>
                              <div class="col-lg-4">
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
					<textarea class="form-control input_bar" id="message_text" name="message" placeholder="message : Ask me anything"></textarea>

					
					</div>
						<button type="submit" class="btn mt-3 custom_btn">Send message</button>
					</form>
                              </div>
                         </div>
                    </div>

                   
        <?php } ?>

               

          </div>
     </section>

<?php require('footer/footer.php'); ?>
<?php require("footer/component.php");?>
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