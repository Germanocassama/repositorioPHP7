<?php 
/* Template é uma metodologia que nos permite separar a programação lógica (PHP) da visual (HTML), o que torna o seu projeto mais organizado e seu código-fonte mais bonito aos olhos de terceiros.
*/
require_once "vendor/autoload.php";


use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "tpl/", // precisa da pasta TPL
    "cache_dir"     => "cache/" // precisa da pasta cache
);
Tpl::configure( $config );
// caminho da classe TPL
$tpl = new Tpl;
// assign a variable
$tpl->assign( "name", "Germano sadjo cassama" );
$tpl->assign( "version", PHP_VERSION );

// assign an array
// draw the template -- desenhar tamplate o seu tamplate
$html = $tpl->draw( "index", true ); // Metodo draw gera o código html junto com php e gera um merge que fica no cache
// conseguimos pegar o conteudo do metodo draw para uma variavel desde quando dizemos que ela é TRUE
// Se não passamos true ele vai dar só um echo na sua tela sem retornar nada 

/////////////////////////////////////////////////////////////////////////
//Create a new PHPMailer instance
//Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();
///////////////////////////////////////////////////
$mail->isSMTP();
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "germanoglmf@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "lassana94";
//Set who the message is to be sent from
$mail->setFrom('germanoglmf@gmail.com', 'Curso PHP 7');
//Set an alternative reply-to address
// $mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('germanomusqueba@gmail.com', '');
//Set the subject line
$mail->Subject = 'Testando a classe PHPMailer com Gmail';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($html);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>