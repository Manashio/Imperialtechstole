<?php
/**
* Simple example script using PHPMailer with exceptions enabled
* @package phpmailer
* @version $Id$
*/

require 'class.phpmailer.php';

try {
    $mail = new PHPMailer(true); //New instance, with exceptions enabled

    $to = "info@imperialtechsol.com";
	$mail->AddAddress($to);
    $mail->From       = $_POST['email'];
    $mail->FromName   = $_POST['name'];
	$mail->Subject  = "Imperial TechSol Pvt. Ltd.- Enquiry";

	$body             = "<table>
	                         <tr>
							    <th colspan='2'>Imperial TechSol Pvt. Ltd.</th>
							 </tr>

							 <tr>
							    <td style='font-weight:bold'>First Name :</td>
								<td>".$_POST['name']."</td>
							 </tr>
                                                 

							<tr>
							  <td style='font-weight:bold'>Email : </td>
							  <td>".$_POST['email']."</td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'>Mobile No : </td>
							  <td>".$_POST['mobile']."</td>
							</tr>
							<tr>
							  <td style='font-weight:bold'>Position : </td>
							  <td>".$_POST['query']."</td>
							</tr>
							
	                     <table>";
	$body             = preg_replace('/\\\\/','', $body); //Strip backslashes
	$mail->MsgHTML($body);

	$mail->IsSMTP();                           // tell the class to use SMTP
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       = 25;                    // set the SMTP server port
	//$mail->Host       = "mail.yourdomain.com"; // SMTP server
	//$mail->Username   = "name@domain.com";     // SMTP server username
	//$mail->Password   = "password";            // SMTP server password

	$mail->IsSendmail();  // tell the class to use Sendmail
	$mail->AddReplyTo("info@imperialtechsol.com");
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 80; // set word wrap

	
	 $mail->AddAttachment($_FILES['attachFile']['tmp_name'],$_FILES['attachFile']['name']);
	 
	
						
	$mail->IsHTML(true); // send as HTML
	$mail->Send();
	echo '<script>document.location.href="thanks.php"</script>';
} catch (phpmailerException $e) {
	echo $e->errorMessage();
}
?>