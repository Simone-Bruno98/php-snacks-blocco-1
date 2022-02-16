<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACK C</title>
</head>
<body>
<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php

$min = "1";
$max = "50";
$nItems = "15";


function numeriCasuali ($min, $max, $nItems){
        $arrNumeriCasuali = [];

        while (count($arrNumeriCasuali) < $nItems){
            $numero = rand($min, $max);
            if(!in_array($numero,$arrNumeriCasuali)) {
                $arrNumeriCasuali[] = $numero;
            }
        }

        return $arrNumeriCasuali;
    }

    echo "<h1>". $arrNumeriCasuali . "</h1>";
?>
</body>
</html>