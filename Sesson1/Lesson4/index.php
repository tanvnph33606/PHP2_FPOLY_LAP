<?php

function calculateFactorial($n)
{
    if ($n < 0) {
        echo "Nhap so duong";
    } elseif ($n == 0) {
        echo "result = 1";
    } else {
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }
        echo "result = $result";
    }
}
