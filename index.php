<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <form method="GET" action="censura.php" >

        <label for="text">Inserisci un testo a piacimento</label> <br />
        <input type="text" name="text" id="text" placeholder="testo a piacimento" /> <br />

        <label for="censura">Inserisci Parola da censurare</label> <br />
        <input type="text" name="censura" id="censura" placeholder="parola da censurare" /> <br />
        <button type="submit">Controllo testo</button>
    </form>
    
</body>
</html>