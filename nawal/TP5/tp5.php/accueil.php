<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>Gestion des produits</h1>
    <form action="form.php" method="post">
        <label for="date">Date d'achat :</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="nombre">Nombre de produits :</label>
        <input type="number" id="nombre" name="nombre" min="1" required><br><br>

        <button type="submit">Envoyer</button>
        <button type="reset">Annuler</button>
    </form>
</body>
</html>
