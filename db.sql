CREATE DATABASE auth_lieknins;

USE auth_lieknins;

CREATE TABLE users (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	email VARCHAR(255) NOT NULL,
	PASSWORD VARCHAR(255) NOT NULL
);

INSERT INTO users
(email, password)
VALUES
("beate@ckc.lv", "Parole123");