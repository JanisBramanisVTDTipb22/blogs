CREATE DATABASE blog_janis_bramanis;
USE blog_janis_bramanis;

CREATE TABLE posts (
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
title VARCHAR(255) NOT NULL
);

CREATE TABLE categories (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
description TEXT
);


INSERT INTO categories
(name)
VALUES
("sport"),
("music"),
("food");

ALTER TABLE posts
ADD category_id INT NOT NULL;

ALTER TABLE posts
ADD COLUMN category_id INT AFTER title,
ADD FOREIGN KEY (category_id) REFERENCES categories(id);

UPDATE posts
SET category_id = 1
WHERE id = 1;

UPDATE posts
SET category_id = 3
WHERE id = 2;

SELECT * FROM posts
JOIN categories
ON posts.category_id = categories.id


INSERT INTO posts
(title)
VALUES
("My First Blog Post"),
("My Second Blog Post");



CREATE TABLE users (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(350) NOT NULL, 
password VARCHAR(255) NOT NULL
);
