# Webservice d'exemple

## Installation 

### Récupérez les sources 

git clone https://github.com/RumblingBee/back-webservice-exercice.git


### Installation des dépendances 

Installez composer: https://getcomposer.org/

Tapez ensuite la commande

composer install 

### Récupération de la base de donnée

Importer le CSV ou le dump de la base qui sont présents dans la racine du projet.

Ouvrir le fichier .env et modifier la ligne suivante:

DATABASE_URL=pgsql://votreNomUtilisateur:votre MDP@127.0.0.1:5432/yourDBName
