CREATE DATABASE print_portal;
USE print_portal;
CREATE TABLE users(id INT AUTO_INCREMENT PRIMARY KEY,mobile VARCHAR(10),password VARCHAR(255));
CREATE TABLE cards(id INT AUTO_INCREMENT PRIMARY KEY,user_id INT,ration_no VARCHAR(50),
holder_hindi VARCHAR(100),holder_eng VARCHAR(100),district VARCHAR(50),pdf_file VARCHAR(255));