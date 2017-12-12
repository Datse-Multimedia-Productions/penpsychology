<?php

require_once("model/index.php");

switch ($action) {
	case "index":
		$pagename="index";
		include_once("view/index.php");
		break;
	default:
		$pagename="default";
		include_once("view/index.php");
}




?>
