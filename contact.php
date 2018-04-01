<?php include("config/config.inc.php");

$data12 = getstaticPagesContant($dbquery, 12);
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from imperialtechsol.com/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Sep 2017 18:22:50 GMT -->
<head>
<meta charset="utf-8">
<title>Imperial TechSol Pvt. Ltd.</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/flipclock.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style-2.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,800" rel="stylesheet">
<link rel="canonical" href="http://www.imperialtechsol.com/contact.php" />
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/theme-settings.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115469934-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115469934-1');
</script>
</head>

<body>
<div class="page-wrapper"> 
  
  <!-- Preloader -->
  <div class="preloader"></div>
  
  <!-- Main Header -->
   <?php include('common/mainheader.php'); ?>
<!--End Main Header --> 

<!--Main Slider-->

<section class="inner-banner">
  <div class="opacity">
    <div class="container">
      <h4>Contact Us</h4>
      <ul>
        <li><a href="index-3.html" class="tran3s">Home</a></li>
        <li>Contact us</li>
      </ul>
    </div>
  </div>
</section>
<section class="left-nav">
  <div class="container">
    <div class="col-md-12">
      <?php include('common/sidebar.php'); ?>
      
      <div class="col-md-4">
      <h3>Address</h3>
      	<?php echo $data12['content']; ?>
      </div>
      
      <div class="col-md-5">
       <div class="form-area">  
        <form role="form" method="post" action="mail.php" enctype="multipart/form-data" name="contact-form" id="contact-form">        
                    <h3 style="margin-bottom: 10px; text-align: center;">CONTACT FORM</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
					</div>					
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="query" name="query" placeholder="Message" maxlength="140" rows="7"></textarea>
                    </div>
            
        <input  type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary pull-right">
        </form>
    </div>
      </div>
    </div>
  </div>
</section>

<div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14021.06714002041!2d77.2177528!3d28.5316998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfff99644ba6f230e!2sIMPERIAL+TECHSOL+PVT.+LTD.!5e0!3m2!1sen!2sin!4v1506410965558" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<?php include('common/mainfooter.php'); ?>
</div>
<!--End pagewrapper--> 
<!--Scroll to top--> 
<!--<div class="scroll-to-top scroll-to-target" data-target="#main-header"><span class="fa fa-arrow-up"></span></div>--> 
<script src="js/jquery-latest.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/script.js"></script> 

<!--Slider--> 
<script type="text/javascript" src="js/plugins.js"></script> 
<script type="text/javascript" src="js/theme.js"></script> 
<script type="text/javascript" src="js/left-accordion.js"></script>
</body>

<!-- Mirrored from imperialtechsol.com/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Sep 2017 18:22:50 GMT -->
</html>
