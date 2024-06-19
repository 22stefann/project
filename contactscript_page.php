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
    $mail->Username = 'sljivasavlasica@gmail.com';
    $mail->Password = 'D8D8065403F57A5B9E58A6D5C7381E710D8E';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom($email, "Forma sa sajta");
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
