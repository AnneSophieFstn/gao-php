<?php ob_start(); ?>

<?php $content = ob_get_clean();
$titre = "Reservations";
require "views/template.views.php"; ?>