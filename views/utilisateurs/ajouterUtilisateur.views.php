<?php ob_start() ?>

<form method="POST" action="<?= URL ?>utilisateurs/ajouterValidation" >
  <fieldset>
    <div class="form-group">
      <label for="nom" class="form-label mt-4">Nom:</label>
      <input type="text" class="form-control" id="nom"name="nom" placeholder="Entrer le nom de l'utilisateur">
    </div>
    <div class="form-group">
      <label for="prenom" class="form-label mt-4">Prenom:</label>
      <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer le prenom de l'utilisateur">
    </div>
    
    <button type="submit" class="btn btn-primary mt-4">Ajouter</button>
  </fieldset>
</form>

<?php $content = ob_get_clean();
$titre = "Ajouter un utilisateur";
require "views/template.views.php"; ?>
