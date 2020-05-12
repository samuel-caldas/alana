<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Finalizar compras</title>
<style type="text/css">
body,td,th {
	color: #333;
	font-family: "Segoe UI";
	font-size: 14px;
	overflow: hidden;
}
body {
	background-color: #f8f8f8;
}
</style>
<script>
var time=11;
window.onload=function(){
	setInterval(function(){
		time=time-1;
		document.getElementById('timer').innerHTML=time;
	},999);
	
};
</script>
<meta http-equiv="refresh" content="11;http://localhost/alana">
</head>


<body>
<?php
include('admin/DBFramework.php');
if(insert('compras','','"","'.$_GET['id'].'","n"')){
?>
<div>
<p>Agradecemos pela preferencia, assim que computarmos seu pagamento estaremos enviando um código para o email escolhido, nescessário para retidada de seu produto.
</p>
<p><strong>Em caso de problemas informe esse código a um de nossos antendentes: <?php echo $_GET['id']; ?></strong></p>
</div>
<?php }else{ ?>
<div>
Ocorreu um erro inesperado mas já estamos trabalhando para concertar, mas não se preoculpe, sua compra foi finalizada com sucesso, basta informar esse codigo a um de nossos atendentes: <strong><?php echo $_GET['id']; ?></strong>
</div>
<?php } ?>
<p>A página será redirecionada em 
<strong id="timer">10</strong> Segundos</p>
</body>
</html>