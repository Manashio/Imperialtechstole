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

