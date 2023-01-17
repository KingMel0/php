<?php

function ola($texto = "mundo", $periodo = "Bom dia"){

	return "Hello $texto! $periodo<br>";

}

echo ola("mundo", "Bom dia");
echo ola("", "Boa noite");
echo ola("Marco", "Boa tarde");
echo ola("Melo", "");



?>