<?php

use Adapters\PHPMailerAdapter;

require_once 'PHPMailer.php';
require_once 'PHPMailerAdapter.php';

$mail = new PHPMailerAdapter();
$mail->setUseSmtp(true);
$mail->setSmtpHost("smtp.gmail.com", 454);
$mail->setSmtpUser('john@pablo.com', 'password');
$mail->setFrom('john@pablo.com', 'John Pablo');
$mail->addAddress('destinario@gmail.com', 'Destinario');
$mail->setSubject('Olá, tudo bem!?');
$mail->setHTMLBody('<b>Isso é um <i>teste</i></b>');
$mail->send();