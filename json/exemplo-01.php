<?php
//JSON = JavaScript Object Notation

$pessoas = array();

array_push($pessoas, array(
	'nome'=> 'Marco',
	'idade'=> 25
));

array_push($pessoas, array(
	'nome'=> 'Kanye',
	'idade'=> 46
));

echo json_encode($pessoas);

?>


