<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    if(!empty($email)){
        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'smkmastda6@gmail.com';                     // SMTP username
            $mail->Password   = 'smkmatsda1112';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;
            $mail->SMTPSecure = 'tls';                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
            //Recipients
            $mail->setFrom('admin@smkmastda.ac.id', 'Admin');
            $mail->addAddress($email);// dikirim ke?
            // $mail->addAddress('admin@smkmastda.ac.id');
            $mail->addCC('admin@smkmastda.ac.id');
            $mail->addBCC('admin@smkmastda.ac.id');
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Reset My Password';
            $mail->Body    = 'Pesan ke 2 ini baru <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            echo 'Message has been sent';
            //load ke halaman konfirmasi kode.
            header('Location: ./');
        } catch (Exception $e) {
            //jika gagal maka minta email lagi
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

?>