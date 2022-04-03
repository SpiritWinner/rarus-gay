<?php

function calculateAverage($array)
{
    if (empty($array)) {
        return null;
    }
    $average = 0;
    foreach ($array as $element) {
        $average += $element;
    }
    return ($average / count($array));
}
