<?php 
require_once "controllers/utilisateurs.controller.php";

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

if(empty($_GET["page"])){
    require "views/accueil.views.php";
} else {
    $url = explode("/", $_GET["page"]);
    switch($url[0]){
        case "accueil":
            require "views/accueil.views.php";
            break;
        case "utilisateurs":
            //require "views/utilisateurs/utilisateurs.views.php";

            // $url= ["repas","voir","2"]
            // $url[0]= "accueil" , "repas"
            // $url[1]= "voir", "ajoute", "supprimer"
            // $url[2]= id du repas

            $userController = new UtilisateursController();
            if(empty($url[1])){
                $userController->afficherUtilisateurs();
            } else if($url[1] == "voir"){
                $userController->afficherUnUtilisateur($url[2]);
            } else if($url[1] == "ajouter"){
                $userController->ajouterUtilisateur();
            } else if($url[1] == "ajouterValidation"){
                $userController->ajouterUtilisateurValidation();
            } else if($url[1] == "modifier"){
                $userController->modifierUtilisateur($url[2]);
                //echo "modifier un utilisateur";
            } else if($url[1] == "supprimer"){
                echo "supprimer un utilisateur";
            }


            break;
        case "ordinateurs":
            require "views/ordinateurs.views.php";
            break;
        case "reservations":
            require "views/reservations.views.php";
            break;
    }
}