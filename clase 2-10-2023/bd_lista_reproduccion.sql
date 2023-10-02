CREATE DATABASE bd_lista_CristianTrinidad;

-- Tabla usuario
CREATE TABLE USUARIO(
    NICKNAME varchar(20),
    NOMBRE_APELLIDO VARCHAR(100) NOT NULL,
    EMAIL VARCHAR(50) NOT NULL,
    PASSWORD VARCHAR(10) NOT NULL,
    PRIMARY KEY(NICKNAME)
);

-- Tabla Genero
CREATE TABLE GENERO(
    ID INT AUTO_INCREMENT,
    DESCRIPCION VARCHAR(100) NOT NULL,
    PRIMARY KEY(ID)
);

-- TABLA CANCION
CREATE TABLE CANCION(
    ID INT AUTO_INCREMENT,
    NOMBRE VARCHAR(100),
    AUTOR VARCHAR(100),
    NICKNAME VARCHAR(20),
    GENERO_ID INT,
    PRIMARY KEY(ID)
);

ALTER TABLE CANCION ADD CONSTRAINT fk_cancion_usuario
FOREIGN KEY(NICKNAME) REFERENCES USUARIO(NICKNAME);

ALTER TABLE CANCION ADD CONSTRAINT fk_cancion_genero
FOREIGN KEY(GENERO_ID) REFERENCES GENERO(ID);

CREATE TABLE LISTA_REPRODUCCION(
    ID INT AUTO_INCREMENT,
    DESCRIPCION VARCHAR(100),
    NICKNAME VARCHAR(20),
    PRIMARY KEY(ID)
);

ALTER TABLE LISTA_REPRODUCCION ADD CONSTRAINT fk_lista_usuario
FOREIGN KEY(NICKNAME) REFERENCES USUARIO(NICKNAME);

-- TABLA LISTA_CANCION
CREATE TABLE LISTA_CANCION(
    LISTA_ID INT,
    CANCION_ID INT
);

ALTER TABLE LISTA_CANCION ADD CONSTRAINT pk_lista_cancion
PRIMARY KEY(LISTA_ID, CANCION_ID);

ALTER TABLE LISTA_CANCION ADD CONSTRAINT fk_listac_listar
FOREIGN KEY(LISTA_ID) REFERENCES LISTA_REPRODUCCION(ID);

ALTER TABLE LISTA_CANCION ADD CONSTRAINT fk_listac_cancion
FOREIGN KEY(CANCION_ID) REFERENCES CANCION(ID);

-- INSERTAR USUARIO
INSERT INTO USUARIO VALUES('moios','Moi Avalos','moios@gmail.com','12345');
INSERT INTO USUARIO VALUES('pepe','Pedro Perez','pepe@gmail.com','12345');

UPDATE USUARIO SET NOMBRE_APELLIDO = 'Moises Avalos'
WHERE NICKNAME LIKE 'moios';

SELECT * FROM USUARIO;
SELECT email FROM USUARIO WHERE NICKNAME LIKE 'moios';

DELETE FROM USUARIO
WHERE NICKNAME = 'pepe';