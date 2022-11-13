## Projet 8 OpenClassrooms : ToDo & Co

## Auteur : Bara Ervin

# L'objectif de ce projet à été d'améliorer une application existante

## Utilisation de 
* Symfony 6.1
* PhpUnit
## Pré-requis 
    Git
    PHP 8.1
- Composer
- Un système de gestion de base de données

## Règles à respecter
-  Le nom des fichiers,des classes et des varialbes doivent être en camelCase
-  Le nom des routes doivent être en snake_case
-  Lorsqu'une fonctionnalité est ajoutée, lui affilier un test

## Architecture du projet
-  Le projet utilise le model MVC
-  Les templates de rendu visuel Twig sont stockées dans le dossier templates
-  ?? utile ??

## Mise en place du projet

### Etape 1 : Clonez ou téléchargez le repository GitHub grâce à la commande
    - git clone https://github.com/Ervinbara/Projet_8_B.git

### Etape 2 : Configuration des variables d'environnement
    - Configurer les variables d'environnement dans le fichier .env

## Installation des dépendances et création de la base de données

### Etape 1 : Installer les dépendances du projet avec la commande
    - composer install
### Etape 2 : Créez la base de données avec la commande :
    - php bin/console doctrine:database:create
### Etape 3 : Lancer la migration pour créer les tables dans la base de données avec la commande
    - php bin/console doctrine:migrations:migrate

## Pour lancer le serveur vous pouvez utiliser la commande
    - php -S localhost:8000

## Générer des fausses données (fixtures)

Les fixtures vont permettre d'initialiser la base avec un jeu de fausses données pour si besoin, tester l'application
Si vous souhaitez générer un jeu de fausses données basé sur la fixture présente dans le projet (AppFixtures.php) utilisez la commande suivante :
    - php bin/console doctrine:fixtures:load

## Test de l'application

Si vous souhaitez jouer l'intégralité des tests, il vous faut pour avoir lancé la fixture. 
Pour lancer les tests présent dans le répertoire /tests, exécuter la commande suivante : 
    - php bin/phpunit