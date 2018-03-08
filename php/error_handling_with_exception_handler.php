<?php
require("./error_handling_with_exception_handler_definition.php");

set_exception_handler('exception_handler');
throw new Exception('Uncaught Exception');

echo 'Not executed\n';
