<?php 
if(isset($_POST['submit']))
{
//recieve the variables
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
//$country = $_POST['country'];

$Remarks = $_POST['query'];

	$ip = gethostbyname($_SERVER['REMOTE_ADDR']);

	//save the data on the DB

		//send the email

		$to = "info@imperialtechsol.com";

		$subject = "Imperial Techsol";

		//headers and subject

		$headers  = "MIME-Version: 1.0\r\n";

		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

		$headers .= "From: Imperial Techsol <info@imperialtechsol.com>\r\n";

		//$headers .= 'Cc: santosh.technoweb@gmail.com' . "\r\n";
		//$headers .= 'Bcc: santosh.technoweb@gmail.com' . "\r\n";

		

		$body = "Mailer was submitted<br />";

		$body .= "Name: ".$name."<br />";

		$body .= "Email: ".$email."<br />";
		$body .= "Contact: ".$mobile."<br />";

	//	$body .= "Subject: ".$address."<br />";
	
		

		$body .= "Requirement: ".$Remarks."<br />";

		$body .= "IP: ".$ip."<br />";
		
		mail($to, $subject, $body, $headers);

	}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
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
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/theme-settings.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

</head>

<body>
<div class="page-wrapper"> 
  
  <!-- Preloader -->
  <div class="preloader"></div>
  
  <!-- Main Header -->
  <header class="main-header" id="main-header">
  <div class="header-top">
    <div class="container">
      <div class="col-md-4"> <img src="images/logo.png"></div>
      <div class="col-md-2 branch-office text-center"> </div>
     <div class="col-md-6 text-right top-contact">   
            	<p style="font-family: Verdana, Arial, Helvetica, sans-serif; color:#990000; font-size:18px; margin-top:20px;">An ISO 9001:2015</p> 	
                               	
            </div>
    </div>
  </div>
  <div id="navbar">
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <?php include"plugins/top_nav.php";?>  
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
</div>
</header>
<!--End Main Header --> 

<!--Main Slider-->

<section class="inner-banner">
  <div class="opacity">
    <div class="container">
      <h4>Enquiry</h4>
      <ul>
        <li><a href="index.html" class="tran3s">Home</a></li>
        <li>Enquiry</li>
      </ul>
    </div>
  </div>
</section>
<section class="left-nav">
  <div class="container">
    <div class="col-md-12">
      <div class="col-md-3">
        <div class="product-main-div">
          <div class="product-heading">Products</div>
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <i class="more-less glyphicon glyphicon-plus"></i> Audio/Video</a> </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body left-nav-ul-col">
                  <ul>
                    <li><a href="page_info.php?P_ID=46">Video Wall</a></li>
                        <li><a href="page_info.php?P_ID=47">Signage System</a></li>
                        <li><a href="page_info.php?P_ID=48">LFD - Large Formate Display</a></li>
                        <li><a href="page_info.php?P_ID=49">Touch Screen</a></li>
                        <li><a href="page_info.php?P_ID=50">Multimedia Projectors</a></li>
                        <li><a href="page_info.php?P_ID=51">Video Conferencing System</a></li>     
                        <li><a href="page_info.php?P_ID=52">Classroom Solutions</a></li>  
                  </ul>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <i class="more-less glyphicon glyphicon-plus"></i> IT/Networking</a> </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body left-nav-ul-col">
                  <ul>
                    <li><a href="page_info.php?P_ID=53">Server</a></li>
                        <li><a href="page_info.php?P_ID=54">Laptop/Desktop</a></li>
                        <li><a href="page_info.php?P_ID=55">Printers</a></li>
                        <li><a href="page_info.php?P_ID=56">Power Solutions</a></li> 
                  </ul>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> <i class="more-less glyphicon glyphicon-plus"></i> Security & Surveillance </a> </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body left-nav-ul-col">
                  <ul>
                    <li><a href="page_info.php?P_ID=60">Door Access Control System</a></li>
                        <li><a href="page_info.php?P_ID=61">Time Attendance Systym</a></li>
                        <li><a href="page_info.php?P_ID=62">Desktop Laptop Authentication</a></li>
                        <li><a href="page_info.php?P_ID=63">Adhar Kit</a></li>
						 <li> <a href="page_info.php?P_ID=64">CCTV Solutions</a></li>
                    <li> <a href="page_info.php?P_ID=65">X-Rey Baggage Scanner</a></li>   
                    <li> <a href="page_info.php?P_ID=66">Home Automation</a></li>   
                    <li> <a href="page_info.php?P_ID=67">Fire Alarm System</a></li>   
                  </ul>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingFour">
                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> <i class="more-less glyphicon glyphicon-plus"></i> Solutions </a> </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body left-nav-ul-col">
                  <ul>
                   <li><a href="page_info.php?P_ID=68">Data Center</a></li>
                    <li><a href="page_info.php?P_ID=69">Nockroom</a></li>
                    <li><a href="page_info.php?P_ID=70">Board Room/Conference</a></li>
                    <li><a href="page_info.php?P_ID=71">Cinema / Auditorium</a></li>
                  </ul>
                </div>
              </div>
            </div>
             <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingFive">
                <h4 class="panel-title"> <a class="collapsed" href="page_info.php?P_ID=72" aria-controls="collapseFive">Component </a> </h4>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingSix">
                <h4 class="panel-title"> <a class="collapsed" href="page_info.php?P_ID=73" aria-controls="collapseSix">Other </a> </h4>
              </div>
            </div>
          </div>
          <!-- panel-group --> 
        </div>
      </div>
      
      
      
      <div class="col-md-9">
      
    Your Query has been sent successfully. We will get back to you soon 

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
<footer>
  <div class="container">
    <div class="col-md-8">
      <p>All Rights Reserved 2016 © Imperial TechSol Pvt. Ltd. | Designed by <a href="#">Marks Design...</a></p>
    </div>
    <div class="col-md-4 text-right fb-icon"> <a href="#"><i class="fa fa-facebook"></i></a> </div>
  </div>
</footer>
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
</html>
