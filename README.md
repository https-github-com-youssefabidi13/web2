<<<<<<< HEAD
# Projet : Location d'objets entre particuliers  
## Introduction  
Nous avons pour objectif de réaliser une application web permettant la mise en location ou la location d'objets entre particuliers. Ce projet nous mettra dans une situation réelle de projet IT, avec des contraintes techniques, fonctionnelles et de temps. A la fin de ce projet, nous devons acquérir et/ou maîtriser les points suivants :  
- Comprendre les problématiques des clients et trouver les solutions adéquates; 
- Comprendre des besoins métiers spécifiques; 
- Utiliser des outils pour la gestion de notre projet ; 
- Utiliser des outils pour la gestion de notre développement: 
- Respecter les contraintes en termes de temps; 
## Terminologie 
- Client : une personne désirant louer un objet; 
- Partenaire : une personne qui a mis un objet en location ; 
- Agent : le programme permettant la gestion de location d'objet du début à la fin; 
- Administrateur : la personne assurant la gestion de tout le système. 
## Fonctionnalités 
- Ajouter une annonce : un partenaire peut ajouter une annonce en spécifiant la catégorie, la date de disponibilité, le prix de location par jour, la ville, le nombre de jours minimum de location; 
- Rechercher un objet : le client peut rechercher et visualiser les annonces par ville, par catégorie, par disponibilité, par prix, par note, par nombre de commentaires (positifs/négatifs); 
- Louer un objet : le client peut louer un objet pour une durée déterminée; 
- Noter et ajouter un commentaire : une fois la location de l'objet est terminée, le client et le partenaire ont une semaine pour noter et ajouter des commentaires : 
         - le client peut noter et ajouter un commentaire sur l'état de l'objet, sur la sympathie du propriétaire; 
         - le partenaire peut noter et ajouter un commentaire sur le client. 
## Contraintes 
- Un partenaire doit se connecter à son espace avant de déposer une annonce; 
- Un partenaire peut ajouter plusieurs annonces pour plusieurs objets; 
- Un partenaire peut avoir cinq annonces maximum en ligne simultanément; 
- Un objet appartient à une catégorie; 
- Le partenaire peut consulter et/ou retirer les anciennes annonces; 
- L'authentification est obligatoire pour faire la réservation d'un objet; 
- Avant la réservation, l'agent assure la communication entre le client et le partenaire; 
- Après la confirmation de la réservation, l'agent communique par e-mails les informations personnelles du client au partenaire; 
- Statut annonce en attente : une fois la demande de réservation est confirmée, l'annonce passe à en attente de confirmation et elle ne doit pas être visible aux autres clients; 
- Annonce particulière : certains objets peuvent être loués que certains jours de la semaine : 
       - Exemple : objet disponible que les lundis et les mardis du mois de mars; 
       - Une fois la location d'objet est finie : 
               - l'agent envoie des formulaires d'évaluation au client pour noter l'état de l'objet et la sympathie du partenaire; 
               - l'agent envoie des formulaires d'évaluation au partenaire pour noter la sympathie du client 





Travailler en équipe avec un partage de responsabilité pour amener le projet à bon terme.
![Image](https://user-images.githubusercontent.com/108522655/228102186-20cfb534-c35f-4f3c-87a8-c0e875050327.jpg)
![Image](https://user-images.githubusercontent.com/108522655/228102187-dafffffd-6a08-4f71-aa5e-7a155bbc5647.jpg)
=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> youssef
