<?php
/*
// Before PHP 7
use com\tutorialspoint\ClassA;
use com\tutorialspoint\ClassB;
use com\tutorialspoint\ClassC as C;

use function com\tutorialspoint\fn_a;
use function com\tutorialspoint\fn_b;
use function com\tutorialspoint\fn_c;

use const com\tutorialspoint\ConstA;
use const com\tutorialspoint\ConstB;
use const com\tutorialspoint\ConstC;
 */

use com\tutorialspoint\{ClassA, ClassB, ClassC as C};
use function com\tutorialspoint\{fn_a, fn_b, fn_c};
use const com\tutorialspoint\{ConstA, ConstB, ConstC};
