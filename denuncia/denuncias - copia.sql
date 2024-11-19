CREATE TABLE denuncias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    folio VARCHAR(50),
    fecha DATE,
    estado VARCHAR(50),
    medio VARCHAR(50),
    nombreDenunciante VARCHAR(255),
    domicilioDenunciante VARCHAR(255),
    coloniaDenunciante VARCHAR(255),
    telefonoDenunciante VARCHAR(20),
    anonima BOOLEAN,
    razonSocial VARCHAR(255),
    nombreDenunciado VARCHAR(255),
    domicilioDenunciado VARCHAR(255),
    coloniaDenunciado VARCHAR(255),
    telefonoDenunciado VARCHAR(20),
    entreCalles VARCHAR(255),
    infracciones TEXT
);
