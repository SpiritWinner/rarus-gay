<?php

function average(...$numbers)
{
    return empty($numbers) ? null : (array_sum($numbers)) / (count($numbers));
}