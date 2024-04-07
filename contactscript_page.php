<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/vendor/phpmailer/phpmailer/src/Exception.php';
require 'phpmailer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'phpmailer/vendor/phpmailer/phpmailer/src/SMTP.php';
require 'config.php';

try {
    $mail = new PHPMailer(true);

    $name = $_POST["name"];
    $email_form = $_POST["email"];
    $message = $_POST["message"];
    $fullName = $name;
    
    $mail->isSMTP();
    $mail->Host = 'smtp.elasticemail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'code.craft.mail.forwarder@gmail.com';
    $mail->Password = '097AA3ED2B19936496B24B9BC6C8E75EBEDA';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 2525;
    
    $mail->setFrom('code.craft.mail.forwarder@gmail.com', "Forma sa sajta");
    $mail->addAddress($email, $companyName);
    $mail->Subject = $fullName.' je popunio formu na sajtu.';
    $mail->isHTML(true);
    $mail->Body = "<p><strong>Ime:</strong> ".$name."</p>".
    "<hr>".
    "<p><strong>Email:</strong> ".$email_form."</p>".
    "<hr>".
    "<p><strong>Poruka:</strong> ".$message."</p>";
    
    $mail->send();
    
    echo json_encode(array('status' => 'success', 'message' => 'Poruka uspešno poslata.'));
} catch (Exception $e) {
    echo json_encode(array('status' => 'error', 'message' => 'Greška pri slanju poruke: ' . $mail->ErrorInfo));
}
?>
