<?php
$nimi = $_GET["nimi"];
$pikkus = $_GET["pikkus"];
$kaal = $_GET["kaal"];
print "Nimi: ".$nimi;
$bmi = $kaal / ($pikkus * $pikkus);
print "<br>Sinu kehamassi indeks on: ".$bmi;
print '<br><a href="input.php">Sisesta andmed uuesti </a>';