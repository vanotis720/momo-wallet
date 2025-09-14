
Ceci est un répertoire de test pour les intégrations des mobiles money destiné à YouTube.

# Portefeuille Mobile (walletLaravel)

## Mise en place rapide

1. Clonez le projet :
	```bash
	git clone https://github.com/vanotis720/momo-wallet.git
	cd walletLaravel
	```
2. Installez les dépendances :
	```bash
	composer install
	npm install && npm run build
	```
3. Copiez le fichier d'environnement :
	```bash
	cp .env.example .env
	# Modifiez .env selon vos besoins
	```
4. Générez la clé et lancez les migrations :
	```bash
	php artisan key:generate
	php artisan migrate
	```
5. Lancez le serveur :
	```bash
	php artisan serve
	```
