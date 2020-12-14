<?php
/**
 * Short description for code
 * php version 7.2.10
 *
 * @category Category_Name
 * @package  PackageName
 * @author   Abhishek Pandey <author@example.com>
 * @license  http://www.php.net/license/3_01.txt 
 * @link     http://pear.php.net/package/PackageName
 *
 * This is a "Docblock Comment"
 */
session_start();
require "vendor/autoload.php";
$email = $_GET['email'];
// $otp = $_GET['otp'];
$otp = rand(1111, 9999);
$_SESSION['otp'] = array('email'=>$email, 'otp'=>$otp);
$robo = 'testabhismtp@gmail.com';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$developmentMode = true;
$mailer = new PHPMailer($developmentMode);

try {
    $mailer->SMTPDebug = 2;
    $mailer->isSMTP();

    if ($developmentMode) {
        $mailer->SMTPOptions = [
            'ssl'=> [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ]
        ];
    }


    $mailer->Host = 'ssl://smtp.gmail.com';
    $mailer->SMTPAuth = true;
    $mailer->Username = 'testabhismtp@gmail.com';
    $mailer->Password = 'Abhi1234';
    $mailer->SMTPSecure = 'ssl';
    $mailer->Port = 465;

    $mailer->setFrom('testabhismtp@gmail.com', 'Abhishek from CedHOST');
    $mailer->addAddress($email, 'Abhishek');

    $mailer->isHTML(true);
    $mailer->Subject = 'PHPMailer Test';
    $mailer->Body = 'Hello Mr .. '.$email.'<br> Hey <b font-color="red">Congrtas!!<b> to you <br> You have done Your First Step with <br> <b>CedHosting<b>! for more- know to host Verify your e-mail , <i> OTP = '.$otp;

    $mailer->send();
    $mailer->ClearAllRecipients();
    // echo "<script>alert('MAIL HAS BEEN SENT SUCCESSFULLY')<script>";
    echo '<script>window.location.href="registration_verify.php"</script>';

} catch (Exception $e) {
    echo "EMAIL SENDING FAILED. INFO: " . $mailer->ErrorInfo;
}
print_r($_SESSION['otp']);
?>