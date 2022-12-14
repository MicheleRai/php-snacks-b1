<?php
/*
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/ 
$partite_array = [
    ['partita' => [
        'casa' => [
            'nome' => 'Milano',
            'score' => 66,
        ],
        'ospite' => [
            'nome' => 'Bari',
            'score' => 100,
        ],  
    ]],
    ['partita' => [
        'casa' => [
            'nome' => 'Roma',
            'score' => 15,
        ],
        'ospite' => [
            'nome' => 'Trieste',
            'score' => 47,
        ], 
    ]],
    ['partita' => [
        'casa' => [
            'nome' => 'Bologna',
            'score' => 110,
        ],
        'ospite' => [
            'nome' => 'Firenze',
            'score' => 85,
    ]],
    ],
    ['partita' => [
        'casa' => [
            'nome' => 'Genova',
            'score' => 100,
        ],
        'ospite' => [
            'nome' => 'Torino',
            'score' => 71,
    ]   ,  
    ]]
];
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
    <h1>PARTITE GIOCATE OGGI</h1>
    <ul>
    <?php
    for ($i=0; $i < count($partite_array); $i++) { 
        echo "<li>" . $partite_array[$i]['partita']['casa']['nome'] . " - " . $partite_array[$i]['partita']['ospite']['nome'] . " | " . $partite_array[$i]['partita']['casa']['score'] . " - " . $partite_array[$i]['partita']['ospite']['score'] . "</li>";
    };
    ?>
    </ul>

</body>
</html>