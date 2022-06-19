# PHP Secret Server 

A simple web application that saves & fetches your secrets using API.  
You can share your secrets using the random generated URL.

## Used technologies
PHP 8.1.6  
Laravel 9.10  
MySQL (MariaDB)


## Installation
In order to install it locally on your computer, you will need MySQL/PHP Composer (or you can use the Laravel Docker Container -> https://laravel.com/docs/9.x/installation)
1. Clone the repository 
2. Change your MySQL credentials in the .env  
3. Run the DB migration 
```
php artisan migrate
```  
3. To run the server:
```
php artisan serve
```

## Usage

1. Find the create link on the landing page or visit http://127.0.0.1:8000/new {}  
2. Type your secret, you will get your hash key which you can use to see your secret  
3. To access your secrets http://127.0.0.1:8000/api/secret/{hash} 
## Changelog
v0.1 -> Initial version  (2022.06.18)  
v0.2 -> Creating the DB migration script, model then controller  (2022.06.19)  
v0.3 -> Creating the POST & GET API routes (for fetch and create )  (2022.06.19)  
v0.4 ->   

