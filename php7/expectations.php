<?php
ini_set('assert.exception', 1);

require_once "./expectations_definition.php";

use php7tutorial\CustomError as CustomError;

assert(false, new CustomError('Custom Error Message!'));
