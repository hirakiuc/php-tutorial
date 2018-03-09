<?php
declare(strict_types=1);

require_once "./return_type_declarations_definition.php";

use function php7tutorial\returnIntValue as returnIntValue;
use function php7tutorial\returnNextIntValue as returnNextIntValue;

print(returnIntValue(5));
print(returnNextIntValue(5));
