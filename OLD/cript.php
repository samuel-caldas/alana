<?php
// Função para criptografar um termo
// Exemplo de utilização: echo esconde('senha_secreta');
// O retorno será "YXRlcmNlc19haG5lcw=="
function esconde($dado){
// Invertemos a variável para dificultar sua decriptação pela função base64_decode
$inverte = strrev($dado);
// Aqui fazemos a criptografia de fato utilizando a função base64_encode
$codifica = base64_encode($inverte);
// Retornamos o conteúdo de $var criptografado
return $codifica;
}
// Nesta função fazemos exatamente o inverso da função esconde
// Exemplo de utilização: echo mostra('YXRlcmNlc19haG5lcw==');
// O retorno será "senha_secreta"
function mostra($dado){
// Aqui fazemos a decriptografia com a função base64_decode
$decodifica = base64_decode($dado);
// Revertemos o conteúdo
$reverte = strrev($decodifica);
// Retornamos o conteúdo decriptografado
return $reverte;
}
?>