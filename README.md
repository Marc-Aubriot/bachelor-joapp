## requirements
Nodes.js, Composer, PHP & MYSQL / XAMPP,

## setup
Clone repository then, in project root run cmd: 
1- composer install
2- composer update
3- npm install
4- php artisan migrate
5- run sql file in /database/

## localhost
run cmd:
1- php artisan serve
2- npm run dev

if this isnt working check: vite.config.js and utilities.js, comment prod / uncomment local then run cmd: npm run build

## prod build
change file:
1- vite.config.js => uncomment prod, comment local
2- ressources/js/utilities.js => uncomment prod, comment local
3- ticket_scanner.blade.php => uncomment prod, comment local
4- npm run build
5- push to main branch
6- modifier le .htaccess pour qu'il pointe directement sur /public/ (copier le .env et le htaccess de la dernière version)
7- run command in console : app:init-permissions
8- run command in console : app:give-role USERID 'admin'