<?php

function isPalindrome ($word)
{
    $len = mb_strlen($word);

    for ($i = 0; $i <= floor($len / 2); $i++)
    {
        if ($word[$i] != $word[$len-$i-1])
        {
            return false;
        }
    }
    return true;
}