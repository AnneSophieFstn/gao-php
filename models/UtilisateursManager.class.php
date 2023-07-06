<?php
require_once "core/Model.php";
require_once "utilisateurs.model.php";

class UtilisateursManager extends Model{

    public function getAllUsers(){
        $conn = $this->getBdd();
        $result = null;

        if($conn){
            $sql = "SELECT * FROM client ORDER BY id DESC";
            $resource = $conn->query($sql);
            if($resource){
                $usersData = $resource->fetchAll(PDO::FETCH_ASSOC);

                foreach ($usersData as $userData) {
                    $user = new Utilisateurs($userData['id'], $userData['nom'], $userData['prenom']);
                    $result[] = $user;
                }
            }
        }

        return $result;
    }

    public function getOneUser($id){

        $users = $this->getAllUsers(); // Récupère tous les utilisateurs à partir de la variable $users

        foreach ($users as $user) {
            if ($user->getId() === $id) { // Comparaison de l'ID de l'utilisateur avec l'ID donné
                return $user; // Retourne l'utilisateur correspondant
            }
        }

        return null;
        
    }

    public function addUser($nom, $prenom){
        $conn = $this->getBdd();
        $success = false;

        if($conn){
            $sql = "INSERT INTO client (nom, prenom) values (:nom, :prenom)";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
            $stmt->bindValue(':prenom', $prenom, PDO::PARAM_STR);
            $success = $stmt->execute();
        }

        return $success;
    }

    public function updateUser($id, $nom, $prenom){
        $conn = $this->getBdd();
        $success = false;

        if($conn){
            $sql = "UPDATE client SET nom = :nom, prenom = :prenom WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
            $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $success = $stmt->execute();
        }

        return $success;
    }


}