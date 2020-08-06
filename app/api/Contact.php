<?php
namespace api;
use \core;
class Contact extends core\Service{

  function __construct($a=null,$c=true,$l=null){
    parent::__construct($a,$c,$l);

  }
  public function send($args){
   

    $mail = new \PHPMailer(true);
    $mail->charSet = "UTF-8";
    $mail->isSMTP();     
 
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                              
$mail->Username =  'gofacturas.mail@gmail.com'; 
$mail->Password = 'spumnqawgiucbtck'; 
$mail->Port = 465;	
$mail->SMTPDebug = 0;
$mail->SMTPSecure ='ssl';
$mail->setFrom($args['email'],APP['TITLE']);
$mail->addAddress("sistemas@adperu.com"); 
$mail->addAddress("donaciones@happylife-foundation.org"); 
   $mail->isHTML(true); 
   $mail->Subject = "CONTACTO WEB - ".APP['TITLE']; 
   $module=new \module\Contact;
   $mail->Body = $module->email($args); 
   $mail->AltBody = "This is the plain text version of the email content";
   

    if(!$mail->send()):
       $this->set("message","Mailer Error: " . $mail->ErrorInfo);
    else:
 $this->set("message","Tu mensaje se ha enviado correctamente!");
   $this->set("state",true);
    endif;
 $this->toJSON(); 
  }
  
}


 ?>

