<?php
/**
 * Created by PhpStorm.
 * User: Wadii
 * Date: 14.03.15
 * Time: 14:43
 *
 * Um verschachtelete schleifen zu vermeiden,
 * benutzt man anstattdessen sogenanntes Currying.
 * D.h man benutzt sowohl eine anonyme Funktion als auch eine Lambda-Funktion
 */

$anfang = microtime();
function rectangleArea ( $height, $width )
{
    return $height * $width;
}

/*for ( $i=1; $i <7; $i++ )
{
    for ( $j=10; $j <15; $j++ )
    {
        echo rectangleArea($i, $j). "<br>";
    }
}*/

function Area($length)
{
    return function($width) use ($length) {
        return rectangleArea($length, $width);
    };
}


for ( $i=1; $i <7; $i++ )
{
    $callbacks[] = Area($i);
}

foreach ($callbacks as $callback)
{
    echo $callback(10). "<br>";
}