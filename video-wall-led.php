<?php 


    // include("config/config.inc.php");
    require('config/dbconnect.php');

    // $id = $_GET['id'];
   
    // print_r($array['my_video_name']);

    // $name = $array['my_video_name'];
    // echo $name;
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
    <?php require('header/catagory.php'); 

     $query = mysqli_query($dbquery,"SELECT * FROM my_videowall where my_id='$id'");
     $array = mysqli_fetch_array($query);
    ?>

    <div class="contents" style="padding:70px 0px 1px 0px">


  <!-- Start change content here -->

    <div class="cover">
        <h1 class="text-center" style="padding-top:200px;font-weight:bolder;color:#fff;"><?php echo $array['my_video_name']; ?></h1>
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
            <br><br>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal-e" data-whatever="@getbootstrap">Enquiry</a>
            <a href="#" class="btn btn-info">Download Broucher</a>
        </div>
    </div>
</div>

<!--Model-->
<div class="modal fade" id="exampleModal-e" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="width:100%!important;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ask me anything</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-5">
      <form action="store/mail.php" method="POST" id="form_data_nav">
             
			<input type="hidden" name="name" value="<?php echo $array['my_video_name'];?>">

			<div class="form-group pt-4">
				<input type="text" class="form-control input_bar" id="name" name="name" placeholder="Name : John Doe" onkeyup="this.value = this.value.replace(/[^a-Z]/, '')" required>
			</div>

                    

					<div class="form-group pt-4">
						<input type="text" class="form-control input_bar" id="email" name="email" placeholder="Email : Johndoe@gmail.com"  required>

						
					</div>

					<div class="form-group pt-4">
						<input type="text" class="form-control input_bar" id="phone" maxlength="10" name="phone" placeholder="Phone no : 9706300000" onkeyup="this.value = this.value.replace(/[^0-9]/, '')"  required>
						
					</div>

					<div class="form-group pt-4">
					<textarea class="form-control input_bar" id="message_text" name="message" placeholder="message : Ask me anything"  required></textarea>

					
					</div>
						<button type="submit" class="btn mt-3 custom_btn">Send message</button>
						
					</form>

      </div>
     </div>
  </div>
</div>




<!-- end content here     -->

    <?php require('footer/footer.php');?>
    
    </div>
    <?php require('footer/component.php');?>
</body>
</html>