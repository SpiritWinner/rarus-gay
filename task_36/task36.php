<?php

require_once "../vendor/funct/funct/src/Collection.php";

use function \Funct\Collection\flatten;

function getGirlFriends($users)
{
    $friends = array_map(function ($friend) {
        return $friend['friends'];
    }, $users);
    $friendsFlatten = flatten($friends);

    $females = array_filter($friendsFlatten, function ($female) {
        return $female['gender'] === 'female';
    });
    return array_values($females);
}