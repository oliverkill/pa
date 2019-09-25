<?php
// muutuja defineerimine
//$muutujaNimi = väärtus;

// väärtused on andmend - andmetüübid
// tekst - string - info mis pannakse jutumärkide vahele
// täisarvuline number - intiger - 2, 7, 9, -15 jne
// komaga arvud e. reaalarvud - float - 3.5, 7.9, -58.56 jne

$eesNimi = "Oliver";
$pereNimi = "Kill";
$email = "oliver.kill@khk.ee";
$vanus = 19; // aastad, täisarv
$pikkus = 1.83; // meetrid, reaalarv
$kaal = 56; // kg, täisarv

print $eesNimi;
print $pereNimi;
print $email;
print $vanus;
print $pikkus;
print $kaal;

print "<br>Eesnimi: ".$eesNimi."<br>";
print "Perenimi: ".$pereNimi."<br>";
print "Email: ".$email."<br>";
print "Vanus: ".$vanus."<br>";
print "Pikkus: ".$pikkus."<br>";
print "Kaal: ".$kaal."<br>";

//muutujate dünaamiline defineerimine
$bmi = $kaal / ($pikkus * $pikkus);
print "<br> Kehamassi index: ".$bmi;