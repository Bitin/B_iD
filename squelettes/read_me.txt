##########
CC Bitin.fr
www.bitin.fr
##########
##########
##########
Squelette B_iD par Bitin.fr
Pour Spip avec Boostrap 3.1.1
__________
__________
__________
Bitin.fr: http://bitin.fr
Spip: http://spip.net
Bootstrap: http://getbootstrap.com
__________
__________
__________
__________
##########
Les plugins nécessaires
cfg
cextras
saisies
Notations
Mes Favoris
Menus
Sélection d'article
Polyhiérarchie
Comments
Formulaire de contact avancé
Pages
Agenda & Calendrier mini
Couleur rubrique
Social Tags
Couteau Suisse & Spip Bonux
__________
__________
Les plugins conseillés
Mots ethniques
Polyhiérarchie
Acces restreint
Gravatar
Facteur
Uploadify
__________
__________
##########
Page d'accueil - sommaire.html
__________
A modifier dans carousel/une_carousel.html
Carousel #1: articles sélectionnés avec le mot clé "focus"
__________
A modifier dans content/sommaire_content.html
Carousel #2: articles sélectionnés à la racine du site (rubriques) avec le plugin sélection d'articles
Articles: 4 derniers articles de la rubrique sélectionnée avec le mot clé 'focus"
##########
Rubriques - rubrique.html
Utilisation du plugin couleur de rubrique - il faut sélectionner une couleur pour chaque rubrique dans la partie privée du site.
Utilisation possible du plugin Accès Restreint qui renvoie alors sur la page inc/acces_restreint.html
Si mot-clé "portail" associé à la rubrique, elle s'affiche en mode portail
Si mot-clé "Galerie" associé à la rubrique, elle s'affiche en mode galerie
Sinon, elle s'affiche normalement
D'autres boucles conditionnelles peuvent au besoin être ajoutées dans rubrique.html
__________
3 types de rubriques:
Normales: liste les derniers articles publiés dans la rubrique et sa branche (sous rubriques) => content/rubrique_content.html
Portail: liste les derniers articles issus des sites syndiqués dans la rubrique et sa branche (sous rubriques) => content/portail_content.html
Galerie: liste les derniers articles publiés sous forme de thumbnails réalisés avec les logos d'articles => content/galerie_content.html