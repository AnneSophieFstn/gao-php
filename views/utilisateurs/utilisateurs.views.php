<?php ob_start(); 

require_once "models/UtilisateursManager.class.php";
$utilisateursManager = new UtilisateursManager;
$users = $utilisateursManager->getAllUsers();
?>

<table class="table table-hover text-center align-middle">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <!-- <?php var_dump($users) ?> -->

  <?php foreach($users as $user) :?>
    <tr class="table-active">
      <th scope="row"><?= $user->getNom() ?></th>
      <td><?= $user->getPrenom() ?></td>
      <td>
        <button type="button" class="btn btn-warning">Modifier</button>
        <button type="button" class="btn btn-danger">Supprimer</button>
      </td>
    </tr>

    <?php endforeach;  ?>
  </tbody>
</table>

<?php $content = ob_get_clean();
$titre = "Utilisateurs";
require "views/template.views.php"; ?>