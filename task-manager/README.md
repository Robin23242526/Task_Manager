
Simple Task Manager web app with PHP and MySQL.
## Technologies Used
1. Core PHP Programming Language (Procedural Programming)
2. MySQL Database
3. HTML
4. CSS

## How to Download and Run on your PC?

### Pre-Requisites:

1. Download and Install XAMPP

[Click Here to Download](https://www.apachefriends.org/index.html)

2. Install any Text Editor (Sublime Text or Visual Studio Code or Atom or Brackets)

### Installation

1. Download as as Zip or Clone this project
2. Move this project to Root Directory
```
Local Disc C: -> xampp -> htdocs -> 'this project'
```
*Local Disk C is the location where xampp was installed*

3. Open XAMPP Control Panel and Start 'Apache' and 'MySQL'

4. Import Database

a. Open 'phpmyadmin' in your browser
b. Create a Database
c. Import the SQL file provided with this project

5. Make Changes to settings

Go to 'config' folder and Open 'constants.php' file. Then make changes on following constants
```php
<?php 
//Start Session
session_start();

//Create Constants to save Database Credentials
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root'); //Your Database username instead of 'root'
define('DB_PASSWORD', ''); //Your Database Password instead of null/empty
define('DB_NAME', 'task_manager'); //Your Database Name if it's not 'task_manager'

define('SITEURL', 'http://localhost/task-manager/'); //Update the home URL of the project if you have changed port number or it's live on server

?>
```

6. Now, Open the project in your browser. It should run perfectly.

Happy Coding
