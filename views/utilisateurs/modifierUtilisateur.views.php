<?php ob_start() ?>

<form method="POST" action="<?= URL ?>utilisateurs/modifierValidation" >
  <fieldset>
    <div class="form-group">
        <input type="hidden" name="id" value="<?= $utilisateur->getId() ?>">
    </div>
    <div class="form-group">
      <label for="nom" class="form-label mt-4">Nom:</label>
      <input type="text" class="form-control" name="nom" value="<?= $utilisateur->getNom()?>">
    </div>
    <div class="form-group">
      <label for="prenom" class="form-label mt-4">Prenom:</label>
      <input type="text" class="form-control"  name="prenom" value="<?= $utilisateur->getPrenom()?>">
    </div>
    
    <button type="submit" class="btn btn-primary mt-4">Mettre à jour</button>
  </fieldset>
</form>

<?php $content = ob_get_clean();
$titre = "Modifier un utilisateur";
require "views/template.views.php"; ?>
