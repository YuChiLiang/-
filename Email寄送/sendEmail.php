<meta chatset='utf8'>

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$to = $_POST['to'];
$subject = $_POST['subject'];
$content = $_POST['content'];
$content=nl2br($content);
$content.="<br>";
$content.="<img src='https://s.yimg.com/ny/api/res/1.2/RTPvAUZqGpsazpPbBI3wvw--/YXBwaWQ9aGlnaGxhbmRlcjt3PTk2MDtoPTU0MDtjZj13ZWJw/https://media.zenfs.com/en/news_tvbs_com_tw_938/5347d89a227e531d9d589e119ec93834'>";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'alex.liang0812@gmail.com';                     //SMTP username
    $mail->Password   = 'qzpj mgex leup aagw';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'utf-8';

    //Recipients
    $mail->setFrom('alex.liang0812@gmail.com', 'Mailer');
    $mail->addAddress('alex.liang0812@gmail.com', 'Joe User');     //Add a recipient
    $mail->addAddress('whitetape930812@gmail.com');               //Name is optional
    $mail->addAddress($to);
    $mail->addReplyTo('a1113368@mail.nuk.edu.tw', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $content;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}