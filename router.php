<?php
$SERVER_ROOT = $_SERVER["DOCUMENT_ROOT"];
ob_start();

// ERROR HANDLING.
register_shutdown_function("fatal_handler");

function fatal_handler() {
  $error = error_get_last();

  if($error !== NULL) {
    $errno   = $error["type"];
    $errfile = $error["file"];
    $errline = $error["line"];
    $errstr  = $error["message"];
    error_log($errstr);

    // Clear screen
    ob_end_clean();

    $current_route = NULL;
    $current_template = $_SERVER["DOCUMENT_ROOT"] . "/html/500.php";
    require("html/layout.php");
    exit();
  }
}


// ROUTING
$ROUTES = array(
  "/" => "index",
  "/contact" => "contact",
  "/about" => "about"
);

// Remove query from URI.  If false, there is no query.
$current_route = strstr($_SERVER["REQUEST_URI"], "?", TRUE);
if($current_route == FALSE) {
  $current_route = $_SERVER["REQUEST_URI"];
}

// RENDERING
if(array_key_exists($current_route, $ROUTES) === TRUE) {
  $current_template = $SERVER_ROOT . "/html/" . $ROUTES[$current_route] . ".php";
} else {
  $current_template = $SERVER_ROOT . "/html/404.php";
}
require($SERVER_ROOT . "/html/layout.php");

?>
