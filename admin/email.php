<?php
	//Abrindo o phpmailer
	require 'phpmailer/class.phpmailer.php';
	//instanciando a classe
	$PHPMailer = new PHPMailer();
	//definindo idioma
	$PHPMailer->SetLanguage("br", 'phpMailer/language/');
	// define que será usado SMTP
	$PHPMailer->IsSMTP();
	// envia email HTML
	$PHPMailer->isHTML(true);
	// codificação UTF-8, a codificação mais usada recentemente
	$PHPMailer->Charset = 'UTF-8';
	// Configurações do SMTP
	$PHPMailer->SMTPAuth = true;
	$PHPMailer->SMTPSecure = 'ssl';
	$PHPMailer->Host = 'smtp.gmail.com';
	$PHPMailer->Port = 465;
	$PHPMailer->Username = 'samuel.caldas@gmail.com';
	$PHPMailer->Password = 'samuel19';
	// E-Mail do remetente (deve ser o mesmo de quem fez a autenticação
	// nesse caso seu_login@gmail.com)
	$PHPMailer->From = 'samuel.caldas@gmail.com';
	// Nome do rementente
	$PHPMailer->FromName = 'Samuel Caldas';
	// assunto da mensagem
	$PHPMailer->Subject = 'Teste do PHPMailler';
	// adiciona destinatário (pode ser chamado inúmeras vezes)
	$em[0]='samuel.caldas@hotmail.com';
	$em[1]='samuel.caldas@yahoo.com';
	for($i=0;$i<2;$i++){
		// corpo da mensagem
		$PHPMailer->Body = 'email'.$i;
		$PHPMailer->AddAddress($em[$i]);
		// verifica se enviou corretamente
		if ($PHPMailer->Send()){
			echo 'email'.$i;//sem erros
		}else{
			echo 'Erro '.$PHPMailer->ErrorMsg;//erro
		};
	}
?>