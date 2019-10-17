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
                <label for="age">Vanus</label>
                <input type="number" min="0" id="age" name="age">
            </div>
            <div id="input-group">
                <input type="submit" value="Kontrolli">
            </div>
        </div>
    </form>
</body>
</html>
<?php
$vanus = (int)$_GET ["age"];
if (empty($vanus)) {
    print 'Head juubeliaastat';
}
else if ($vanus % 5 === 0) {
    print 'VÄLI ON TÜHI!';
}
else {
    print 'Veel ei ole juubeliaasta';
}