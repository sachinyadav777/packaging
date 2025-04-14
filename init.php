<?php

// ------------------------------- Include Files -------------------------------//


include_once "config.php";
include_once "includes/functions.php";
// include_once "includes/main_function.php";
include_once "includes/route.inc.php";
include_once "includes/session.php";




// Include ui DIR PATH

$include_ui_path = APPPATH . "/includes/";


define("HEADER", $include_ui_path . "view/header.php");
define("HEAD", $include_ui_path . "view/head.php");
define("FOOTER", $include_ui_path . "view/footer.php");
define("SCRIPT", $include_ui_path . "scripts.php");


