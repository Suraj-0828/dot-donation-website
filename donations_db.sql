-- Create database (if not already exists)
CREATE DATABASE IF NOT EXISTS donations_db;
USE donations_db;

-- Create table
CREATE TABLE IF NOT EXISTS donations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phoneno VARCHAR(20) NOT NULL,
    city VARCHAR(100) NOT NULL,
    donation VARCHAR(20) NOT NULL,
    panno VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
