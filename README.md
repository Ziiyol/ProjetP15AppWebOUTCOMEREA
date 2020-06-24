Bienvenue sur ce projet qui a pour but d'afficher les données récoltées par OutComeRea par le biais d'une application web.


Pour vous aider à connecter les bases de données contenant les données des patients et les données des comptes des utilisateurs, nous avons fait deux scripts PHP permettant de modifier les fichiers qui sont concernés. InstallerEnv.php permet d'installer une unique base de données et InstallerEnv2.php permet d'en installer deux.
Nous nous sommes aidés de cette page pour mettre en place nos scripts : https://symfony.com/doc/current/doctrine/multiple_entity_managers.html .

Pour installer une base de données unique il suffit de faire dans votre terminal : " php InstallerEnv.php *chemin .env* *nom d'utilisateur MySql* *mot de passe de l'utilisateur* *adresse IP de MySql * *port d'écoute de MySql* *Nom de la base de données* "
Exemple : php InstallerEnv.php .env Vincent 458786popl localhost 3652 ErheaData
Ceci fait vous pouvez commencer à utiliser l'application.

Pour installer deux bases de données, entrez dans votre terminal : " php InstallerEnv2.php *chemin .env* *nom d'utilisateur MySql* *mot de passe de l'utilisateur* *adresse IP de MySql * *port d'écoute de MySql* *Nom de la base de données n°1*  *nom d'utilisateur MySql* *mot de passe de l'utilisateur* *adresse IP de MySql * *port d'écoute de MySql* *Nom de la base de données n°2* "
Exemple :  php InstallerEnv2.php .env Vincent 458786popl localhost 3652 ErheaData Vincent 458786popl localhost 3652 ErheaCustomer
Il va de soit que de votre côté les deux bases de données ne seront peut-être pas sur le même serveur de bases de données.

Maintenant il faut modifier doctrine.yaml, qui se trouve dans config/packages, avec ce code :
doctrine:
    dbal:
        default_connection: default
        connections:
            default:
                # configure these for your database server
                url: '%env(resolve:DATABASE_URL)%'
                driver: 'pdo_mysql'
                server_version: '5.7'
                charset: utf8mb4
            customer:
                # configure these for your database server
                url: '%env(resolve:DATABASE_CUSTOMER_URL)%'
                driver: 'pdo_mysql'
                server_version: '5.7'
                charset: utf8mb4
    orm:
        default_entity_manager: default
        entity_managers:
            default:
                connection: default
                mappings:
                    Main:
                        is_bundle: false
                        type: annotation
                	dir: '%kernel.project_dir%/src/Entity'
                	prefix: 'App\Entity'
                	alias: Main
	   customer:
                connection: customer
                mappings:
                    Customer:
                        is_bundle: false
                        type: annotation
			dir: '%kernel.project_dir%/src/Entity'
                	prefix: 'App\Entity'
                	alias: Customer
Nous vous invitons à lire la page de la documentation de Symfony pour modifier les entités et les *reporitories* de la façon qu'il convient afin que l'application puisse lire les bonnes données.
