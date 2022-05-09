<?php

session_start();

if(!isset($_SESSION['authentificated']) || $_SESSION['authentificated']!= true){
    $url ='/login.php';
    header("Location: {$url}", 302);
    exit();
}
?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page privé</h1>
    <a href="/logout.php"> se deconecter</a>
</body>
</html>