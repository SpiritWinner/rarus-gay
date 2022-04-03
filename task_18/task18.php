<?php

function bubbleSort($array)
{
    if (empty($array)) {
        return $array;
    }
    do {
        $flag = false;
        for ($i = 0; $i < (count($array) - 1); $i++) {
            if ($array[$i] > $array[$i + 1]) {
                 $temp = $array[$i];
                 $array[$i] = $array[$i + 1];
                 $array[$i + 1] = $temp;
                $flag = true;
            }
        }
    } while ($flag);

    return $array;
}
