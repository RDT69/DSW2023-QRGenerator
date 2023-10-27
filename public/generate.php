<?php
require "../vendor/autoload.php";

use Jose\QrGenerator\QrBuilder;

$qr1 = QrBuilder::create($_POST['data'], $_POST['label'], $_POST['filename']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Generador de código QR</h1>

    <p>
        El QR generado para <?=$_POST['data'];?> es:
    </p>

    <img src="img/<?=$_POST['filename'];?>.png" 
    alt="texto de codigo QR">

</body>
</html>

