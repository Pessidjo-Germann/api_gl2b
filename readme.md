# API_EN_PHP
Une api qui a pour but de récupérer la liste des demandes de services

# DESIGN PATTERN CHOISI EST: MVC
Pour ceci j'utilise de Design Pattern MVC pour:\
**Modele* \
**Vue*  \
**Controlleur*

# COMPOSITION DU REPO
    -Un fichier config.php qui a pour rôle de nous connecter à notre base de donnée
    -Un fichier index.php qui est le point d'entrée de notre api
    -Un dossier Controler qui contient la class DemandeControler
    -Un dossier modele qui contient la class DemandeModel de notre api qui contient la requête

# GUIDE D'UTILISATION

Une fois que le projet a été cloné, il faut mettre le dossier API dans le dossier htdocs de Xampp ou alors dans le dossier www de wamp.

Ensuite pour tester il faut utiliser postman, ainsi cet api n'a qu'un seul point d'entrée(endpoint) qui est : 
    ```
     localhost/api2/api.php 
    ```

Une autre version de cet api avec sans le design pattern MVC est:
    *[API SANS MVC](https://github.com/Pessidjo-Germann/api-gl2a)

**Pessidjo Germann**

