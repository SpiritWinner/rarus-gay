<?php

function without($items, ...$values)
{
    $reduced = array_reduce($items, function ($acc, $item) use ($values) {
        if (!in_array($item, $values)) {
            $acc[] = $item;
        }
        return $acc;
    }, []);
    return array_values($reduced);
}
