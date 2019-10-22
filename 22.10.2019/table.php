<?php
//htv = header text value
function tableHeader ($htv1, $htv2, $htv3, $htv4) {
    print '<table>
    <th>'.$htv1.'</th>
    <th>'.$htv2.'</th>
    <th>'.$htv3.'</th>
    <th>'.$htv4.'</th>
</table>';
}
tableHeader(a, b, c,d);