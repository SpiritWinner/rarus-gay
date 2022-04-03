<?php

function getIntersectionOfSortedArray($arr1, $arr2)
{
    return array_values(array_intersect($arr1, $arr2));
}
