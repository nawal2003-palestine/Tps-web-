<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat GET</title>
</head>
<body>
    <h1>Résultat du formulaire GET</h1>
    <?php
    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = htmlspecialchars($_GET['name']);
        $age = (int) $_GET['age'];

        echo "<p>Nom : $name</p>";
        echo "<p>Âge : $age</p>";
    } else {
        echo "<p>Les informations ne sont pas disponibles.</p>";
    }
    ?>
</body>
</html>