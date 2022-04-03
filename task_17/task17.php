<?php

function countUniqChars($str)
{
    if ($str === '') {
        return 0;
    }

    $splitted = str_split($str);
    $uniq = [];
    foreach ($splitted as $char) {
        if (!in_array($char, $uniq, true)) {
            $uniq[] = $char;
        }
    }

    return count($uniq);
}
