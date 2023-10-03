<?php
session_start();

$loggin = $_POST['loggin'];
$senha = $_POST['senha'];

if ($senha == '1234' && $loggin == 'pedro'){
$_SESSION($logged);
header("Location:index.html");
die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header >

    </header>
</body>
</html>