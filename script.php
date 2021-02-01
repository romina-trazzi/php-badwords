<?php

// String replace (esercizio Badword)

$base_string = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae nemo architecto praesentium corrupti nulla? dolore.";
$string_replaced = str_replace($_GET["badword"], "***", "$base_string"); 

/* I parametri del metodo str_replace sono: 
1. la parola da sostituire (presa tramite query string)
2. con cosa sostituirla (i 3 ***) 
3. in quale variabile cercare per sostituire il testo non voluto */

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport">
        <title>Prova</title>
    </head>

    <body>

        <p> <?php echo $base_string; ?> </p>
        <p> Il paragrafo base_string ha <?php echo strlen($base_string); ?> caratteri. </p>


        <p> <?php echo $string_replaced; ?> </p>
        <p> Il paragrafo string_replaced ha <?php echo strlen($string_replaced); ?> caratteri. </p>

    </body>
</html>