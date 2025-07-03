DROP DATABASE IF EXISTS findbook;

CREATE DATABASE findbook;

USE findbook;

CREATE TABLE admins (
  id INT PRIMARY KEY AUTO_INCREMENT,
  lastname VARCHAR(30),
  firstname VARCHAR(30),
  email VARCHAR(50) UNIQUE,
  password VARCHAR(256)
);

CREATE TABLE authors (
  id INT PRIMARY KEY AUTO_INCREMENT,
  full_name VARCHAR(50),
  nationality VARCHAR(30)
);

CREATE TABLE books (
  id INT PRIMARY KEY AUTO_INCREMENT,
  adminId INT,
  authorId INT,
  title VARCHAR(30),
  category VARCHAR(30),
  publication_date INT,
  summary VARCHAR(255),
  FOREIGN KEY (adminId) REFERENCES admins(id),
  FOREIGN KEY (authorId) REFERENCES authors(id)
);

INSERT INTO admins VALUES (NULL, "Wick", "John", "wickjohn@outlook.com", "babayaga");