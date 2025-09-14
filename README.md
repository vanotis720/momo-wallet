<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:


# Portefeuille Mobile (walletLaravel)

Ce projet est une application de portefeuille mobile développée avec Laravel. Elle permet aux utilisateurs de gérer leurs transactions, consulter leur solde, et effectuer des opérations de dépôt et de retrait de fonds. Ce projet est conçu pour servir de base à une solution de gestion de portefeuille électronique, adaptée à l'écosystème mobile money.

## Fonctionnalités principales

- Création et gestion de comptes utilisateurs
- Consultation du solde en temps réel
- Historique des transactions (dépôts, retraits, transferts)
- Sécurité et authentification des utilisateurs
- Support multi-devises et multi-pays

## Prérequis

- PHP >= 8.1
- Composer
- MySQL ou autre base de données compatible
- Node.js et npm (pour les assets front-end)

## Installation

1. Cloner le dépôt :
	```bash
	git clone https://github.com/vanotis720/momo-wallet.git
	cd walletLaravel
	```
2. Installer les dépendances PHP :
	```bash
	composer install
	```
3. Copier le fichier d'environnement et configurer vos variables :
	```bash
	cp .env.example .env
	# Modifier .env selon vos besoins
	```
4. Générer la clé d'application :
	```bash
	php artisan key:generate
	```
5. Exécuter les migrations :
	```bash
	php artisan migrate
	```
6. Installer les dépendances front-end :
	```bash
	npm install && npm run build
	```
7. Lancer le serveur de développement :
	```bash
	php artisan serve
	```

## Tests

Pour exécuter les tests :
```bash
php artisan test
```

## Contribution

Les contributions sont les bienvenues ! Veuillez ouvrir une issue ou soumettre une pull request.

## Licence

Ce projet est sous licence MIT.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
