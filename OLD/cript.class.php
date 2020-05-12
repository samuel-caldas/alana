<?php
class MyCrypt
{
 private $chave ;
 function __construct($chave){// grava uma chave de criptografica personalizada , caso seja letra , transforma em número
  $this->chave=ord($chave);
 }
 function encrypt($conteudo){
 	$str = '';
	$total = strlen($conteudo);
	for($i=0;$i!=$total;$i++){ 
//Pega cada caractere do conteudo, transforma em ascii e soma o valor da chave,retornando uma outra string
	$int_str = ord(substr($conteudo,$i,1));
	$str.=chr($int_str+$this->chave);
	}
	return $str;
 }
  function decrypt($conteudo){
 	$str = '';
	$total = strlen($conteudo);
	for($i=0;$i!=$total;$i++){ 
// Faz o sentido inverso , subtraido o valor da chave para obter o conteudo
	$int_str = ord(substr($conteudo,$i,1));
	$str.=chr($int_str-$this->chave);
	}
	return $str;
 }
}
?>