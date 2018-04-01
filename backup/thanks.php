<?php
if(isset($_POST['submit']))
{

$to = "info@imperialtechsol.com";
//$to = "sales@marksdesign.in";
$subject= "Online Enquiry Imperialtech";
$todayis = date("l, F j, Y, g:i a") ;

$NameOfPost = $_POST['name'];
$NameOfCandidate = $_POST['email'];
$FatherName = $_POST['mobile'];
$MotherName = $_POST['query'];


$to1 = $EmailId;
$subject1 = 'Enquiry Imperialtech';
$from = 'info@imperialtechsol.com'; 
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message1 = '<html><body>';
$message1 .= '<h1 style="color:#f40;">Hi $NameOfCandidate</h1>';
$message1 .= '<p style="color:#080;font-size:18px;">Your Enquiry was submitted successfully. <br />
For any query feel free contact us on 91-11-65451760<br />



<strong>With best wishes<br />
Imperial Tech<br>
www.imperialtechsol.com
</strong></p>';
$message1 .= '</body></html>';
 
// Sending email
if(mail($to1, $subject1, $message1, $headers)){
    echo 'Your mail has been sent successfully.';
} 



$message = "
Date           -------    $todayis
Name    -------    $NameOfPost
Email           ------     $NameOfCandidate
Contact   -------    $FatherName
Query   -------    $MotherName



";
  $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
         $headers = "From: $EmailId\r\n" .
         "MIME-Version: 1.0\r\n" .
            "Content-Type: multipart/mixed;\r\n" .
            " boundary=\"{$mime_boundary}\"";
         $message = "This is a multi-part message in MIME format.\n\n" .
            "--{$mime_boundary}\n" .
            "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" .
         $message . "\n\n";
         foreach($_FILES as $userfile)
         {
            $tmp_name = $userfile['tmp_name'];
            $type = $userfile['type'];
            $name = $userfile['name'];
            $size = $userfile['size'];
            if (file_exists($tmp_name))
            {
               if(is_uploaded_file($tmp_name))
               {
                  $file = fopen($tmp_name,'rb');
                  $data = fread($file,filesize($tmp_name));
                  fclose($file);
                  $data = chunk_split(base64_encode($data));
               }
               $message .= "--{$mime_boundary}\n" .
                  "Content-Type: {$type};\n" .
                  " name=\"{$name}\"\n" .
                  "Content-Disposition: attachment;\n" .
                  " filename=\"{$fileatt_name}\"\n" .
                  "Content-Transfer-Encoding: base64\n\n" .
               $data . "\n\n";
            }
         }
         $message.="--{$mime_boundary}--\n";
if (mail($to, $subject, $message, $headers))
   echo "Mail sent successfully.";
else
   echo "Error in mail";
 
 
   
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
