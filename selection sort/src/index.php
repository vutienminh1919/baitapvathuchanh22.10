<?php
function selectionSortSmallToBig($array) // small to big
{
    for ($i = 0; $i < count($array) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        $array = swapPos($array, $i, $min);
    }
    return $array;
}

function selectionSortBigToSmall($array)
{
    for ($i = 0; $i < count($array) - 1; $i++) {
        $max = $i;
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] > $array[$max]) {
                $max = $j;
            }
        }
        $array = swapPos($array, $i, $max);
    }
    return $array;
}

function swapPos($data, $left, $right)
{
    $temp = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $temp;
    return $data;

}

$array = [5, 8, 10, 77, 4, 3, 8, 9, 7, 4];
echo implode(",", $array);
echo "<br>";
echo implode(",", selectionSortBigToSmall($array));