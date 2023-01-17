<?php

$json = '[{"nome":"Marco","idade":25},{"nome":"Kanye","idade":46}]';

$data = json_decode($json, true);

var_dump($data);

?>