<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des Informations</title>
</head>
<body>
    <h1>Informations saisies</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars($_POST["nom"]);
        $sexe = htmlspecialchars($_POST["sexe"]);
        $langues = isset($_POST["langues"]) ? $_POST["langues"] : [];
        $specialite = htmlspecialchars($_POST["specialite"]);
        $adresse = htmlspecialchars($_POST["adresse"]);

        echo "<p><strong>Nom :</strong> $nom</p>";
        echo "<p><strong>Sexe :</strong> $sexe</p>";
        echo "<p><strong>Langues :</strong> " . implode(", ", $langues) . "</p>";
        echo "<p><strong>Spécialité :</strong> $specialite</p>";
        echo "<p><strong>Adresse :</strong> $adresse</p>";
    } else {
        echo "<p>Aucune information reçue.</p>";
    }
    ?>
</body>
</html>
