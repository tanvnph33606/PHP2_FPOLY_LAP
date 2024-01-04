<?php

function sumAndAverage($arr)
{
    if (!is_array($arr)) {
        echo "not an array";
    } else {
        $sum = 0;
        $average = 0;
        foreach ($arr as $key => $value) {
            $sum += $value;
        }
        $average = $sum / count($arr);
        echo "Sum: " . $sum . "<br>";
        echo "Average: " . $average;
    }
}


$arr = [1, 2, 3, 4, 5];
sumAndAverage($arr);
