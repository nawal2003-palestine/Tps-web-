<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat POST</title>
</head>
<body>
    <h1>Résultat du formulaire POST</h1>
    <?php
    if (isset($_POST['name']) && isset($_POST['age'])) {
        $name = htmlspecialchars($_POST['name']);
        $age = (int) $_POST['age'];

        echo "<p>Nom : $name</p>";
        echo "<p>Âge : $age</p>";
    } else {
        echo "<p>Les informations ne sont pas disponibles.</p>";
    }
    ?>
</body>
</html>
