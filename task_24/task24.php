<?php

function union(array $data1, array $data2)
{
    return array_unique(array_merge($data1, $data2));
}

function genDiff($data1, $data2)
{
    $result=[];
    $keys=array_keys(union($data1, $data2));
    $keys1=array_keys($data1);
    $keys2=array_keys($data2);
    foreach ($keys as $key) {
        if (!in_array($key, $keys1)&&(in_array($key, $keys2))){
            $result[$key]='added';
        } elseif (in_array($key, $keys1)&&(!in_array($key, $keys2))) {
            $result[$key]='deleted';
        } elseif ($data1[$key] != $data2[$key]) {
            $result[$key]='changed';
        } elseif ($data1[$key] == $data2[$key]) {
            $result[$key]='unchanged';
        }
    }
    return $result;
}
