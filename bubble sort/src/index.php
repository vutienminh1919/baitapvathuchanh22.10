<?php
function bubbleSort($array)
{
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array); $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j + 1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}

$array = [1, 3, 4, 6, 7, 4, 3, 2, 9];
print_r(bubbleSort($array));
