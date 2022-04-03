<?php

require_once "../vendor/funct/funct/src/Collection.php";

use function Funct\Collection\firstN;

function takeOldest($users, $n=1) {
    $cmp = function ($a, $b) {
        if ($a['birthday'] === $b['birthday']) {
            return 0;
        }
        return strtotime($a['birthday']) > strtotime($b['birthday']) ? 1 : -1;
    };
    usort($users, $cmp);
    return firstN($users, $n);
}
