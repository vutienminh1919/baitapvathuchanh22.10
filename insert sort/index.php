<?php
function insertSort($array)
{
    for ($i = 0; $i < count($array); $i++) {
        $value = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $array[$j] > $value) {
            $array[$i] = $array[$i - 1];
            $j--;
        }
        $array[$j + 1] = $value;
    }
    return $array;
}
$array = [1,4,6,9,0,5,-1,8];
print_r($array);
echo "<br>";
print_r(insertSort($array));
