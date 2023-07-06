<form action="votre_controleur.php" method="POST">
    <input type="hidden" name="id" value="<?= $user->getId() ?>">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" value="<?= $user->getNom() ?>"><br>
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" value="<?= $user->getPrenom() ?>"><br>
    <button type="submit">Mettre à jour</button>
</form>