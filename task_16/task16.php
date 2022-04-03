<?php

function getSameCount($first, $second)
{
    $sameElementCount = 0;
    $uniqueFirst = array_unique($first);
    $uniqueSecond = array_unique($second);
    for ($i = 0; $i < (count($uniqueFirst)); $i++) {
        if (in_array($uniqueFirst[$i], $uniqueSecond, true)) {
            $sameElementCount += 1;
        }
    }
    return $sameElementCount;
}