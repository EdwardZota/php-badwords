<?php

    $testo = $_GET['text'];
    $censura = $_GET['censura'];

    $lunghezzaParagrafo = strlen($testo);

    $testoCensurato = str_replace($censura,'***',$testo);
    $lunghezzaParagrafoCensurato =strlen($testoCensurato);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura</title>
</head>
<body>
    <h1>Controllo</h1>
    <h3>testo inserito e lunghezza</h3>
    <p><?php echo "$testo $lunghezzaParagrafo" ?></p>
    <h3>Parola che hai deciso di censurare</h3>
    <p><?php echo $censura; ?></p>
    <h3>Testo censurato e nuova lunghezza</h3>
    <p><?php echo "$testoCensurato $lunghezzaParagrafoCensurato" ?></p>
    
</body>
</html>