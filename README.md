# ToDo Demo Application

## Create Your Application
Follow documentation to install composer and laravel and then create a new application.  In this case 
it is called toto_laravel.

Make note of the directory path where the application is located. Below, in the Apache configuration, you can see that
mine is located at:

```
/home/scott/Code/GenevaCode/laravel/todo_demo
```

### Configure Apache and Hosts file
Using instructions for your OS, create a virtual host file that looks like the following where you will 

```
<VirtualHost *:80>
    # Your email address
    ServerAdmin youremailaddress@maildomain.com
    
    # URL to the local application
    ServerName todo.dev.com
    
    # Directory where the index.html exists for the todo Laravel application
    DocumentRoot /home/scott/Code/GenevaCode/laravel/todo_demo/public

    # Error logging locations (platform dependent)
    ErrorLog ${APACHE_LOG_DIR}/todo_laravel-error.log
    CustomLog ${APACHE_LOG_DIR}/todo_laravel-access.log combined

    # Set up directory permissions for the application
    <Directory /home/scott/Code/GenevaCode/laravel/todo_demo/public>
	    Options Indexes FollowSymLinks
	    AllowOverride All
	    Require all granted
    </Directory>

</VirtualHost>
```
Restart the Apache server and navigate to your URL path

### Configure Hosts

Add this to the /etc/hosts file (or windows equivalent) and then ping that url to ensure it is resolving

``` 
127.0.0.1   todo.dev.com
```
### Configure the .env file
#### Database
Enter the appropriate information for the connection to your local database

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo_demo
DB_USERNAME=<your username>
DB_PASSWORD=<your password>
```
#### Other Settings
Set these to file for now.  You can change them later if your implementation wants to do it differently

```bash
SESSION_DRIVER=file
CACHE_STORE=file
```

### Test Installation
At this point, hving your browser go to http://todo.dev.com should give you the default Laravel home page.

## Authentication and Registration
You can install Fortify to handle authentication and registration functions. More details here:
https://laravel.com/framework/docs/fortify

```
composer require laravel/fortify
php artisan fortify:install
php artisan migrate
```


## Blade Setup
Use the textbook, Laravel documentation and CSS library documentation to create your UI implementation in the 
Blade template methodology

## Database Setup - Migrations and Seeding
Database access is configured in your .env file.  You provided the pertinent connection parameters earlier.

### Migrations
In the database directory, the migrations subdirectory contains files that will build or alter tables. You need 
to look through them and learn what they are doing. To create a migration file you would execute a command something
like this:

```php
php artisan make:migration create_todos_table
```
If you follow the naming conventions, this will create a table called todos. See the create 
todos table file for comments on the code that does the work. 

### Seeders
Once the tables are created, you can seed the tables with data when appropriate.  If you have defined options in
a table (a select list, for example), you can populate the table in a consistent manner.

In some cases you can create an array and loop through it to seed the table.  Look at the 
TagSeeder.php file for an example

In other cases, you may need to make individual calls to set data on a row by row basis. This is done in the
TodoSeeder.php file where each todo item is created individually.

If you were given data in a .csv file of JSON file, you could parse the file and programatically build each insert 
statement similar in concept to the TagSeeder.php file









## Agentic Development - Ignore this

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.
