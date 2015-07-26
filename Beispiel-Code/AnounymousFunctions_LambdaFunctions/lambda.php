<?php

/**
 * Lambda-Functions or Anonymous Functions
 */

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

$calcResult = function ($iValue1, $iValue2, $iValue3) {
    if ($iValue3 != 0)
        return ( ($iValue1 * $iValue2) / $iValue3);
    else
        return FALSE;
};

$Result = $calcResult(2, 10, 140);
if ($Result == FALSE)
{
    echo "Man kann nicht durch 0 dividieren.<br>";
}
else
{
    echo $Result ."<br>";
}

?>