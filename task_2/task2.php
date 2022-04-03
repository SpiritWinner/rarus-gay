<?php

function isPalindrome ($word)
{
    if (strrev($word) == $word)
        echo true;
    else
        echo false;
}