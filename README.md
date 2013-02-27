l4-starter-kit-with-twitterbootstrap-opauth
===========================================

Laravel 4 - Starter kit with Twitter Bootstrap (v 2.3.0) integration along with support of Social Authentication Provider like Facebook/Gmail/Twitter for Authentication using Opauth Composer Package.

Fork of a repo by [andrew13](https://github.com/andrew13/Laravel-4-Bootstrap) 

###How to install

	git clone git://github.com/opencubicles/l4-starter-kit-with-twitterbootstrap-opauth.git laravel
	cd laravelc
	curl -s http://getcomposer.org/installer | php
	php composer.phar install
	
Now that you have the Laravel 4 installed, you need to create a database for it and update the file ***app/config/database.php***

-----

###After that, run these commands to create and populate Users table and Social Authentication table:

	php artisan migrate:install
	php artisan migrate
	php artisan db:seed

-----

### Make sure app/storage is writable by your web server.
If permissions are set correctly:

    chmod -R 775 app/storage

Should work, if not try

    chmod -R 777 app/storage

-----

Navigate to your Laravel 4 website and try to login with the default credentials:

	email : test@test.com
	password : test

Create a new user at /account/register

### License

This is open-sourced software license under the [MIT license](http://opensource.org/licenses/MIT)

For any issues, feel free to drop an email to opencubicles@gmail.com
