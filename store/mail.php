<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';
error_reporting(0);
if(empty($_POST)===false){
     $name = $_POST['name'];
     $phone  = $_POST['phone'];
     $email  = $_POST['email'];
     $message  = $_POST['message'];
     $model = $_POST['model'];
           if (empty($name) || empty($phone) || empty($email) || empty($message)) {
                    $alert = "<div class='alert alert-danger' role='alert'>
                    This is a danger alert—check it out!
                    </div>";
          }else{
              $thank_you_div = "
                                                <div class='thank_you_div text-center'>
                                                      <div class='thank_you_header'>
                                                          <i class=' mt-5 far fa-envelope'></i>
                                                      </div>
                                                      <div class='pt-5 pb-5'>
                                                          <h2 class='display-4 thank_you_heading'>Thank you,</h2>
                                                          <p class='p-5'>
                                                              You're now a member of our list of awesome people. We will message you on <span class='email_m'>".$email."</span> for further information. 
                                                          </p>
                                                          <a href='../index.php' class='btn custom_btn'>Back to home</a>
                                                      <div>
                                                </div>
              ";
                  
                  $mail = new PHPMailer(true);                   
                  try {
                    $mail->SMTPOptions = array(
                      'ssl' => array(
                          'verify_peer' => false,
                          'verify_peer_name' => false,
                          'allow_self_signed' => true
                      )
                    );
                      $mail->SMTPDebug = 2;                                 
                      $mail->isSMTP();                                      
                      $mail->Host = gethostbyname('smtp.gmail.com');
                      $mail->SMTPAuth = true;                              
                      $mail->Username = 'nubulmachary@gmail.com';                
                      $mail->Password = 'boogiemannn';                         
                      $mail->SMTPSecure = 'tls';                          
                      $mail->Port = 587;                              
                      $mail->setFrom($email, $email);
                      $mail->addAddress('nubulmachary@gmail.com', 'Admin');
                      //$mail->addAddress('manashbharali79@gmail.com', 'Admin');
                      
       
                      $mail->isHTML(true);                                
                      $mail->Subject = 'Mail from '.$name;
                      $mail->Body    = '<h1>'.$model.'</h1><h5> Hey I am <b> '.$name.' </b>, my email address is '.$email.'and phone no is '.$phone.'</h5> <br><br><br> '.$message;
                      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                      $mail->send();
                      
                      echo 'Message has been sent';
                  } catch (Exception $e) {
                    //  echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                    header('location:failed.php');
                  }
          }
     }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Imperialtechstole : Home </title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
     <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
     <link rel="stylesheet" type="text/css" href="../dev/assets/css/app.css">
     <link rel="stylesheet" type="text/css" href="../dev/assets/css/custom.css">
     <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</head>
<body>
     <div class="mail">
          <?php echo $alert;?>
          <div>
               <?php
                         echo $thank_you_div;
               ?>
          </div>
     </div>
</body>
</html>