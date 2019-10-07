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
                <td>x = x + 2</td>
                <td>x += 2</td>
                <td>'.$x.' += 2</td>
                <td>'.($x += 2).'</td>
            </tr>
            ';
    $x = 6;
    print '
            <tr>
                <td>x = x - 2</td>
                <td>x -= 2</td>
                <td>'.$x.' -= 2</td>
                <td>'.($x -= 2).'</td>
            </tr>
            ';
    $x = 6;
    print '
            <tr>
                <td>x = x * 2</td>
                <td>x *= 2</td>
                <td>'.$x.' *= 2</td>
                <td>'.($x *= 2).'</td>
            </tr>
            ';
    $x = 6;
    print '
            <tr>
                <td>x = x / 2</td>
                <td>x /= 2</td>
                <td>'.$x.' /= 2</td>
                <td>'.($x /= 2).'</td>
            </tr>
            ';
    $x = 6;
    print '
            <tr>
                <td>x = x % 2</td>
                <td>x %= 2</td>
                <td>'.$x.' %= 2</td>
                <td>'.($x %= 2).'</td>
            </tr>
            ';
    $x = 6;
    print '
            <tr>
                <td>x = x . 2</td>
                <td>x .= 2</td>
                <td>'.$x.' .= 2</td>
                <td>'.($x .= 2).'</td>
            </tr>
        </tbody>
    </table>
    ';
?>
</body>
</html>