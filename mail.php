<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once "mailer/Exception.php";
require_once "mailer/PHPMailer.php";
require_once "mailer/SMTP.php";

$mail = new PHPMailer(true);

try {
    //configuration settings
    //si on veut essayer d'evoyer des mails
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;  //je veux des infos de debugs


    // configuration du smtp

    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 1025;
    $mail->CharSet = "utf-8";

    //les destinataires

    $mail->addAddress("aubinborissimotsebo@gmail.com");
    $mail->addCC("aubin@gmail.com");

    //les expediteurs

    $mail->setFrom("aubinborissimotsebo@gmail.com");
    $mail->isHTML();

    //le contenu

    $mail->Subject = "sujet du message";
    $mail->Body = "el massa vel libero consectetur, vel ullamcorper lectus. Sed id nisi non orci facilisis laoreet. Sed vel ligula vel neque tincidunt tempus. Nulla facilisi. Proin condimentum, quam in consectetur dictum, nunc metus consectetur justo, vel tincidunt nunc justo at velit. Donec dignissim, felis ut consectetur dignissim, nisi est consectetur neque, sit amet consectetur nisi velit id massa. Sed et ligula sit amet arcu consectetur consectetur. Sed vel mauris sit amet felis consectetur bibendum. Donec tristique, massa ut consectetur eleifend, mauris velit gravida purus, vel tristique mauris felis vitae justo. Nullam in nulla vel velit consectetur rutrum. Donec vel est vel felis pellent";

    //on envoie

    $mail->send();
} catch (Exception $e) {
    echo "Message non envoyé.Erreur:{$mail->ErrorInfo}";
}









// // mail("aubinborissimotsebo@gail.com", "demande de collaboration", "bonjor monsieur j'espere que vous allez bien. nous vous prions de collaborer ensemble");



// $to="franck@gmail.com";
// $subject="hello world";
// $message="Hello world, juste pour vous saluez!";
// mail($to,$subject,$message);


// //si le message est superieur a 75 message, on utilisa la fonction word wrap


// //exemple avec illustration

// $messag2 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel massa vel libero consectetur, vel ullamcorper lectus. Sed id nisi non orci facilisis laoreet. Sed vel ligula vel neque tincidunt tempus. Nulla facilisi. Proin condimentum, quam in consectetur dictum, nunc metus consectetur justo, vel tincidunt nunc justo at velit. Donec dignissim, felis ut consectetur dignissim, nisi est consectetur neque, sit amet consectetur nisi velit id massa. Sed et ligula sit amet arcu consectetur consectetur. Sed vel mauris sit amet felis consectetur bibendum. Donec tristique, massa ut consectetur eleifend, mauris velit gravida purus, vel tristique mauris felis vitae justo. Nullam in nulla vel velit consectetur rutrum. Donec vel est vel felis pellentesque elementum. Donec vel ligula vel neque tincidunt tempus. Nulla facilisi.";

// $newMessage = wordwrap($messag2, 75, "\r\n");
// mail($to,$subject, $newMessage);


// //jusqua present , on ne sait pas qui a envoyer le message,....

// $headers=[
//     "From"=>"John@gmail.com", //celui qui envoie le message
//     "Reply-To"=>"entreprise@gmail.com",//quand les gens vont cliquer et repondre , sa ira a  replyto
//     "Cc"=>"copy@gmail.com", //a qui on envoie la copie caché du message
//     "Bcc"=>"secret@gmail.com", //a qui on envoie la copie caché du message qui ne sera pas visible a l'expediteur
//     "Content-Type"=>"text/html; charset=utf-8", //
// ];