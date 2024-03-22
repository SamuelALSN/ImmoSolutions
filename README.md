![25182811_7061501](https://github.com/SamuelALSN/ImmoSolutions/assets/26574947/6d167d2b-27ee-473d-be82-75afa9d64349)
# Immosolutions

## Description du Projet

Site web de réservation de biens immobiliers. L'objectif principal est de permettre aux utilisateurs de rechercher, visualiser et réserver des propriétés disponibles à la location ou à l'achat.
## Fonctionnalités Principales

1. **Recherche de Logements :** Les utilisateurs peuvent effectuer une recherche en fonction de leur destination, de leurs dates de voyage, du nombre de voyageurs, etc.

2. **Visualisation des Annonces :** Les utilisateurs peuvent voir les détails des annonces, y compris des images, une description, le prix, les équipements, etc.

3. **Réservation de Logements :** Les utilisateurs peuvent réserver un logement en spécifiant leurs dates de séjour et en remplissant un formulaire de réservation.

4. **Gestion des Utilisateurs :** Les utilisateurs peuvent créer un compte, se connecter et gérer leurs informations personnelles ainsi que leurs réservations.

5. **Gestion des Annonces :** Les propriétaires peuvent ajouter, modifier et supprimer des annonces de logements, gérer les disponibilités et les prix.

6. **Système de Paiement :** Intégration d'un système de paiement sécurisé pour traiter les transactions entre les voyageurs et les hôtes.
7. ** Administration du Site :** Les administrateurs peuvent ajouter, modifier et supprimer des biens immobiliers, gérer les utilisateurs et visualiser les réservations.

## Technologies Utilisées

- **Laravel :** Framework PHP
- **Vue.js :** Framework JavaScript pour le frontend interactif
- **MySQL :** Base de données relationnelle
- **Bootstrap :** Framework CSS pour le design responsive
- **Stripe API :** Intégration pour le système de paiement
- **Outils de Développement :** Composer, npm, Git, VS Code, Postman

## Installation

1. Clonez ce dépôt GitHub sur votre machine locale.
2. Assurez-vous d'avoir PHP, Composer et MySQL installés sur votre machine.
3. Naviguez jusqu'au répertoire du projet et exécutez `composer install` pour installer les dépendances PHP.
4. Copiez le fichier `.env.example` et renommez-le en `.env`, puis configurez les variables d'environnement nécessaires, telles que les paramètres de base de données et les clés d'API.
5. Générez une clé d'application Laravel en exécutant la commande `php artisan key:generate`.
6. Exécutez les migrations avec la commande `php artisan migrate` pour créer les tables de la base de données.
7. Démarrez le serveur avec `php artisan serve`.
8. Naviguez vers `http://localhost:8000` dans votre navigateur pour accéder au site.

## Contributions

Les contributions sous forme de pull requests sont les bienvenues. Pour les changements majeurs, veuillez d'abord ouvrir un ticket pour discuter de ce que vous aimeriez changer.

## Licence

Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.

---

N'oubliez pas d'adapter ce README en fonction des spécificités de votre projet Laravel, de son architecture, de ses fonctionnalités, etc.
