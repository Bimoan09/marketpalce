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

Install node dependencies, recomend the minimal version NPM is v9.5.0

`npm install`

Run watcher

`npm run watch`

run the laravel server

	php artisan serve

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


![1](https://user-images.githubusercontent.com/35213106/41546081-e8e7fdce-7346-11e8-8d01-e821aa6f9781.png)
![2](https://user-images.githubusercontent.com/35213106/41546177-2b9e8ea8-7347-11e8-9470-979ab5e73c03.png)
![3](https://user-images.githubusercontent.com/35213106/41546178-2d68a4da-7347-11e8-80c3-d6e7437b30bf.png)
![5](https://user-images.githubusercontent.com/35213106/41546185-31e1870c-7347-11e8-801b-ef71fd157c28.png)
![6](https://user-images.githubusercontent.com/35213106/41546205-40b6adb6-7347-11e8-91f4-ead415699678.png)
![7](https://user-images.githubusercontent.com/35213106/41546206-40f53086-7347-11e8-832a-784fc35cb24c.png)
![8](https://user-images.githubusercontent.com/35213106/41546207-412b823a-7347-11e8-8074-47bafa262eaa.png)
![9](https://user-images.githubusercontent.com/35213106/41546208-41642752-7347-11e8-8666-0b484cf30daa.png)
![11](https://user-images.githubusercontent.com/35213106/41546209-41c577f0-7347-11e8-8534-2f3391a22ddb.png)
![12](https://user-images.githubusercontent.com/35213106/41546210-420408e4-7347-11e8-9561-0657a8b1ae0c.png)
![13](https://user-images.githubusercontent.com/35213106/41546212-42ddb59e-7347-11e8-8ee0-8ca2cf9de972.png)
![14](https://user-images.githubusercontent.com/35213106/41546213-4329b714-7347-11e8-8b95-cff6d8f2a73c.png)
![15](https://user-images.githubusercontent.com/35213106/41546215-43b7e73c-7347-11e8-8c02-20f056dec8ff.png)
![16](https://user-images.githubusercontent.com/35213106/41546217-43f36a78-7347-11e8-850f-c2a39ab30630.png)

