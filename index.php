<?php
// generatore casuale della pass
if (isset($_GET['lunghezza'])) {
    $lunghezza = $_GET['lunghezza'];
    $password = generaPassword($lunghezza);
}

function generaPassword($lunghezza)
{
    // definisci i caratteri possibili per la password
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';

    // genera la password casuale
    $password = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $password .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }

    return $password;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Generatore casuale di Pass</h1>

    <form method="get" action="index.php">
        <label for="lunghezza">Dicci quanto vuoi lunga la tua nuova pass:</label>
        <input type="number" name="lunghezza" id="lunghezza" min="1" max="50" required>
        <input type="submit" value="Genera">

        <?php
        // stampa pass
        echo "<p>La tua nuova password è: <strong>$password</strong></p>";
        ?>
    </form>


</body>

</html>