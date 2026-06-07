# PHP MySQL MVC

A simple PHP MVC application converted from PDO to mysqli.

## Requirements

- PHP >= 7.4
- MySQL
- Composer

## Setup

1. Create the database:

```sql
CREATE DATABASE `php_mvc`;

CREATE TABLE `posts`(
    `id`      int(2) not null auto_increment,
    `author`  varchar(60) not null,
    `content` text(500) not null,
    PRIMARY KEY(`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 1;
```

2. Configure database credentials in `config/database.php`.

3. Install dependencies and generate autoloader:

```
composer install
```

4. Start the development server:

```
php -S localhost:8000 -t public/
```

5. Visit `http://localhost:8000` in your browser.
