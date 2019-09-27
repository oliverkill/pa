<?php
$raadius = $_GET['raadius'];
echo 'Sisestatud raadius on '.$raadius.'<br>';
$pindalaS = $raadius * $raadius * pi();
print (round($pindalaS, 3))."<br>";
$ymbermootC = $raadius * 2 * pi();
print (round($ymbermootC, 3))."<br>";
var_dump($ymbermootC);