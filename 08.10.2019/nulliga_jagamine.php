<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #button {
            width: 100px;
        }
    </style>
</head>
<body>
    <form action="nulliga_jagamine.php">
        <div id="input-group">
            <label for="number1">Sisesta 1. number</label>
            <input type="text" id="number1" name="number1">
        </div>
        <div id="input-group">
            <label for="number2">Sisesta 2. number</label>
            <input type="text" id="number2" name="number2">
        </div>
        <div id="nupp">
            <input type="submit" id="button" name="button" value="Jaga">
        </div>
    </form>

    <div>
        <?php
        $num1 = $_GET ["number1"];
        $num2 = $_GET ["number2"];
        if (strlen($num1) < 0 and strlen($num2) < 0) {
            print 'Täida mõlemad väljad';
            }
        else if ($num2 != 0) {
            $jagatis = $num1 / $num2;
            print $jagatis;
        }
        else {
            print 'Nulliga ei saa jagada';
        }
        ?>
    </div>
</body>
</html>
