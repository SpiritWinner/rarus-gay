<?php

 function getIntersectionOfSortedArray($arr1, $arr2)
 {
     if (empty($arr1) || empty($arr2)) {
         return [];
     }
     $unionArray = [];
     foreach ($arr1 as $iValue) {
         $cur1 = $iValue;
         if (in_array($cur1, $arr2)) {
             $unionArray[] = $cur1;
         }
     }
     return $unionArray;
 }

