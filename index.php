<?php
    $text = "La paura è la via per il lato oscuro. La paura conduce all'ira, l'ira all'odio e l'odio alla sofferenza";
    $author = 'Yoda';
    $length = strlen($text);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>AFORISMI</h1>
    <p><?php echo $text ?></p>
    <h3>Autore: <?php echo $author ?></h3>
    <span>Lunghezza testo: <strong><?php echo $length ?></strong></span>
</body>
</html>