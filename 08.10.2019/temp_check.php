<?php
$temp = rand(-64,39);
if ($temp <= 0) {
    print '<body style="background-color:lightblue"><div>Temp on '.$temp.' &degC</div></body>';
}
else if ($temp > 10) {
    print '<body style="background-color:lightyellow"><div>Temp on '.$temp.' &degC</div></body>';
}
else {
    print '<body style="background-color:lightgreen"><div>Temp on '.$temp.' &degC</div></body>';
}