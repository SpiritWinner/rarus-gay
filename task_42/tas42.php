<?php

function cd($current, $move)
{
    if ($move[0] === "/") {
        return $move;
    }
    $currentStack = explode("/", $current);
    $moveStack = explode("/", $move);
    foreach ($moveStack as $value) {
        switch ($value) {
            case "..":
                array_pop($currentStack);
                break;
            case "":
            case '.':
                break;
            default:
                $currentStack[] = $value;
                break;
        }
    }
    return implode("/", $currentStack);
}
