<?php

$dt = new DateTime();

$periodo = new DateIneterval("P15D");

echo $dt->format("d/m/Y H:i:s");

echo "<br>";

$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");

?>