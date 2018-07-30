<?php
/**
 * Created by PhpStorm.
 * User: Bianca_neu
 * Date: 26.03.2018
 * Time: 17:21
 */

require_once('../lib/PHPMailer-master/PHPMailer.php');
require_once('../lib/PHPMailer-master/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = $_POST['name'];
$emailFrom = $_POST['email'];
$emailTo = 'info@globuzzer.com';
$content = $_POST['content'];

$email = new PHPMailer();

$email->From = $emailFrom;
$email->FromName = $name;
$email->Subject = 'Brochure User Contact';
$email->Body = $content;
$email->AddAddress($emailTo);

if(!$email->Send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $email->ErrorInfo;
    exit;
}
