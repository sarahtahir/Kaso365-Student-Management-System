<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';
require 'config.php';

if (isset($_POST['email'])){ //this works
	
$emailTo = $_POST['email'];
$code = uniqid(true);

$qry= mysqli_query($con, "INSERT INTO resetpass(code,email) VALUES ('$code','$emailTo')");
if (!$qry){
	exit("Error sending mail");
} 

	
	
$mail = new PHPMailer(true);

try {
    //Server settings
    
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'kaso365ms@gmail.com';                     // SMTP username
    $mail->Password   = '@Hikaru12';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('kaso365ms@gmail.com', 'Kaso365');
    $mail->addAddress($emailTo);     // Add a recipient                  
    $mail->addReplyTo('info@example.com', 'No Reply');
    
    
    // Content
	$url = "http://".$_SERVER["HTTP_HOST"].dirname($_SERVER["PHP_SELF"])."/resetPassword.php?code=$code";
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Reset Password Link';
    $mail->Body    = "<h1> You requested a password reset</h1>
	                   Click <a href='$url'>This Link</a>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
	header('location: ../index.html');
	echo 'swal("Email Sent", "Please check your email for the reset link", "success")';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }
}

else {
	echo "something wrong idk";
}
?>
