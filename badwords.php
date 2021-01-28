<?php
//definizione variabili

//Creare una variabile con un paragrafo di testo.
$testo = "Lorem var dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labo…";

$variabileGET = $_GET["badwords"];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h4>php-badwords
        Istruzioni:
        
        Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.
    </h4>
  

    <?php
    echo strlen($testo);
    
    echo str_replace($variabileGET, "***", $testo)?>


</body>

</html>