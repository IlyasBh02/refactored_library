CREATE DATABASE Rrefactored_library ;
USE Refactored_library ;

CREATE TABLE authors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    price DECIMAL(10,2),
    stock INT,
    author_id INT,
    FOREIGN KEY (author_id) REFERENCES authors(id)
);
