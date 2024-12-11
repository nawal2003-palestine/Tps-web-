<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['date'];
    $nombre = (int) $_POST['nombre'];
    $produits = $_POST['produits'];

    // Tri des produits par quantité achetée (croissant)
    usort($produits, function ($a, $b) {
        return $a['quantite'] <=> $b['quantite'];
    });
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des produits</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        .rouge {
            background-color: red;
        }
        .vert {
            background-color: green;
            color: white;
        }
        .bleu {
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Liste des produits</h1>
    <p><strong>Date d'achat :</strong> <?php echo $date; ?></p>
    <p><strong>Nombre de produits :</strong> <?php echo $nombre; ?></p>

    <table>
        <thead>
            <tr>
                <th>Référence</th>
                <th>Désignation</th>
                <th>Prix unitaire</th>
                <th>Quantité achetée</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $totalPrix = 0;
            $totalQuantite = 0;

            foreach ($produits as $produit) {
                $classe = '';
                if ($produit['quantite'] <= 2) {
                    $classe = 'rouge';
                } elseif ($produit['quantite'] >= 10) {
                    $classe = 'vert';
                } else {
                    $classe = 'bleu';
                }

                $totalPrix += $produit['prix'] * $produit['quantite'];
                $totalQuantite += $produit['quantite'];
                ?>
                <tr class="<?php echo $classe; ?>">
                    <td><?php echo htmlspecialchars($produit['ref']); ?></td>
                    <td><?php echo htmlspecialchars($produit['des']); ?></td>
                    <td><?php echo htmlspecialchars($produit['prix']); ?> DH</td>
                    <td><?php echo htmlspecialchars($produit['quantite']); ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2"><strong>Total</strong></td>
                <td><strong><?php echo $totalPrix; ?> DH</strong></td>
                <td><strong><?php echo $totalQuantite; ?></strong></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
