<?php

include_once 'admin/constants.php';



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['submit']))
{
  $name=$_POST['fullName'];
  $email=$_POST['email'];
  $number=$_POST['phoneNumber'];
  $subject=$_POST['emailSubject'];
  $message=$_POST['message'];


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

        $mail->isSMTP();                                            //Send using SMTP
        $mail->SMTPAuth   = true;  
                                        //Enable SMTP authentication
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->Username   = 'sadithafernandods2002@gmail.com';                     //SMTP username
        $mail->Password   = 'vkrhhhltylxbitrx ';                               //SMTP password

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //ENCRYPTION_SMTPS-Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('sadithafernandods2002@gmail.com', 'Saditha Fernando');
        $mail->addAddress('sadithafernandods2002@gmail.com', 'Saditha Fernando');     //Add a recipient

      //  $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
    //    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'new inquiry-sadithaweb';
        $mail->Body    = '<h2>new message</h2>
        
        <h4>Fullname:'.$name.'</h4>
        <h4>Email:'.$email.'</h4>
        <h4>Subject:'.$subject.'</h4>
        <h4>Number:'.$number.'</h4> <br><br>
        <p>Message:'.$message.'</p>
        ';

      //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


      if($mail->send()){
        $_SESSION['status']="Thank you for contacting me";
        header("Location: {$_SERVER["HTTP_REFER"]}");
        exit(0);

      }
      else{
        $_SESSION['status']= "Message Sending error";
        header("Location: {$_SERVER["HTTP_REFER"]}");
        exit(0);
      }
       // $mail->send();
       // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


}
else{
  header('Location:index.php');
  exit(0);
}

?>