<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations Utilisateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            text-align: center;
        }
        h1 {
            font-size: 24px;
        }
        p {
            font-size: 18px;
            color: #333;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
    // Vérifie si les paramètres "nom" et "age" sont présents dans l'URL
    if (isset($_GET['nom']) && isset($_GET['age'])) {
        $nom = htmlspecialchars($_GET['nom']); // Protection contre les attaques XSS
        $age = (int) $_GET['age']; // Conversion en entier pour sécuriser l'âge

        echo "<h1>Informations Utilisateur</h1>";
        echo "<p>Nom : <strong>$nom</strong></p>";
        echo "<p>Âge : <strong>$age ans</strong></p>";
    } else {
        echo "<h1>Erreur</h1>";
        echo "<p>Les informations de l'utilisateur ne sont pas disponibles.</p>";
    }
    ?>
    <p><a href="quest2.php">Retour à la liste des utilisateurs</a></p>
</body>
</html>
