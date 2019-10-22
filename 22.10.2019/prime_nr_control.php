<?php
function isPrimeNumber ($number) {
    $result = '';
    $divider = 2;
    while ($number % $divider != 0) {
        $divider++;
    }
    if ($number == $divider) {
        $result = $number.' on algarv<br>';
    }
    else {
        $result = $number.' ei ole algarv<br>';
    }
    return $result;
}
print isPrimeNumber(rand(0,1000));