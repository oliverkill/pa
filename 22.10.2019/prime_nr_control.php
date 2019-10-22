<?php
function isPrimeNumber ($number) {
    $result = '';
    $bool = '';
    $divider = 2;
    while ($number % $divider != 0) {
        $divider++;
    }
    if ($number == $divider) {
        $result = $number.' on algarv<br>';
        $bool = true;
        return $bool;
    }
    else {
        $result = $number.' ei ole algarv<br>';
        $bool = false;
        return $bool;
    }

}
function a ($val) {
    if ($val) {
        print 'Algarv';
    }
else {
    print 'Ei ole algarv';
}
}
a (isPrimeNumber(rand(0,1000)));