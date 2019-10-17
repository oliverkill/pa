<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form>
    <div id="container">
        <div id="input-group">
            <label for="arv">Arv</label>
            <input type="number" min="0" id="arv" name="arv">
        </div>
        <div id="input-group">
            <input type="submit" value="Kontrolli">
        </div>
    </div>
</form>
</body>
</html>
<?php
$nr = (int)$_GET['arv'];
$num = 1;
do {
    $num++;
    $nr % $num;
} while ($nr % $num !== 0);
if ($num === $nr) {
    print 'algarv';
}
else {
    print 'ei ole algarv';
}
print '<hr>';
$number=1;
while ($number <= 5) {
    print $number.'<br>';
    $number++;
}
print '<hr>';
$number=10;
do {
    print $number.'<br>';
    $number++;
} while ($number <= 15);