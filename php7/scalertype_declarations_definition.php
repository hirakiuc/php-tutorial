<?php
// Coercive mode
namespace php7tutorial;

function sum(int ...$ints)
{
    return array_sum($ints);
}
