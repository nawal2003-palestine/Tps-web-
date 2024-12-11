<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permutation des Nombres</title>
</head>
<body>
    <h1>Permutation des Nombres</h1>
    <form method="post" action="">
        <label for="nombre1">Nombre 1 :</label>
        <input type="text" id="nombre1" name="nombre1" value="<?php echo isset($_POST['nombre2']) ? $_POST['nombre2'] : '5'; ?>"><br><br>
        
        <label for="nombre2">Nombre 2 :</label>
        <input type="text" id="nombre2" name="nombre2" value="<?php echo isset($_POST['nombre1']) ? $_POST['nombre1'] : '8'; ?>"><br><br>
        
        <button type="submit">Permuter</button>
        <button type="reset">Annuler</button>
    </form>
</body>
</html>
