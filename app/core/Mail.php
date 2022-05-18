<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail
{
    public function __construct()
    {
    }

    public function sendEmail($toEmails, $msgData)
    {
		// Include the mail class and instantiate the object
        //require_once '../../CLASSES/mail/PHPMailerAutoload.php'; // old way
        // Using composer to install PHP Mailer
		$mail = new PHPMailer();

		// Server settings
	    $mail->SMTPDebug = 0; // Enable verbose debug output
	    $mail->isSMTP();  // Set mailer to use SMTP
	    $mail->Host = getenv('MAIL_HOST');  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;  // Enable SMTP authentication
	    $mail->Username = getenv('MAIL_USERNAME');  // SMTP username
	    $mail->Password = getenv('MAIL_PASSWORD');  // SMTP password
	    $mail->SMTPSecure = 'tls';  // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = getenv('MAIL_PORT'); // TCP port to connect to

	    // From
	    $mail->setFrom('donotreply@jdsindustries.onmicrosoft.com', 'JDS Do Not Reply');

		// Create mail headers
		//$mail->AddReplyTo("sales@jdsindustries.com","JDS Industries");
		$mail->AddReplyTo($msgData['email'], $msgData['name']);

        // Recipients
		foreach ($toEmails as $address) {
            $toName = "JDS Industries";
            $mail->AddAddress($address, $toName);
        }

        // Email Message
		$mail->Subject    = "JDS Industries - Contact Form";
		$mail->AltBody    = "Contact Submission";
        $body = $this->contactEmailMsg($msgData);
		$mail->MsgHTML($body);

		// Send the mail
		$sent = $mail->Send();
		if (!$sent) {
			$messageSent =  "Mailer Error: " . $mail->ErrorInfo;
		} else{
            $messageSent = true;
        }

		return $messageSent;
	}

    public function contactEmailMsg($msgData)
    {
        ob_start();
		?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <div style="max-width: 600px;">
                    <p>Contact Form Submission from https://www.jdsindustries.com/</p>
                    <p><b>Name:</b> <?=$msgData['name']?></p>
                    <p><b>Email:</b> <?=$msgData['email']?></p>
                    <p><b>Phone:</b> <?=$msgData['phone']?></p>
                    <p><b>Message:</b> <?=$msgData['message']?></p>
                </div>
            </body>
        </html>
        <?php   
        $msg = ob_get_clean(); 
	      
	    return $msg;       
	}
}
