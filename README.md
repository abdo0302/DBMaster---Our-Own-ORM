# 🛠️ ORM Basique en PHP et MySQL

Ce projet est un ORM (Object-Relational Mapping) basique développé en **PHP 8** pour **DBMaster Inc.**. L'objectif est de permettre une interaction simple et transparente avec les bases de données MySQL en utilisant des objets PHP pour créer, lire, mettre à jour et supprimer des enregistrements.

## 🎯 Objectifs du Projet
- Permettre aux développeurs d'interagir avec la base de données via des objets PHP.
- Automatiser la création et la mise à jour des tables de base de données.
- Gérer dynamiquement les contraintes uniques.
- Assurer une manipulation fluide des objets de base de données.

## ⚙️ Fonctionnalités Principales
### Gestion des Objets et des Tables
- **CRUD** : Créer, Lire, Mettre à jour, et Supprimer des enregistrements via des objets PHP.
- **Recherche** : Trouver des enregistrements par identifiant ou autres critères.

### Gestion des Contraintes Uniques
- Définir des contraintes uniques sur les attributs des classes PHP.
- Vérifier et appliquer les contraintes lors de la création et la mise à jour d'enregistrements.

### Manipulation Dynamique des Schémas (Bonus)
- Créer automatiquement des tables de base de données à partir des classes.
- Mettre à jour les schémas lorsque les classes sont modifiées.
- Gérer les ajouts, modifications, et suppressions de colonnes.

## 📁 Structure du Projet
Voici les fichiers inclus dans le projet :
- **Database.php** : Gère la connexion à la base de données.
- **ORMInterface.php** : Interface définissant les méthodes de base de l'ORM.
- **ORM.php** : Implémentation de l'ORM permettant la gestion des objets et des tables.
- **Product.php** : Exemple de classe représentant un produit dans la base de données.
- **Config ou env** : Contient les paramètres de configuration de la base de données.
- **test-create.php** : Script pour tester la création d'objets.
- **test-update.php** : Script pour tester la mise à jour d'objets.
- **test-read.php** : Script pour tester la lecture d'objets.
- **test-delete.php** : Script pour tester la suppression d'objets.

## 🚀 Installation

### Prérequis :
- PHP 8.x
- MySQL
- Apache

### Étapes d'installation :

1. **Cloner le dépôt** :
   ```bash
   https://github.com/abdo0302/DBMaster---Our-Own-ORM.git
   cd ORM-PHP
