Projet 8 OpenClassrooms : ToDo & Co

Auteur : Bara Ervin
Badge symfony, code coverage ect ...

L'objectif de ce projet à été d'améliorer une application existante.

Explication des différentes partie de l'application : 
Le projet utilise le model MVC
Utilisation de doctrine 
Où sont stocker les view, les repository, les controllers 
Pour avoir une base de travail, des fixture on été mise en place 

Faire une présentation du projet, comme si tu devais expliquer à un développeur nouveau sur le projet 

Les fixtures vont permettre d'initialiser la base avec un jeu de fausse donnée pour tester l'application
Fournir les commande, et expliquer à quoi elle servent dans le contexte du projet 
Comment on lance les test ?
Si vous voulez jouer les tests, il faut reinitialiser la base commande fixture

Utilisation de : 
- Symfony 6.1
- PhpUnit
Pré-requis : 
- PHP 8.1
- Composer
- Un système de gestion de base de données

Installation : 

Etape 1 : Clonez ou téléchargez le repository GitHub :
    - git clone https://github.com/Ervinbara/Projet_8_B.git

Etape 2 : Configuration des variables d'environnement
    - Remplir le fichier .env

Mise en place : 

Etape 1 : Installer les dépendances du projet avec la commande :
    - composer install
Etape 2 : Création de la base de donnée :
    - php bin/console doctrine:database:create
Etape 3 : Créations des tables dans la base de donnée avec la commande :
    - php bin/console doctrine:migrations:migrate

Commande pour les fixture : 
- php bin/console doctrine:fixtures:load
- php bin/console doctrine:fixtures:load --append