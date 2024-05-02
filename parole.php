<?php

// prendo l'input 'paragraph' dell'utente e lo salvo nella variabile $paragrafo 
$paragrafo = $_GET['paragraph']; 
// prendo l'input 'word' dell'utente e lo salvo nella variabile $parola 
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
    <!-- stampo a schermo la variabile $paragrafo -->
    <p>Il paragrafo e' <?php echo $paragrafo; ?> </p>
    <!-- stampo a schermo la lunghezza della variabile $paragrafo -->
    <p>La lunghezza e' <?php echo strlen($paragrafo); ?>  </p>
    <!-- stampo a schermo la variabile $parola -->
    <div>La parola e' <?php echo $parola; ?> </div>
    <!-- Nella veriabile $paragrafo, censuro con *** la variabile $parola data dall'utente
    e stampo la variabile paragrafo con le parole censurate  -->
    <p>Il paragrafo censurato e' <?php echo str_replace( $parola, '***', $paragrafo); ?> </p>
    <!-- stampo a schermo la lunghezza della variabile $paragrafo con le parole censurate -->
    <p>La lunghezza e' <?php echo strlen(str_replace( $parola, '***', $paragrafo)); ?>  </p>
</body>
</html>