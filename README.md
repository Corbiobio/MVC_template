# MVC_template

## temps total : 9h30

- ### Base de donnée : 30min

  - mise en place 30min

- ### Site : 6h

  - #### Connection : 1h

    - html login and logout : 30min
    - request login and logout : 30min

  - #### Insertion : 1h30

    - html : 30min
    - request : 1h

  - #### Suppression : 1h30

    - html : 30min
    - request : 1h

  - #### Modification : 2h
    - html : 1h
    - request : 1h

- ### Bug/Test : 3h

# Structure des fichiers :

```
MVC
    public/
        index.php
        style.css
        img/
    src/
        config/
            config.php
        Controllers/
            ModelController.php
        Models/
            Model.php
            ModelManager.php
        Views/
            404.php
            layout.php
            Page/
                index.php
        Router.php
        Route.php
        Helper.php
        Validator.php
    tests/
        ModelTest.php
```

## Etape 2 - Composer et l'autoloading

- Initialiser le dossier comme étant un projet composer

```
A faire si le fichier composer.json n'existe pas :
$ composer init
```

- Installer l'autoloader et crée les vendor

```shell
$ composer install
```

- Remplir le fichier composer avec la règle d'autoloading

```json
"autoload": {
    "psr-4": {
        "MVC\\": "src/"
    }
}
```

- Réinitialiser l'autoloader

```shell
composer dump-autoload
```

- Aller dans le dossier public

```
cd public
```

- lancer le projet

```
php -S localhost:8000
```

---

- lancer les tests unitaires

```
vendor\bin\phpunit ./tests
```
