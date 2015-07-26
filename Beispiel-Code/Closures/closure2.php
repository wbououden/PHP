<?php
/**
 * Created by PhpStorm.
 * User: Wadii
 * Date: 14.03.15
 * Time: 14:07
 */


$fruits = array("banane", "apfel", "zitrone", "apfel");
print "<pre>";
print_r($fruits);
print "</pre>";

function mySortFunction ($fruits, $direction)
{
    usort($fruits, function ($a, $b) use ($direction) {
        if ($a > $b)
            return ($direction == 'desc') ? 1 : -1;

        if ($a < $b)
            return ($direction == 'desc') ? -1 : 1;

        return 0;
    });

    usort($fruits, $callback);

    print "<pre>";
    print_r($fruits);
    print "</pre>";
}

mySortFunction($fruits, "asc");