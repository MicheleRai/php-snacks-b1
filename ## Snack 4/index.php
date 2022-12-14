<?php
/*
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/ 
?>

<?php
    $my_array = [];
    do {
        $new_numb = rand(0, 1000);
        if (in_array($new_numb, $my_array)) {
            print_r('trovata una copia');
        }else {
            
            array_push($my_array, $new_numb);
        };
    } while (count($my_array) <= 14);
?>
<?= '<pre>' . print_r($my_array, true) . '</pre>' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    <h1>GENERATORE NUMERI RANDOM</h1>
    <ul>
        <?php
        for ($i=0; $i < count($my_array); $i++) { 
            echo "<li>".$my_array[$i]."</li>";
        };
        ?>
    </ul>
</body>
</html>