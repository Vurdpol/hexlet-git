<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>

<?php
if (empty($_GET))
{
    return 'Ничего не передано!';
}

if (empty($_GET))
{
    return 'Ничего не передано!';
}

if (empty($_GET['operation']))
{
    return 'Не передана операция';
}

if (empty($_GET['x1']) || empty($_GET['x2'])) {
    return 'Не переданы аргументы';
}

$x1 = $_GET['x1'];
$x2 = $_GET['x2'];

$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';

switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    default:
        return 'Операция не поддерживается';
}

return $expression . $result;
?>
</body>
</html>
