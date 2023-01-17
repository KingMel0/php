<?php

require_once("config.php");

echo session_save_path(); 

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()){

	case PHP_SESSION_DISABLED;
	echo "Sessions are disabled.";
	break;

	case PHP_SESSION_NONE;
	echo "Sessions are enabled, but none exists";
	break;

	case PHP_SESSION_ACTIVE;
	echo "Sessions are enabled, and one exists.";
	break;

}

?>