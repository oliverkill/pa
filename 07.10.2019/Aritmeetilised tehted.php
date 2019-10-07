<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, td {
            border:1px solid black;
        }
        thead {
            background-color: yellow;
            font-weight: bold;
        }
        th, td {
            text-align: center;
        }
    </style>
</head>
<body>

<?php
$x = 6;
$y = 4;
$liitmine = $x + $y;
$lahutamine = $x - $y;
$korrutamine = $x * $y;
$jagamine = $x / $y;
$jaak = $x % $y;
print $x.' + '.$y.' = '.$liitmine.'<br>';
print $x.' - '.$y.' = '.$lahutamine.'<br>';
print $x.' * '.$y.' = '.$korrutamine.'<br>';
print $x.' : '.$y.' = '.$jagamine.'<br>';
print $x.' % '.$y.' = '.$jaak.'<br>';
print'
    <table>
        <thead>
            <td>Operaator</td>
            <td>Nimetus</td> 
            <td>Näide</td> 
            <td>Tulemus</td>     
        </thead>
        <tbody>
            <tr>
                <td>x + y</td>
                <td>Liitmine</td>
                <td>'.$x.' + '.$y.'</td>
                <td>'.$liitmine.'</td>
            </tr>
            <tr>
                <td>x - y</td>
                <td>Lahutamine</td>
                <td>'.$x.' - '.$y.'</td>
                <td>'.$lahutamine.'</td>
            </tr>
            <tr>
                <td>x * y</td>
                <td>Korrutamine</td>
                <td>'.$x.' * '.$y.'</td>
                <td>'.$korrutamine.'</td>
            </tr>
            <tr>
                <td>x / y</td>
                <td>Jagamine</td>
                <td>'.$x.' / '.$y.'</td>
                <td>'.$jagamine.'</td>
            </tr>
            <tr>
                <td>x % y</td>
                <td>Jääk</td>
                <td>'.$x.' % '.$y.'</td>
                <td>'.$jaak.'</td>
            </tr>
        </tbody>
    </table>
    ';
?>
</body>
</html>