CREATE DATABASE Redlock;
USE Redlock;

CREATE TABLE users (
  ID INT PRIMARY KEY NOT NULL,
  Nama VARCHAR(100) NOT NULL,
  Alamat VARCHAR(100) NOT NULL,
  Jabatan VARCHAR(100) NOT NULL
);

INSERT INTO users VALUES
(1, "Stephan", "Jakarta", "Mahasiswa"),
(2, "Chandra", "Jakarta", "Mahasiswa"),
(3, "Aloy", "Bali", "Mahasiswa");
