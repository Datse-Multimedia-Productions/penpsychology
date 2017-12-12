<?php

require_once("model/index.php");
if (!isset($action)) {
	$action="none";
}

switch ($action) {
	case "index":
		include_once("view/index.php");
		echo "index";
		break;
	default:
		include_once("view/index.php");
		echo "default";
}




?>
