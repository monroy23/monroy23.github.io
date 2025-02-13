CREATE TABLE denuncias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    folio VARCHAR(20) NOT NULL,
    fecha DATE NOT NULL,
    estado VARCHAR(50) NOT NULL,
    origen VARCHAR(50) NOT NULL,
    nombre_denunciante VARCHAR(100) NOT NULL,
    calle_denunciante VARCHAR(100) NOT NULL,
    numero_denunciante VARCHAR(10) NOT NULL,
    colonia_denunciante VARCHAR(50) NOT NULL,
    telefono_denunciante VARCHAR(15) NOT NULL,
    anonima ENUM('SI', 'NO') NOT NULL,
    nombre_denunciado VARCHAR(100) NOT NULL,
    calle_denunciado VARCHAR(100) NOT NULL,
    numero_denunciado VARCHAR(10) NOT NULL,
    colonia_denunciado VARCHAR(50) NOT NULL,
    telefono_denunciado VARCHAR(15) NOT NULL,
    entre_calles VARCHAR(100) NOT NULL,
    motivo TEXT NOT NULL
);
