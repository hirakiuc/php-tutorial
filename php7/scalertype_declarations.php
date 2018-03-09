<?php
declare(strict_types=1);

require_once "./scalertype_declarations_definition.php";
use function php7tutorial\sum as sum;

// FIXME: This cause of TypeError.
print(sum(2, '3', 4.1));
