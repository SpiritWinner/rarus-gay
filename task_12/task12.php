<?php
function getSameParity($array)
{
    if (empty($array)) {
        return $array;
    }
    $evenArray = [];
    $notEvenArray = [];
    foreach ($array as $element) {
        if ($element % 2 === 0) {
            $evenArray[] = $element;
        } else {
            $notEvenArray[] = $element;
        }
    }
    return ($array[0]% 2 === 0) ? $evenArray : $notEvenArray;
}