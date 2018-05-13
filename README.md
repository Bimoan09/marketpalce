This is simple e-comerce , technology used

1. Backend side : PHP framework (Laravel)
2. Frontend side: Javascript Framework (Vue.js)
3. Database : MYSQL
4. Email Provider : Mailtrap




# How to use


Clone repo

	git clone https://github.com/Bimoan09/marketpalce.git
Install the composer dependencies

	composer install
	
Save .env.example as .env and put your database credentials

Set application key

	php artisan key:generate        

And Migrate with

`php artisan migrate`

Install node dependencies

`npm install`

Run watcher

`npm run watch`


**you must conect with internet, because disqus comentar plugin is must connect internet**

on your file **.env** this is mail setting ,,

* MAIL_DRIVER=smtp
* MAIL_HOST=smtp.gmail.com
* MAIL_PORT=587
* MAIL_USERNAME={your email username}
* MAIL_PASSWORD={your email password}
* MAIL_ENCRYPTION=tls


open your **app/config/mail.php** , change seeting like this

* 'driver' => env('MAIL_DRIVER', 'smtp'),
* 'host' => env('MAIL_HOST', 'smtp.gmail.com'),
* 'port' => env('MAIL_PORT', 587),
