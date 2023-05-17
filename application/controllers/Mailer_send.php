<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailer_send extends CI_Controller{
   
    function  __construct(){
        parent::__construct();
        
    }
   
    function send(){
        /* Load PHPMailer library */
        $this->load->library('phpmailer_lib');
       
        /* PHPMailer object */
        $mail = $this->phpmailer_lib->load();
       
        /* SMTP configuration */




try {
	$mail->SMTPDebug = 2;									
	$mail->isSMTP();										
	$mail->Host	 = 'smtp.gfg.com;';				
	$mail->SMTPAuth = true;							
	$mail->Username = 'sibajana18@gmail.com';				
	$mail->Password = 'Siba-jana@18';					
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;

	$mail->setFrom('sibajana18@gmail.com', 'Name');		
	$mail->addAddress('sibajana1999@gmail.com');
	// $mail->addAddress('receiver2@gfg.com', 'Name');
	
	$mail->isHTML(true);								
	$mail->Subject = 'Subject';
	$mail->Body = 'HTML message body in <b>bold</b> ';
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	echo "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}

   
}