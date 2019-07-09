**ATTENTION :** Ce projet est fait pour Symfony **3.4** !  
Pas la version 3.3, ni la version 4.x.


# OCPlatform
Code source de la plateforme d'annonce construite grâce au [MOOC OpenClassrooms](https://openclassrooms.com/fr/courses/3619856-developpez-votre-site-web-avec-le-framework-symfony).

# Installation
## 1. Récupérer le code
Vous avez deux solutions pour le faire :

1. Via Git, en clonant ce dépôt ;
2. Via le téléchargement du code source en une archive ZIP, à cette adresse : https://github.com/FuturInformatique/mooc-symfony3/archive/master.zip

## 2. Définir vos paramètres d'application
Pour ne pas qu'on se partage tous nos mots de passe, le fichier `app/config/parameters.yml` est ignoré dans ce dépôt.  
A la place, vous avez le fichier `parameters.yml.dist` que vous devez renommer (enlevez le `.dist`) et modifier si besoin (je n'ai pas modifié les paramètres par défaut, donc normalement ce n'est pas nécessaire).

## 3. Télécharger les vendors
Avec Composer bien évidemment :  
```php composer.phar install```

PS : Si vous avez une erreur du type :
```
[RuntimeException]                                                         
  An error occurred when executing the "'cache:clear --no-warmup'" command:  
                                                                             
  Could not open input file: app/console
```
-> essayez de créer manuellement le dossier "var" à la racine du projet, et relancer la commande composer.
  
## 4. Lancer le serveur local
Depuis la console, placez-vous dans le répertoire du projet, et tapez la commande :  
```php bin/console server:run```

## 5. Accéder à l'interface
La commande précédente vous indique l'adresse d'accès à l'interface.  
Normalement, cela devrait être ```http://127.0.0.1:8000```

## 6. Troubleshooting

Si vous n'arrivez pas à éxecuter le code, ou que vous avez des erreurs (de composer, ou de l'interface) :  
cela vient de **votre** côté.  

Tout fonctionne bien sur ma machine locale (ubuntu 18.04), en clonant le projet et en l'installant comme décrit ci-dessus.  

Si vous êtes dans ce cas là :  
- merci de ne pas mettre une note de 0 avec un commentaire du type "Ca marche pas lol" (oui, j'ai déjà eu le cas...)
- si vous ne voulez pas faire ce qu'il faut pour que ca tourne chez vous (ce que je peux comprendre, j'ai bien assez galéré pour adapté le cours en Symfony 3.4 depuis qu'il a été partiellement mixé avec du Symfony4), alors notez en vous basant sur les sources et le travail effectué. Merci.

**Bonne correction, et merci pour votre temps :)**
