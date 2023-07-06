<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Gestion attribution d'ordinateur</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NAVBAR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarColor01">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active" href="#">Accueil
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ordinateur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Utilisateur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Réservation</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <h1>
        <?= $titre ?>
    </h1>

    <?= $content ?>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>