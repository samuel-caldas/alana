<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Finalizando sua compra...</title>
<style type="text/css">
body,td,th {
	font-family: "Segoe UI";
	font-size: 20px;
	color: #333;
}
body {
	background-color: #eee;
}
</style>

</head>
<body>
<?php
$string = '26.00';
$codificada=md5($string);
echo "Resultado da codificação usando md5: ".$codificada;
for($i=0;$i<101;$i++){
	if($codificada==md5($i.'.00')){
		echo "<br>Resultado da decodificação usando md5: ".$i.".00";
	}
}

?>
<p>Agradecemos pela preferencia, pedimos que preencha os campos do formulário para enviarmos o seu ticket:</p>
<form action="save.php" method="post" name="mailkey" target="load">
	<input name="compra" type="hidden" id="code" value="<?php echo""; ?>">
	<input name="email" type="text" placeholder="e-mail" id="email"><br>
    <input name="Enviar" type="submit" id="Enviar" value="Enviar">
</form>
<p>O protocolo da sua compra é: <strong><?php echo ""; ?></strong>, caso algo dê errado, nos envie esse código.</p>
<iframe id='load'></iframe>
</body>
</html>