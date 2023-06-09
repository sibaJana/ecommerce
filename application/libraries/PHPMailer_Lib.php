<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use Phpmailer\PHPMailer\Exception;
class PHPMailer_Lib
{
    public function __construct(){
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function load(){
        require_once APPPATH.'third_party/PHPMailer/PHPMailer-master/src/Exception.php';
        require_once APPPATH.'third_party/PHPMailer/PHPMailer-master/src/PHPMailer.php';
        require_once APPPATH.'third_party/PHPMailer/PHPMailer-master/src/SMTP.php';
       
        $mail = new phpmailer;
        return $mail;
    }
}
// https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting