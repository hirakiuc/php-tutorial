<?php
require("./error_handling_with_function_definition.php");

// set error handler
set_error_handler("handleError");

// trigger error
myFunction();
