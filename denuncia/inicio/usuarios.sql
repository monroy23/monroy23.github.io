CREATE DATABASE usuarios;

USE sistema_usuarios;

CREATE TABLE usuarios (    
   `id`  INT AUTO_INCREMENT PRIMARY KEY,
   `nombre`  VARCHAR(50) NOT NULL,
   `email`  VARCHAR(50) NOT NULL UNIQUE,
   `password` VARCHAR(255) NOT NULL,
   `fecha_registro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
