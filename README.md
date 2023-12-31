# Gestion d'attribution d'ordinateurs

## Description

Créer une application sécurisée qui permet de gérer l'attribution des postes informatiques aux visiteurs d'un centre culturel sur les horaires d'ouverture.

## Fonctionnalités

- En tant qu'administrateur, je doit pouvoir se connecter à une interface sécurisée.
- En tant qu'administrateur, je doit pouvoir créer | modifier | supprimer un utilisateur.
- En tant qu'administrateur, je doit pouvoir créer | modifier | supprimer un ordinateur.
- En tant qu'administrateur, je doit pouvoir attribuer un ordinateur à un utilisateur à une date et sur un créneau horaire.
- En tant qu'administrateur, je doit pouvoir voir toutes les attributions.
- En tant qu'administrateur, je doit pouvoir supprimer une attribution.

## Sécurité

L'administrateur devra **obligatoirement** se connecter pour accéder à l'application.
Un token lui sera attribué sous un temps valide.

## Technologies

**Projet:**

- PHP // HTML // CSS

**Base de données:**

- MySQL

## Exécuter le projet

Créer votre base de données.

1. Dans le fichier config/datapase.php
   $ Modifier les différents elements avec vos propres configurations.
      
      $configDB = [
         "db_host" => "NAME HOST",
         "db_name" => "NAME DATABASE",
         "db_user" => "USER",
         "db_password" => "PASSWORD"
      ];

      Assurer vous que la base de données correspond au projet.

2. Lancer le projet