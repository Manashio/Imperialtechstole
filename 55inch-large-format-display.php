<?php 
    // include("config/config.inc.php");
    require("config/dbconnect.php");

    // $id=$_GET['id'];
    // $query = mysqli_query($dbquery,"SELECT * FROM my_format_display WHERE my_subcatagory_id ='$id'");
    // $count = mysqli_num_rows($query);
    // echo $count;
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
       .image{
           width: 100%;
           height: auto;
       }
    </style>
</head>
<body>
    <?php require('header/navbar.php'); ?>
    <?php require('header/catagory.php'); ?>

        

    <div class="contents" style="padding:70px 0px 1px 0px">

  <!-- Start change content here -->

    
        
    
    <div class="container pb-5 pt-5">
    
       <div class="row  pb-5 pt-5">
       
        <div class="col-sm-4">
            <img class="image" src="images/dummy.png" alt="dummy">
        </div>
        <div class="col-sm-8">
        <h2 class="pb-5">55" Large Format Display</h2>
        <table class="table">
        <tr>
            <th class="text-center"  colspan="4">INFORMATIONS<th>
        </tr>
            <tr>
                <th>Sl.No.</th>
                <th>Size</th>
                <th>Brand</th>
                <th>Specification</th>
                <th>Broucher</th>
            </tr>
          
             <tr>
                    <td>1</td>
                    <td>98</td>
                    <td>LG, Philips</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste autem provident odit eaque doloremque sapiente molestias, quas, porro non aspernatur tenetur, laudantium quisquam reprehenderit nam ducimus labore obcaecati repellendus animi.</td>
                    <td><a class='btn btn-info' download>Download</a></td>
                </tr>
        </table>
        </div>
        </div>
    </div>

    <!-- form section
    <div class="col-md-6 pt-5 pb-5 offset-md-3">
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

end content here     -->



    <?php require('footer/footer.php');?>
    
    </div>

    <?php require('footer/component.php');?>
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