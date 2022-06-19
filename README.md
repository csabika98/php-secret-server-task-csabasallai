# PHP Secret Server 

A simple web application that saves & fetches your secrets using API.  
You can share your secrets using the random generated URL.

## Used technologies
PHP 8.1.6  
Laravel 9.10  
MySQL (MariaDB)


## Installation
In order to install it you will need MySQL/PHP Composer, you can use Wampserver or XAMPP (or you can use the Laravel Docker Container -> https://laravel.com/docs/9.x/installation)
1. Clone the repository  
2. run this command
```
cp .env.example .env  
```  
4. Change your MySQL credentials in the .env    
5. run this command  
```  
php artisan key:generate
```
4. Run the DB migration 
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
v0.4 -> in progress (restrict)
## Images
![alt text](https://i.imgur.com/qsy9XS7.png)
![alt text](https://i.imgur.com/R4c5uqe.png)
![alt text](https://i.imgur.com/Mr7iGqZ.png)
![alt text](https://i.imgur.com/X14DdiU.png)
