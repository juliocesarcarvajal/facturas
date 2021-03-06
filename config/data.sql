CREATE TABLE user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
);

CREATE TABLE servicios (
  id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(64) NOT NULL,
  valor FLOAT (9,2),
  estrato INTEGER NOT NULL
);

CREATE TABLE clientes (
  id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nombres VARCHAR(64) NOT NULL,
  apellidos VARCHAR (64) NOT NULL,
  cedula VARCHAR(32) NOT NULL,
  telefono VARCHAR(32) NOT NULL,
  direccion VARCHAR (32) NOT NULL,
  sexo VARCHAR(16) NOT NULL,
  email VARCHAR(128) NOT NULL,
  UNIQUE (cedula)
);

CREATE TABLE facturas (
  id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
  servicio_id INTEGER NOT NULL,
  cliente_id INTEGER NOT NULL,
  tiempo FLOAT (5,2),
  unidad_medida VARCHAR (10),
  FOREIGN KEY (servicio_id) REFERENCES servicios(id) ON DELETE CASCADE,
  FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON DELETE CASCADE
);

CREATE TABLE consolidados (
  id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  cliente_id INTEGER NOT NULL,
  cargo_basico FLOAT (9,2) NOT NULL,
  cargo_variable FLOAT (9,2),
  estrato INTEGER NOT NULL,
  numero_horas INTEGER,
  valor_hora FLOAT (9,2),
  sub_total_horas FLOAT (9,2),
  numero_minutos INTEGER,
  valor_minuto FLOAT (9,2),
  sub_total_minutos FLOAT (9,2),
  numero_kb INTEGER,
  valor_kb FLOAT (9,2),
  sub_total_kb FLOAT (9,2),
  total FLOAT (9,2),
  FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON DELETE CASCADE
);

ALTER TABLE clientes ADD estrato INTEGER NOT NULL AFTER email;

INSERT INTO `user` VALUES (1,'admin','4aae984230416ba76f98be2fd11e1aa71d90630a','julio.carvajal@outlook.com');
