<?php
$raadius = $_GET['raadius'];
echo 'Sisestatud raadius on '.$raadius.'<br>';
$pindalaS = $raadius * $raadius * 3.14;
print $pindalaS."<br>";
$ymbermootC = $raadius * 2 * 3.14;
print $ymbermootC."<br>";
var_dump($ymbermootC);