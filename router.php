<?php

// ERROR HANDLING.
register_shutdown_function("fatal_handler");

function fatal_handler() {
  $error = error_get_last();

  if($error !== NULL) {
    $errno   = $error["type"];
    $errfile = $error["file"];
    $errline = $error["line"];
    $errstr  = $error["message"];

    echo "There was a fatal error...";
  }
}


// ROUTING
$ROUTES = array(
  "/" => "index",
  "/about" => "about",
  "/developer_login" => "developer_login"
);

// Remove query from URI.  If false, there is no query.
$current_route = strstr($_SERVER["REQUEST_URI"], "?", TRUE);
if($current_route == FALSE) {
  $current_route = $_SERVER["REQUEST_URI"];
}


// RENDERING
$current_template = "html/" . $ROUTES[$current_route] . ".php";
// TODO Catch when not found.
require("html/layout.php");

?>
