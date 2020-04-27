# ICF Hungary Test Application

## Install
```
git clone git@github.com:defji/icf-test.git
cp .env.example .env  #set database settings
composer install 
npm install
npm run dev
php artisan migrate:fresh --seed
```
