CREATE DATABASE db_absensiGPS;

USE db_absensiGPS;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(100) NOT NULL,
  nama VARCHAR(100),
  role ENUM('admin','mahasiswa') DEFAULT 'mahasiswa'
);

CREATE TABLE absensi (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  tanggal DATE,
  jam TIME,
  lokasi VARCHAR(255),
  status ENUM('hadir','tidak') DEFAULT 'hadir',
  FOREIGN KEY (user_id) REFERENCES users(id)
);
