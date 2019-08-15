<?php

define('ROOT', 'C:\wamp\www\pdrconcept\\');

require_once(ROOT.'/vendor/autoload.php'); 

// Create the Transport
//$transport = "";


$Swift_SmtpTransport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465);
$transport = $Swift_SmtpTransport->setUsername('pdrPlatform@gmail.com')->setPassword('pdrPl4rt40#M');

//$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  // ->setUsername('pdrPlatform@gmail.com')
   // ->setPassword('pdrPl4rt40#M');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

function sendVerificationEmail($userEmail, $token)
{
    global $mailer;
    $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>Test mail</title>
      <style>
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
      </style>
    </head>

    <body>
      <div class="wrapper">
        <p>Thank you for signing up on our site. Please click on the link below to verify your account:.</p>
        <a href="http:8888//localhost/verify-user/verify_email.php?token=' . $token . '">Verify Email!</a>
      </div>
    </body>

    </html>';

    // Create a message
$Swift_Message = new Swift_Message('Verify your email');
$message = $Swift_Message->setFrom('pdrPlatfrom@gmail.com')
                          ->setTo($userEmail)
                          ->setBody($body, 'text/html');

   // $message = (new Swift_Message('Verify your email'))
     //   ->setFrom('pdrPlatfrom@gmail.com')
       // ->setTo($userEmail)
        //->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);

    if ($result > 0) {
        return true;
    } else {
        return false;
    }
}
