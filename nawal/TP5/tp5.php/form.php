<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['date'];
    $nombre = (int) $_POST['nombre'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire des produits</title>
</head>
<body>
    <h1>Saisie des produits</h1>
    <form action="affichage.php" method="post">
        <input type="hidden" name="date" value="<?php echo $date; ?>">
        <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">

        <?php for ($i = 1; $i <= $nombre; $i++): ?>
            <fieldset>
                <legend>Produit <?php echo $i; ?></legend>
                <label for="ref<?php echo $i; ?>">Référence :</label>
                <input type="text" id="ref<?php echo $i; ?>" name="produits[<?php echo $i; ?>][ref]" required><br><br>

                <label for="des<?php echo $i; ?>">Désignation :</label>
                <input type="text" id="des<?php echo $i; ?>" name="produits[<?php echo $i; ?>][des]" required><br><br>

                <label for="prix<?php echo $i; ?>">Prix unitaire :</label>
                <input type="number" id="prix<?php echo $i; ?>" name="produits[<?php echo $i; ?>][prix]" min="0" step="0.01" required><br><br>

                <label for="quantite<?php echo $i; ?>">Quantité achetée :</label>
                <input type="number" id="quantite<?php echo $i; ?>" name="produits[<?php echo $i; ?>][quantite]" min="1" required><br><br>
            </fieldset>
        <?php endfor; ?>

        <button type="submit">Envoyer</button>
        <button type="reset">Annuler</button>
    </form>
</body>
</html>
