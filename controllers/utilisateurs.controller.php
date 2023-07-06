<?php
 require_once "models/UtilisateursManager.class.php";

 class UtilisateursController{
    private $utilisateursManager;

    public function __construct()
    {
        $this->utilisateursManager = new UtilisateursManager;
    }

    public function afficherUtilisateurs(){
        $utilisateurs = $this->utilisateursManager->getAllUsers();
        require "views/utilisateurs/utilisateurs.views.php";
    }

    public function afficherUnUtilisateur($id){
        $utilisateurs = $this->utilisateursManager->getOneUser($id);
        require "views/utilisateurs/unUtilisateur.views.php";
    }

     public function ajouterUtilisateur(){
        require "views/utilisateurs/ajouterUtilisateur.views.php";
    }
    
    public function ajouterUtilisateurValidation(){
        $this->utilisateursManager->addUser($_POST['nom'], $_POST['prenom']);
        header('Location: ' . URL . "utilisateurs");
    }
    
    public function modifierUtilisateur(){
        require "views/utilisateurs/modifierUtilisateur.views.php";
    }

    /*public function modifierUtilisateurValidation(){
        $utilisateurs = $this->utilisateursManager->updateUser($_POST['id'], $_POST['nom'], $_POST['prenom']);
        header('Location: ' . URL . "utilisateurs");
    }

    public function supprimerUtilisateur($id){
        $utilisateurs = $this->utilisateursManager->deleteUsers($id);
        require "views/utilisateurs.views.php";
    } */
 }