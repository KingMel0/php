<?php

$nome = "Marco" . "<br/>";

function teste(){

	global $nome;
	echo $nome;
}

function teste2(){

	$nome = "Drako";
	echo $nome. " agora no teste2";
}

teste();
teste2();

?>