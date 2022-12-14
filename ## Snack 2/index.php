<?php
/*

## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/ 
?>
<?php
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        if (strlen($name) > 3) {
            $messageName = 'OK lunghezza nome valida!';
        }else {
            $messageName = 'Per favore inserire un nome superiore a 3 caratteri';
        }
    }else {
        $name = '';
        $messageName = 'Nome non inserito';
    }
	if (isset($_GET['mail'])) {
		$mail = $_GET['mail'];

		$pos_at = strpos($mail, '@');

		if ($pos_at && strpos($mail, '.', $pos_at)) {
			$messageMail = 'OK mail valida!';
		} else {
			$messageMail = 'mail NON valida, controllare il corretto inserimento';
		}
	} else {
		$mail = '';
		$messageMail = 'Mail non inserita';
	};
    if (isset($_GET['age'])) {
        $age = $_GET['age'];
        if (is_numeric($age)) {
            $messageAge = 'OK eta inserita correttamente!';
        }else {
            $messageAge = 'Per piacere verificare la corretta immisone dell eta';
        }

    }else {
        $age = '';
		$messageAge = 'Eta non inserita';
    }
    if (($messageName == 'OK lunghezza nome valida!') && ($messageMail == 'OK mail valida!') && ($messageAge == 'OK eta inserita correttamente!')) {
        $message = 'Accesso Riuscito!' ;
    }else {
        $message = 'Accesso Negato!' ;
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    <h1>EFFETTUA QUI LA TUA REGISTRAZIONE</h1>
    <form action="" method="get">
        <label for="name">Inserisci il tuo nome</label>
        <input type="text" name="name" id="name" value= "<?= $name ?>">

		<label for="mail">Inserisci la tua mail</label>
		<input type="text" name="mail" id="mail" value="<?= $mail ?>">

        <label for="age">Inserisci la tua eta</label>
        <input type="text" name="age" id="age" value= "<?= $age ?>">

		<button>registrati</button>
	</form>

    <h3><?= $messageName ?></h3>
	<h3><?= $messageMail ?></h3>
    <h3><?= $messageAge ?></h3>
    <h1><?= $message ?></h1>
</body>
</html>