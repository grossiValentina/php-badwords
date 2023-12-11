<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Censura la parola in un paragrafo</h1>

    <form action="greeting.php" method="GET">

        <!-- input paragrafo -->
        <label for="paragraph">Scrivi il tuo paragrafo</label>
        <input type="text" id="paragraph" name="paragraph">

         <!-- input parola da censurare -->
         <label for="word">Scrivi la parola che vuoi censurare</label>
        <input type="text" id="word" name="word">

        <button>invia</button>
    </form>
</body>
</html>