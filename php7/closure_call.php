<?php
require_once "./closure_call_definition.php";

use php7tutorial\A as A;

// Define a closure Pre PHP 7 code
$getValue = function () {
    return $this->x;
};

/* Pre PHP 7
// Bind a closure
$value = $getValue->bindTo(new A, 'A');

print($value());
*/

// PHP 7+
$value = function () {
    return $this->x;
};
print($value->call(new A));
