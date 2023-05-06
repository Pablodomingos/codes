<?php

function getBigger(int $n1, int $n2, int $n3)
{
    $r = $n1 > $n2 ? $n1 : $n2;
    return $r > $n3 ? $r : $n3;
}

list($n1, $n2, $n3) = explode(' ', readline());

echo getBigger($n1, $n2, $n3) . " eh o maior\n";
