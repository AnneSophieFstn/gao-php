<?php ob_start(); ?>

<?php $content = ob_get_clean();
$titre = "Ordinateurs";
require "views/template.views.php"; ?>