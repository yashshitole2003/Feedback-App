# Restaurant Review Guestbook

This is a PHP project that allows users to submit reviews for a restaurant via an HTML form. The submitted reviews are stored in a MySQL database table, and all the previous entries can be viewed on a page titled 'guestbook'.

## Features

- Submit reviews for a restaurant using an HTML form.
- Store review entries into a MySQL database table.
- View all the previous entries on a dedicated 'guestbook' page.

## Requirements

- PHP 7.0 or higher
- MySQL database

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/pranavsmoghe/feedback-app.git

2. Configure the database connection settings in the config.php file with your MySQL credentials:

    <?php
    $host = 'your_host';
    $user = 'your_username';
    $password = 'your_password';
    $dbname = 'your_database_name';
    ?>

Place the project files in your PHP web server's document root directory.

Access the application in your web browser: http://localhost/feedback-app/index.php
