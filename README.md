
A php mysqi mvc converted from pdo to mysqli 


Create a simple mysql database

CREATE DATABASE `mvc`;

CREATE TABLE `post`(
            `id`int(2) not null ,
            `author` varchar(60) not null,
            `content` text(500) not null,
             PRIMARY KEY(`id`)
)ENGINE = InnoDB AUTO_INCREMENT = 1;


