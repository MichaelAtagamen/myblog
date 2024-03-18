## Laravel 8 Complete Blog

This repository is linked to [this youtube video](https://www.youtube.com/watch?v=HKJDLXsTr8A&t=4710s) where I show you how to create a complete blog in Laravel 8 using best practices.

•	Author: Code With Dary <br>
•	Twitter: [@codewithdary](https://twitter.com/codewithdary) <br>
•	Instagram: [@codewithdary](https://www.instagram.com/codewithdary/) <br>

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:codewithdary/laravel-8-complete-blog.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```

## Contributing
Do not hesitate to contribute to the project by adapting or adding features ! Bug reports or pull requests are welcome.

# Home Page

This is the landing page of our website dedicated to providing comprehensive information and updates about the Premier League. Our home page showcases the latest news, highlights, and insights about the English Premier League, along with a user-friendly interface to navigate through various sections of the website.
![image](https://github.com/MichaelAtagamen/myblog/assets/145561375/2c0c64b6-946a-4b3c-b0a4-142f79cfa8c6)
![image](https://github.com/MichaelAtagamen/myblog/assets/145561375/2a5ce361-d5fc-41f6-883c-c0125751b5f6)
![image](https://github.com/MichaelAtagamen/myblog/assets/145561375/cf4d7b91-5d02-4170-983d-412ac72723a6)
![image](https://github.com/MichaelAtagamen/myblog/assets/145561375/b602f5d5-e26c-40f4-9786-eb79a59e97c0)




