<?php

/**
 * Closures
 *
 * Examples:
 *
 * the value of a direction will be received by the usort function.
 * This sort function uses her as the second parameter to sort the
 * values of the array $fruits.
 */

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

$fruits = array("apfel", "zitrone", "banane");

function mySort($fruits, $direction)
{
    $callback = function($a, $b) use ($direction)
    {
    if ($a < $b)    return ($direction == 'desc') ? -1 : 1;
    if ($a > $b)    return ($direction == 'desc') ?  1 : 1;
    return 0;
    };

    usort($fruits, $callback);
    print "<pre>";
    print_r($fruits);
    print "</pre>";
}

mySort($fruits, 'desc');

print "<pre>";
print_r($fruits);
print "</pre>";
?>