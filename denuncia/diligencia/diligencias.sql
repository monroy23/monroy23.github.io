-- Crear la base de datos
CREATE DATABASE acta_diligencia;

-- Seleccionar la base de datos
USE acta_diligencia;

-- Crear la tabla
CREATE TABLE diligencias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    hora_final VARCHAR(10),
    dia_final INT,
    mes_final VARCHAR(20),
    anio_final INT,
    fojas_final INT,
    nombre_final VARCHAR(255),
    nombre_inspector VARCHAR(255),
    nombre_visitado VARCHAR(255),
    nombre_testigo1 VARCHAR(255),
    nombre_testigo2 VARCHAR(255),
    opcion1 BOOLEAN,
    opcion2 BOOLEAN,
    opcion3 BOOLEAN,
    comentarios TEXT
);
