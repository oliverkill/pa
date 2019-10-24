<?php

function tervita1()
{
    return "Tere kylaline";
}

function tervita2()
{
    return "Tere kylaline";
}

echo tervita2();
print '<br>';
function tervita3($nimi)
{
    return "Tere $nimi";
}

echo tervita3("Karin");

echo min(11,21,32,43,54);
echo max(11,21,32,43,54);

$arvud = array(11,21,32,43,54);
$arvud2 = array(60,72,42,34,45);

echo max(max($arvud), max($arvud2));


$arv = 3.456;

echo ceil($arv);
echo floor($arv);

echo rand();
echo mt_rand();
echo rand(1,10);

echo pow(5,2);
echo pow(5,3);

echo sqrt(9);

echo pi();

echo cos(0.8);

echo deg2rad(30);