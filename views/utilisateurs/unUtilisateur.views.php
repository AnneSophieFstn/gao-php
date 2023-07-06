<?php ob_start(); ?>

<table class="table table-hover text-center align-middle">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <tr class="table-active">
      <th scope="row"><?= $utilisateurs->getNom() ?></th>
      <td><?= $utilisateurs->getPrenom() ?></td>
      <td>
        <button type="button" class="btn btn-warning">Modifier</button>
        <button type="button" class="btn btn-danger">Supprimer</button>
      </td>
    </tr>
  </tbody>
</table>

<?php $content = ob_get_clean();
$titre = "Un utilisateur";
require "views/template.views.php"; ?>