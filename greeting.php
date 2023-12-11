<?php
// prendi "paragraph" dal get
$paragraph = $_GET["paragraph"];

// prendi "word" del get
$word = $_GET["word"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- paragrafo iniziale -->
    <h2>Ciao! qusto è il tuo paragrafo iniziale</h2>
    <?php echo $paragraph ?>

    <!-- lunghezza paragrafo -->
    <?php $len_paragraph = strlen($paragraph); ?>
    <h2>Il tuo paragrafo ha una lunghezza di <?php echo $len_paragraph ?> caratteri </h2>

    <!-- nuovo paragrafo con parola censurata -->
    <h2>Questo è il tuo nuovo paragrafo con la parola censurata</h2>
    <?php $new_paragraph = str_replace("$word", "***", "$paragraph"); ?>
    <?php echo $new_paragraph; ?>

</body>
</html>