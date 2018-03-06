<?php
declare(strict_types=1);
function returnIntValue(int $value): int {
  return $value;
}

function returnNextIntValue(int $value): int {
  return $value + 1.0;
}

print(returnIntValue(5));

print(returnNextIntValue(5));
?>
