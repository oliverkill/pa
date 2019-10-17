<?php
for($rida=1; $rida<=5; $rida++){
    print $rida.'&nbsp;';
    if ($rida < 10) {
        print '&nbsp;&nbsp;';
    }
    for ($col = 1; $col <=5;$col++) {
        if ($rida >= $col) { //ainukene muutus
            echo '&nbsp;*';
        }
    }
    print '<br>';
}
print '<br>';
for($rida=1; $rida<=5; $rida++){
    print $rida.'&nbsp;';
    if ($rida < 10) {
        print '&nbsp;&nbsp;';
    }
    for ($col = 1; $col <=5;$col++) {
        if ($rida <= $col) { //ainukene muutus
            echo '&nbsp;*';
        }
    }
    print '<br>';
}
?>