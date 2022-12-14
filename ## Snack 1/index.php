<?php
/*
Createvi una cartella con il nome della repo e una sottocartella per ciascuno snack.
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/ 
$partite_array = array (
    'partita1' => array (
        'casa' => array (
            'nome' => 'Milano',
            'score' => 66,
        ),
        'ospite' => array (
            'nome' => 'Bari',
            'score' => 100,
        ),  
    ),
    'partita2' => array (
        'casa' => array (
            'nome' => 'Roma',
            'score' => 15,
        ),
        'ospite' => array(
            'nome' => 'Trieste',
            'score' => 47,
        ), 
    ),
    'partita3' => array (
        'casa' => array (
            'nome' => 'Bologna',
            'score' => 110,
        ),
        'ospite' => array(
            'nome' => 'Firenze',
            'score' => 85,
        ),
    ),
    'partita4' => array (
        'casa' => array (
            'nome' => 'Genova',
            'score' => 100,
        ),
        'ospite' => array(
            'nome' => 'Torino',
            'score' => 71,
        ),  
    ),
);
?>
<?= '<pre>' . print_r($partite_array, true) . '</pre>' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    
</body>
</html>