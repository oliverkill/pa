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
    <form action="" method="">
        <div id="container">
            <div id="input-group">
                <label for="nation">Kodakondsus</label>
                <select id="nation" name="nation">
                    <option value="et">eestlane</option>
                    <option value="ru">venelane</option>
                    <option value="fi">soomlane</option>
                    <option value="se">rootslane</option>
                    <option value="muu">muu</option>
                </select>
            </div>
            <div id="insert-group">
                <label for="age">Vanus</label>
                <input type="number" min="0" id="age" name="age">
            </div>
            <div id="input-group" class="radio">
                <label for="edu-beg">Algharidus</label>
                <input type="radio" id="edu-beg" name="education" value="beginner">
                <label for="edu-bas">Põhiharidus</label>
                <input type="radio" id="edu-bas" name="education" value="basic">
                <label for="edu-med">Keskharidus</label>
                <input type="radio" id="edu-med" name="education" value="med">
                <label for="edu-adv">Kõrgharidus</label>
                <input type="radio" id="edu-adv" name="education" value="adv">
            </div>
            <div id="input-group">
                <input type="submit" value="Kontrolli">
            </div>
        </div>
    </form>
</body>
</html>
<?php
$kodakondsus = $_GET ["nation"];
$vanus = (int)$_GET ["age"];
$haridus = $_GET ["education"];
if ($kodakondsus == 'et' and $vanus >= 18 and ($haridus != 'beginner')) {
    print 'Kaitseväkke minek';
}
else {
    print 'Veel ei pea kaitseväkke minema';
}