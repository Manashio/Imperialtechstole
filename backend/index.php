<?php 
     session_start();
     include_once('functions/function.inc.php');
     require_once('core/auth.php');
     include_once('views/head.php');
?>
     <div class="container text-center mt-5">

          
          <div class="row justify-content-md-center">
               <div class="col col-lg-4 mt-5">
                    <h1><?php echo $title_name;?></h1>
                    <form class="form-signin" action="" method="POST">
                         
                              <?php echo $message;?>
                         
      
                         <label for="username" class="sr-only">Username</label>
                         <input type="username" id="username" class="form-control  mt-5" name="username" placeholder="Username" required autofocus>

                         <label for="inputPassword" class="sr-only ">Password</label>
                         <input type="password" id="inputPassword" class="form-control  mt-3" placeholder="Password" name="password" required>

                         <button class="custom-btn submit btn-block mt-5" type="submit">Sign in</button>


                    </form>

               </div>
               </div>
     </div>
     
</body>
</html>