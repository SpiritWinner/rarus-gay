<?php

function slugify($text)
{
    $tolower = strtolower($text);
    $array = explode(" ", $tolower);
    return implode("-", $array);
}
