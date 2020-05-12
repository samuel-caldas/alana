<?php
require_once('phpmailer/class.phpmailer.php');					// Abrindo o phpmailer
//include("phpmailer/class.phpmailer.php");						//
$mail                = new PHPMailer();							// Instanciando a classe
$mail->SetLanguage("br", 'phpMailer/language/');				// Definindo idioma
$mail->IsSMTP();												// Define que será usado SMTP
$mail->isHTML(true);											// Define que será HTML
$mail->Charset		= 'UTF-8';									// Define que serácodificação UTF-8, a mais usada atualmente
$mail->SMTPAuth		= true;										// Define que será SMTP autenticado
$mail->SMTPSecure	= 'ssl';									// Define que será ssl
$mail->SMTPKeepAlive= true;										// Define que a conecção SMTP seo feixará depois do enviar o email
$mail->Host			= "smtp.gmail.com";							// Define o servidor SMTP
$mail->Port			= 465;										// Define a porta do servidor SMTP
$mail->Username		= "samuel.caldas@gmail.com";				// Define o nome do usuário
$mail->Password		= "samuel19";								// Define a senha do usuário
$mail->SetFrom('samuel.caldas@gmail.com', 'Samuel Caldas');		// Email e nome do remetente
$mail->AddReplyTo('samuel.caldas@gmail.com', 'Samuel Caldas');	// Email e nome
$mail->Subject		= "Teste do PHPMailer";						// Assunto;
require_once('DBFramework.php');				// Abrindo o phpmailer
$saida=select('','compras',"pago='n'",'email');
for($i=0;$i<count($saida);$i++){
	$mail->AltBody    = "Para ver a mensagem, por favor use um visualizador de e-mail compatível com HTML!"; // optional
	$mail->MsgHTML($saida[$i][2]);
	$mail->AddAddress($saida[$i][2], $saida[$i][2]);
	//$mail->AddStringAttachment($row["photo"], "YourPhoto.jpg");
	if(!$mail->Send()) {
	  echo "Erro ao enviar! (".str_replace("@","&#64;",$saida[$i][2]).') '.$mail->ErrorInfo.'<br>';
	  $i--;
	}else{
	  // Clear all addresses and attachments for next loop
	  $mail->ClearAddresses();
	  $mail->ClearAttachments();
	  echo "Menssagem enviada para: ".$em[$i].' ('.str_replace("@","&#64;",$saida[$i][2]).')<br>';
	}
}
?>