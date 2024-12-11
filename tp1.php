<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaires PHP - GET et POST</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        h1 {
            color: #333;
        }
        .container {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 20px;
        }
        .form-container {
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        .form-container h2 {
            color: #555;
            margin-bottom: 10px;
            font-size: 18px;
        }
        .form-container form {
            display: flex;
            flex-direction: column;
        }
        .form-container label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-container input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 14px;
        }
        .form-container input[type="submit"],
        .form-container input[type="reset"] {
            cursor: pointer;
            background-color: #007BFF;
            color: white;
            border: none;
            transition: background-color 0.3s;
        }
        .form-container input[type="reset"] {
            background-color: #DC3545;
        }
        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .form-container input[type="reset"]:hover {
            background-color: #c82333;
        }
        .result {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #e9ecef;
            border-left: 5px solid #007BFF;
            border-radius: 5px;
            max-width: 500px;
        }
    </style>
</head>
<body>

    <h1>Application PHP : Formulaires GET et POST</h1>

    <div class="container">
        <!-- Formulaire utilisant GET -->
        <div class="form-container">
            <h2>Version GET</h2>
            <form action="" method="get">
                <label for="nom-get">Nom :</label>
                <input type="text" id="nom-get" name="nom" placeholder="Votre nom" required>

                <label for="age-get">Âge :</label>
                <input type="number" id="age-get" name="age" placeholder="Votre âge" required>

                <input type="submit" value="Envoyer">
                <input type="reset" value="Annuler">
            </form>
        </div>

        <!-- Formulaire utilisant POST -->
        <div class="form-container">
            <h2>Version POST</h2>
            <form action="" method="post">
                <label for="nom-post">Nom :</label>
                <input type="text" id="nom-post" name="nom" placeholder="Votre nom" required>

                <label for="age-post">Âge :</label>
                <input type="number" id="age-post" name="age" placeholder="Votre âge" required>

                <input type="submit" value="Envoyer">
                <input type="reset" value="Annuler">
            </form>
        </div>
    </div>

    <?php
    // Affichage des données GET
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nom'], $_GET['age'])) {
        echo '<div class="result">';
        echo '<strong>Données envoyées via GET :</strong><br>';
        echo 'Nom : ' . htmlspecialchars($_GET['nom']) . '<br>';
        echo 'Âge : ' . htmlspecialchars($_GET['age']) . ' ans';
        echo '</div>';
    }

    // Affichage des données POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nom'], $_POST['age'])) {
        echo '<div class="result">';
        echo '<strong>Données envoyées via POST :</strong><br>';
        echo 'Nom : ' . htmlspecialchars($_POST['nom']) . '<br>';
        echo 'Âge : ' . htmlspecialchars($_POST['age']) . ' ans';
        echo '</div>';
    }
    ?>

</body>
</html>
