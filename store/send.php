<style>
  body{
    font-family:'Roboto',Sans-serif;
    line-height:45px;
  }
</style>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';
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
                      $mail->Host = 'smtp.gmail.com';
                      $mail->SMTPAuth = true;                              
                      $mail->Username = 'nubulmachary@gmail.com';                
                      $mail->Password = 'boogiemannn';                         
                      $mail->SMTPSecure = 'tls';                          
                      $mail->Port = 587;                              
                      $mail->setFrom('nubulmachary@gmail.com', 'Mailer');
                      $mail->addAddress('manasspotify@gmail.com', 'Mnaananan');     
                      $mail->isHTML(true);                                
                      $mail->Subject = 'Here is the subject';
                      $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                      $mail->send();
                      echo 'Message has been sent';
                  } catch (Exception $e) {
                      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                  }
        
    