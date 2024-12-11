<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET</title>
</head>
<body>
    <h1>Formulaire avec méthode GET</h1>
    <form action="get_result.php" method="get">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Âge :</label>
        <input type="number" id="age" name="age" min="1" required><br><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>