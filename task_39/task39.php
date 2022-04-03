<?php

require_once "../vendor/funct/funct/src/Collection.php";

use Funct\Collection;

function getManWithLessFriends($users)
{
    if (empty($users)) {
        return null;
    }
    return Collection\minValue($users, function ($user) {
        return count($user['friends']);
    });
}