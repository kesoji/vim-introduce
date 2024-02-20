<?php
//CURSOR
function binarySearch($arr, $x)
{
    $l = 0;
    $r = count($arr) - 1;
    while ($l <= $r) {
        $m = $l + ($r - $l) / 2;
        if ($arr[$m] == $x) {
            return $m;
        }
        if ($arr[$m] < $x) {
            $l = $m + 1;
        } else {
            $r = $m; // ここに-1を入れたいので、;の前に行きたい
        }
    }
    return -1;
}
