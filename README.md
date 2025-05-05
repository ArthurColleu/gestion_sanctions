# Projet : Projet de gestion de sanction

L’objectif de ce projet était de développer une application web permettant la gestion des sanctions d’élèves. Les fonctionnalités principales permettent aux utilisateurs connectés de : - créer une promotion, - importer un fichier CSV d’élèves, - attribuer une sanction à un élève.
Ce projet a pour but de faciliter la gestion disciplinaire dans un cadre scolaire.

# Sommaire

- [Installation](#installation)
- [Utilisation](#utilisation)

# Installation

Ouvrir un invite de commande, et lancer les commandes suivantes dans le répertoire où vous souhaitez mettre le projet.

```bash
git clone https://github.com/ArthurColleu/gestion_sanctions
cd gestion_sanctions
composer install
```

Ne pas oublier de lacer le script SQL de la base de donnée ('db_sanctions.sql') dans MySQL.

# Utilisation

À la source du projet, lancer cette commande pour accèder à l'application :

```bash
php -S localhost:8000 -t public
```
