<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice Simple</title>
</head>
<body>
    <h1>Calculatrice Simple</h1>
    <form method="get" action="">
        <label for="nb1">Premier nombre :</label>
        <input type="number" id="nb1" name="nb1" required>
        <br><br>
        
        <label for="op">Opérateur :</label>
        <select id="op" name="op">
            <option value="add">Addition</option>
            <option value="sub">Soustraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select>
        <br><br>
        
        <label for="nb2">Deuxième nombre :</label>
        <input type="number" id="nb2" name="nb2" required>
        <br><br>
        
        <button type="submit">Calculer</button>
    </form>

    <?php
    // Vérification si les données sont passées dans l'URL
    if (isset($_GET['nb1'], $_GET['op'], $_GET['nb2'])) {
        $nb1 = (float)$_GET['nb1'];
        $nb2 = (float)$_GET['nb2'];
        $op = $_GET['op'];
        $resultat = '';

        // Traitement de l'opération
        switch ($op) {
            case 'add':
                $resultat = $nb1 + $nb2;
                $operation = "la somme";
                break;
            case 'sub':
                $resultat = $nb1 - $nb2;
                $operation = "la différence";
                break;
            case 'mul':
                $resultat = $nb1 * $nb2;
                $operation = "le produit";
                break;
            case 'div':
                if ($nb2 != 0) {
                    $resultat = $nb1 / $nb2;
                    $operation = "le quotient";
                } else {
                    $resultat = "Erreur : division par zéro!";
                }
                break;
            default:
                $resultat = "Opération invalide.";
                break;
        }

        // Affichage du résultat
        if (is_numeric($resultat)) {
            echo "<p>Résultat : $operation de $nb1 et $nb2 est : <strong>$resultat</strong></p>";
        } else {
            echo "<p><strong>$resultat</strong></p>";
        }
    }
    ?>
</body>
</html>

<?php
list($nbr1 , $nbr2 , $op)= array_value($_POST)
switch ($op) {
        
}
?>
