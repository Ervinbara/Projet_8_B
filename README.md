Projet 8 OpenClassrooms : ToDo & Co

AUTHOR.... 
Badge symfony, code coverage ect ...

L'objectif de ce projet à été d'améliorer une applications existante.


Installation : 
1 ) Clonez ou téléchargez le repository GitHub :
    - git clone https://github.com/Ervinbara/Projet_8_B.git
2 ) Configuration des variables d'environnement
    - Mettre dans le .env, l'URL qui correspond à votre base de donnée.

Mise en place : 
1 ) Installer les dépendances du projet avec la commande :
    - composer install
2 ) Création de la base de donnée :
    - php bin/console doctrine:database:create
3 ) Créations des tables dans la base de donnée avec la commande :
    - php bin/console doctrine:migrations:migrate

MANQUE LA PHASE SUR LES FIXTURE ECT./...