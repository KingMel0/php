<?php

$anoNascimento = 1998;
//$nomeCompleto = "Marco Tulio Ferreira";
//aqui esta um comentario. nao pode usar numero no inicio de var.
$nome1 = "Marco";
$sobrenome = "Ferreira";
$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;
echo "<br/>";

unset($nome1);

if(isset($nome1)){
	echo $nome1;
}


?>