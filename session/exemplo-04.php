<?php

session_id('825ioogjgr23o44kmia2ruggq3');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>