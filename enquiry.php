<?php include("config/config.inc.php");

$data = getstaticPagesContant($dbquery, 9);
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>
<meta charset="utf-8">
<title>Imperial TechSol Pvt. Ltd.</title>
<link rel="canonical" href="http://www.imperialtechsol.com/enquiry.php" />
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/flipclock.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style-2.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,800" rel="stylesheet">
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
      <h4>Enquiry</h4>
      <ul>
        <li><a href="index-3.html" class="tran3s">Home</a></li>
        <li>Enquiry</li>
      </ul>
    </div>
  </div>
</section>
<section class="left-nav">
  <div class="container">
    <div class="col-md-12">
        <?php include('common/sidebar.php'); ?>
      
      
      
      <div class="col-md-9">
      <div class="enquiry-form">
      
      	<form id="contact-form" name="contact-form" enctype="multipart/form-data" method="post" action="smail.php" role="form">   
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Name </label>
                    <input id="form_name" type="text" name="name" id="name" class="form-control" placeholder="Please enter your Name" required data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email</label>
                    <input id="form_email" type="email" name="email" id="email" class="form-control" placeholder="Please enter your email" required data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone">Phone</label>
                <input id="form_phone" type="tel" name="mobile" id="mobile" class="form-control" placeholder="Please enter your phone" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">File Atteched</label>
                    <input name="attachFile" id="attachFile" type="file">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message</label>
                    <textarea id="form_message" name="query" id="query" class="form-control" placeholder="Message for me" rows="4" required data-error="Please,leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-success btn-send" value="Send message">
            </div>
        </div>
</form>
</div>
      </div>
    </div>
  </div>
</section>
<section class="client-logo mb-20">
  <div class="container">
    <div class="client-div"> 
      <script language="javascript" src="js/img_rotater.js" type="text/javascript"></script> 
    </div>
  </div>
</section>
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

<!-- Mirrored from imperialtechsol.com/enquiry.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Sep 2017 18:22:50 GMT -->
</html>
