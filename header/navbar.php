<?php
	if(isset($_POST['search'])){
		$search = mysql_real_escape_string ($_POST['search']);
		header('location: search-lists.php?search='.$search);
	}

?>
<div class="menu-top">
          <div class="row">
			   <div class="col-3">
			   		<a href="index.php" class="brand-icon text-center" >Brand</a>
				</div>
				<div class="col-5">
					<div class="search1">
              <form action="" method="POST">
                  <i class="fas fa-search searchicon"></i> 
									<input class="search1 ml-2" name="search" type="text" placeholder="Search here"> 																	
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
      <div class="modal-body p-5">
      <form action="store/mail.php" method="POST" id="form_data_nav">
					<div class="form-group pt-4">
						<input type="text" class="form-control input_bar" id="name" name="name" placeholder="Name : John Doe" onkeyup="this.value = this.value.replace(/[^a-z]/, '')">
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
</div>




