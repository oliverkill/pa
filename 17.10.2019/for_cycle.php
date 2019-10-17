<?php
for($nr=1;$nr<=20;$nr++){
    if ($nr >= 10) {
        print $nr.'&nbsp;';
        echo '*<br>';
    }
    else {
        print $nr.'&nbsp;&nbsp;&nbsp;';
        echo '*<br>';
    }
}
?>