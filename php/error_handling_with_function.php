<?php
// This code does not works with PHP7.2
function handleError($errno, $errstr, $error_file, $error_line) {
  echo "<b>Error:</b> [$errno] $errstr - $error_file:$error_line";
  echo "<br />";
  echo "Terminating PHP Script";

  die();
}

// set error handler
set_error_handler("handleError");

// trigger error
myFunction();
?>
