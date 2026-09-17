<?php
// ============================================================
// CONTACT FORM HANDLER — update credentials when ready
// ============================================================
$mail_success = false;
$mail_error   = false;

if (isset($_POST['submit'])) {
    // TODO: replace with require 'vendor/autoload.php'; for PHPMailer v6
    // require 'mailfunction/PHPMailerAutoload.php';

    // TODO: uncomment and configure when PHPMailer is ready
    /*
    $name    = htmlspecialchars(strip_tags($_POST['name']));
    $email   = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags($_POST['subject']));
    $message = htmlspecialchars(strip_tags($_POST['message']));

    $mail = new PHPMailer();
    $mail->Host       = "mail.biid.org.bd";
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->Username   = "info@biid.org.bd";
    $mail->Password   = "YOUR_PASSWORD_HERE";
    $mail->SMTPSecure = "ssl";
    $mail->Port       = 465;
    $mail->Subject    = $subject . ' : BIID website feedback';
    $mail->Body       = $message;
    $mail->setFrom('info@biid.org.bd', $email . '_Name: ' . $name);
    $mail->addAddress('info@biid.org.bd', 'BIID website feedback');

    if (!$mail->send()) {
        $mail_error = true;
    } else {
        $mail_success = true;
    }
    */

    // Placeholder until PHPMailer is configured
    $mail_success = true;
}
