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

if(!empty($_POST['data']) && !empty($_POST['mail'])) {
    //var_dump($_POST['data']);
    //var_dump($_POST['mail']);

    $email = new PHPMailer();

    $email->From = 'brochure@globuzzer.com';
    $email->FromName = 'Globuzzer';
    $email->Subject = 'Your brochure as pdf';
    $email->Body = 'Attached you will find your chosen packages as pdf!';
    $email->AddAddress($_POST['mail']);

    $base = explode('data:application/pdf;base64,', $_POST['data']);
    $base = base64_decode($base[1]);
    $email->addStringAttachment($base, 'globuzzer-brochure.pdf');

    //var_dump($email);

    if(!$email->Send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $email->ErrorInfo;
        exit;
    }
}