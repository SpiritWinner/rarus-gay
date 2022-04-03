<?php

require_once "../vendor/funct/funct/src/Collection.php";

use function \Funct\Collection\flatten;

function getChildren($users)
{
    $children = array_map(function ($child) {
        return $child['children'];
    }, $users);
    return flatten($children);
}