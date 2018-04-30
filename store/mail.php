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
                    //   $mail->addAddress('manashbharali79@gmail.com', 'Admin');
                      $mail->addAddress('nubulmachary@gmail.com', 'Admin');
                    // $mail->addCC('nubulmachary@gmail.com', 'Admin');
                      
                      $mail->isHTML(true);                                
                      $mail->Subject = 'Mail from '.$name;
                      //$mail->Body    = '<h1>'.$model.'</h1><h5> Hey I am <b> '.$name.' </b>, my email address is '.$email.'and phone no is '.$phone.'</h5> <br><br><br> '.$message;
                      //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                      $mail->Body = "
                      <div class='container' style='padding: 0;margin: 20px auto;width: 90%;background: #fff;padding-bottom: 50px'>
                      <div class='header' style='padding: 20px 0;margin: 0;width: 100%;background: #370c63;text-align: center;display: block'>
                           <p class='heading' style='padding: 0;margin: 0;color: #fff;font-weight: 500;font-size: 20px;letter-spacing: 1px;text-transform: uppercase'>Buyer's Contact Information</p>
                      </div>
                      <div class='content' style='padding: 20px 20px;margin: 0;color: #555;font-size: 15px'>
                           <table style='padding: 0;margin: 0'>
                                <tr style='padding: 0;margin: 0'>
                                     <td style='padding: 0;margin: 0;line-height: 32px;width: 150px'>Name</td>
                                     <td style='padding: 0;margin: 0;line-height: 32px;width: 150px'>".$name."</td>
                                </tr>
                                <tr style='padding: 0;margin: 0'>
                                     <td style='padding: 0;margin: 0;line-height: 32px;width: 150px'>Mobile Number</td>
                                     <td style='padding: 0;margin: 0;line-height: 32px;width: 150px'>".$phone."</td>
                                </tr>
                                <tr style='padding: 0;margin: 0'>
                                     <td style='padding: 0;margin: 0;line-height: 32px;width: 150px'>Email</td>
                                     <td style='padding: 0;margin: 0;line-height: 32px;width: 150px'>".$email."</td>
                                </tr>
                                <tr style='padding: 0;margin: 0'>
                                     <td style='padding: 0;margin: 0;line-height: 32px;width: 150px'>Address</td>
                                     <td style='padding: 0;margin: 0;line-height: 32px;width: 150px'></td>
                                </tr>
                           </table>    
                           
                           <div style='padding: 10px 0;margin: 0;width: 100%;background: #fff;text-align: center;display: block;margin-top: 30px;border-radius: 500px;border: 2px solid #370c63;letter-spacing: 1px;text-transform: uppercase;color: #370c63'>
                                <p style='padding: 0;margin: 0'> Buylead Details</p>
                            </div>
                          

                           <br style='padding: 0;margin: 0'/><br style='padding: 0;margin: 0'/>
                           <h2 style='padding: 0;margin: 0;color: #370c63'>Product name : $model</h2>
                           <br style='padding: 0;margin: 0'/><br style='padding: 0;margin: 0'/><br style='padding: 0;margin: 0'/>
                           <table style='padding: 0;margin: 0'>
                                <tr style='padding: 0;margin: 0'>
                                     <td style='padding: 0;margin: 0;line-height: 32px;width: 150px'>Message</td>
                                     <td style='padding: 0;margin: 0;line-height: 32px;width: 150px'>$message</td>
                                </tr>
                           </table>
                      </div>
                 </div> ";
                      $mail->send();
                      
                      // echo 'Message has been sent';
                    //   header('location:thankyou.php');
                      echo "<script> window.location = 'thankyou.php'; </script>";
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