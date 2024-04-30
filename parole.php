<?php

$paragrafo = $_GET['paragraph'];
$parola = $_GET['word'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Il paragrafo e' <?php echo $paragrafo; ?> </p>
    <p>La lunghezza e' <?php echo strlen($paragrafo); ?>  </p>
    <div>La parola e' <?php echo $parola; ?> </div>

    <p>Il paragrafo censurato e' <?php echo str_replace( $parola, '***', $paragrafo); ?> </p>
    <p>La lunghezza e' <?php echo strlen(str_replace( $parola, '***', $paragrafo)); ?>  </p>
</body>
</html>