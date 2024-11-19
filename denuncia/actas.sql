CREATE TABLE actas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fechaInspeccion DATE,
    numeroActa VARCHAR(50),
    expedienteAdministrativo VARCHAR(50),
    clausura VARCHAR(20),
    tipoContaminante VARCHAR(50),
    comentariosClausula TEXT,
    tipoSuspension VARCHAR(20),
    suspension VARCHAR(20),
    otrasActividades VARCHAR(100),
    comentariosSuspension TEXT,
    aseguramientoPrecautorio VARCHAR(50),
    comentariosAseguramiento TEXT,
    neutralizacion VARCHAR(50),
    comentariosNeutralizacion TEXT,
    comentariosGenerales TEXT
);
