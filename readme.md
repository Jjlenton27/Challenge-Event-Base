If there is no .env file in the main project folder (not .env.example) copy .env.example and rename to .env

composer install

npm install
npm run build

if those two have errors run in power shell:
Set-ExecutionPolicy -Scope CurrentUser -ExecutionPolicy Unrestricted

php artisan key:generate
php artisan migrate
