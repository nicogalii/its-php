<?php
function distinct($list)
{
    $ret = [];
    for ($i = 0; $i < count($list); $i++) {
        if (!array_search($list[$i], $ret)) {
            $ret[] = $list[$i];
        }
    }
    return $ret;
}

$list = [1, 2, 3, 2, 4, 3, 5, 4, 5, 6, 7, 8, 6, 7, 5, 4, 3, 2, 1, 9, 0, 5, 9, 7, 8];

print_r(distinct($list));