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
                  $data = array();
                  $data= array($name,$phone,$email,$message,$model);
                  $data_input = "<div class='input-group mb-3 mt-5'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='basic-addon1'>Name</span>
                    </div>
                    <input type='text' class='form-control' aria-label='Username' aria-describedby='basic-addon1' disabled value=".$name.">
                  </div>
                  <div class='input-group mb-3 mt-2'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='basic-addon1'>Email</span>
                    </div>
                    <input type='text' class='form-control' aria-label='Username' aria-describedby='basic-addon1' disabled value=".$email.">
                  </div>
                  <div class='input-group mb-3 mt-2'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='basic-addon1'>Phone no</span>
                    </div>
                    <input type='text' class='form-control' aria-label='Username' aria-describedby='basic-addon1' disabled value=".$phone.">
                  </div>
                  <div class='input-group mb-3 mt-2'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='basic-addon1'>Message</span>
                    </div>

                    <textarea class='form-control' aria-describedby='basic-addon1' disabled >".$message."</textarea>
                  </div>
                  " ;
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
                     echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
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
     <div class="container pt-5">
          <h1>Form data</h1>
          <?php echo $alert;?>
          <div class="well">
               <?php print_r($data);
                         echo $data_input;
               ?>
          </div>
     </div>
</body>
</html>