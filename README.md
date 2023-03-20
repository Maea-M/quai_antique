# Quai antique - Restaurant

Le projet "Quai Antique" est une application a réalisée pour l'Evaluation en Cours de Formation (ECF).
Le restaurateur souhaite avoir un site vitrine de son nouvel établissement afin d’améliorer sa visibilité et son chiffre d’affaires. Le chef Arnaud Michant souhaite des photographies de ses plats sur la page d’accueil. Ces photos doivent pouvoir être ajoutée, modifiée ou supprimée sur la plateforme d’administration. La carte du restaurant sera visible sur une page dédiée. Les horaires d’ouverture seront affichés dans le pied de chaque page.

## Déploiement en local
Pour le back :
- PHP 8.2
- Composer 2.5
- Symfony 6.2
- MySQL 8.0
- Nodejs
- npm

Pour le front :
- HTML 5
- CSS 3
- Bootsrap 5.3
- Javascript

Pour la gestion de la base de données:
- Heidisql

## Vérifier les pré-requis
Symfony CLI intègre une commande permettant de vérifier que votre ordinateur a les pré-requis nécessaires pour exécuter une application Symfony.

Dans le terminal de commande, copier-coller cette instruction:

`symfony check:requirements`

## Cloner l'application
Dans le terminal de commande, copier-coller cette instruction

`git clone https://github.com/Maea-M/quai_antique.git`

Une fois le projet cloné, sur le terminal, saisir la commande suivante:
`cd quai_antique`
`code .`
pour ouvrir avec VS Code

## Vérifier l'environnement de développement
Copier-coller les demandes ci-dessous
`composer install`
`npm install`

Pour lancer le serveur de Symfony
`symfony server:start`
Ouvrez votre navigateur et accédez à la page : http://localhost:8000 

## Lancer l'interface pour la base de données
Lancer Heidisql ou un système similaire

## Créer la base de données
Dans le terminal de VS code, vous pouvez saisir la commande suivante:
`php bin/console doctrine:database:create`

puis migrer le projet avec la commande suivante:
`php bin/console doctrine:migrations:migrate`

## Lancer l'interface pour la base de données
Lancer Heidisql ou un système similaire

## Site de l'application
https://resto-quaiantique.herokuapp.com/
