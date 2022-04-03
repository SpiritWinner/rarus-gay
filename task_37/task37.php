<?php

function getMensCountByYear($users)
{
    $males = array_filter($users, function ($male) {
        return $male['gender'] === 'male';
    });

    $menByage = array_reduce($males, function ($acc, $male) {
        $year = date("Y", strtotime($male['birthday']));
        if (!array_key_exists($year, $acc)) {
            $acc[$year] = 1;
        } else {
            $acc[$year] += 1;
        }

        return $acc;
    }, []);
    return $menByage;
}