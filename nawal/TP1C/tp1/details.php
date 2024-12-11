<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails</title>
</head>
<body>
    <h1>Détails de l'utilisateur</h1>
    <?php
    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = htmlspecialchars($_GET['name']);
        $age = (int) $_GET['age'];

        echo "<p>Nom : $name</p>";
        echo "<p>Âge : $age ans</p>";
    } else {
        echo "<p>Aucune information n'a été trouvée.</p>";
    }
    ?>
</body>
</html>
