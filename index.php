<?php
    $text = "La paura è la via per il lato oscuro. La paura conduce all'ira, l'ira all'odio e l'odio alla sofferenza";
    $author = 'Yoda';
    $length = strlen($text);
    $bad_word = $_GET['word'];
    $text_censured = str_replace($bad_word, '***', $text);
    $length_censured = strlen($text_censured);
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
    <h2>Testo con censura</h2>
    <p><?php echo $text_censured ?></p>
    <h3>Autore: <?php echo $author ?></h3>
    <span>Lunghezza testo: <strong><?php echo $length_censured ?></strong></span>
</body>
</html>