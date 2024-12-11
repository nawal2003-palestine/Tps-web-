<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Informations Étudiant</title>
</head>
<body>
    <h1>Informations personnelles</h1>
    <form action="tp3aff.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label>Sexe :</label>
        <input type="radio" id="f" name="sexe" value="F" required>
        <label for="f">F</label>
        <input type="radio" id="m" name="sexe" value="M" required>
        <label for="m">M</label><br><br>

        <label>Langues :</label>
        <input type="checkbox" id="ar" name="langues[]" value="Ar">
        <label for="ar">Ar</label>
        <input type="checkbox" id="fr" name="langues[]" value="Fr">
        <label for="fr">Fr</label>
        <input type="checkbox" id="esp" name="langues[]" value="Esp">
        <label for="esp">Esp</label>
        <input type="checkbox" id="ang" name="langues[]" value="Ang">
        <label for="ang">Ang</label><br><br>

        <label for="specialite">Spécialité :</label>
        <select id="specialite" name="specialite" required>
            <option value="Informatique">Informatique</option>
            <option value="Management">Management</option>
            <option value="Télécommunication">Télécommunication</option>
            <option value="Logistique">Logistique</option>
        </select><br><br>

        <label for="adresse">Adresse :</label><br>
        <textarea id="adresse" name="adresse" rows="4" cols="50" required>votre adresse ?</textarea><br><br>

        <button type="submit">Envoyer</button>
        <button type="reset">Annuler</button>
    </form>
</body>
</html>
