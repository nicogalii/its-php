<?php

function countPosEven($arr)
{
    $count = 0;
    foreach ($arr as $val) {
        if ($val > 0 && ($val % 2 === 0)) {
            $count++;
        }
    }

    echo $count;
}

countPosEven([1, 4, -3, -7, 2, 10, 6, -3, -5, 5]);