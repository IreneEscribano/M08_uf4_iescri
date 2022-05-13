DROP DATABASE IF EXISTS infinitol_io;
CREATE DATABASE infinitol_io;

USE infinitol_io;

/* Crear "view" para crear una seleccion general y poder llamarla. */

CREATE TABLE tb_usuaris (
    id_usuari INT PRIMARY KEY AUTO_INCREMENT,
    nom_usuari VARCHAR (100),
    nickname VARCHAR (20),
    passwd VARCHAR (10),
    edat INT,
    pais VARCHAR (50),
    ciutat VARCHAR (100),
    descripcio VARCHAR (1000),
    estat_civil VARCHAR (50),
    ocupacio VARCHAR (100),
    empresa VARCHAR (100),
    compte_bancari VARCHAR (100),
    foto_perfil LONGTEXT,
    tema VARCHAR (10)
);

INSERT INTO tb_usuaris VALUES
(1, "Irene Escribano", "iescri", "1234", 20, "Espanya", "Olesa de Montserrat", "Hola, esta es una descripción de prueba", "Estudiant", "Disseny d'aplicacions web", "IES Daniel Blanxart i Pedrals", null, null, null),
(2, "Esther Díaz", "ediaz", "1234", 20, "Espanya", "Olesa de Montserrat", "Hola, esta es una descripción de prueba bla bla bla bla bla","Estudiant", "Disseny d'aplicacions web", "IES Daniel Blanxart i Pedrals", null, null, null),
(3, "Aitor Monge", "amonge", "1234", 20, "Espanya", "Martorell", null, "Estudiant", "Disseny d'aplicacions web", null, null, null, null);

CREATE TABLE tb_grups (
    id_grup INT PRIMARY KEY AUTO_INCREMENT,
    nom_grup VARCHAR (50),
    assumpte VARCHAR(200)
);



CREATE TABLE tb_artistas (
    id_artista INT PRIMARY KEY AUTO_INCREMENT,
    id_usuari INT,
    FOREIGN KEY (id_usuari) REFERENCES tb_usuaris (id_usuari),
    especialitat VARCHAR (100),
    disponibilitat VARCHAR (100),
    num_seguidors INT,
    sum_seguits INT,
    id_grup INT,
    FOREIGN KEY (id_grup) REFERENCES tb_grups (id_grup)
);

INSERT INTO tb_artistas VALUES
(1, 1, "Informàtica", "Total", 50, 120, null),
(2, 2, "Informàtica", "Parcial", 200, 19, null),
(3, 3, "Escultor", "Parcial", 100, 129, null);


CREATE TABLE tb_missatges (
    id_missatge INT PRIMARY KEY AUTO_INCREMENT,
    id_usuari1 INT,
    FOREIGN KEY (id_usuari1) REFERENCES tb_usuaris (id_usuari),
    id_usuari2 INT,
    FOREIGN KEY (id_usuari2) REFERENCES tb_usuaris (id_usuari),
    data DATE
);
INSERT INTO tb_missatges VALUES
(1, 1, 2, "2022-03-02"),
(2, 2, 3, "2022-05-05");


CREATE TABLE tb_line_missatges(
    id_line_missatge INT PRIMARY KEY AUTO_INCREMENT,
    id_usuari INT,
    FOREIGN KEY (id_missatge) REFERENCES tb_missatges (id_missatge),
    id_missatge INT,
    FOREIGN KEY (id_missatge) REFERENCES tb_missatges (id_missatge),
    missatge LONGTEXT,
    data DATE,
    hora_line_missatge TIME
);
INSERT INTO tb_line_missatges VALUES
(1, 1, 1, "holiii","2022-03-02","19:15:01");

CREATE TABLE tb_pools(
    id_pool INT PRIMARY KEY AUTO_INCREMENT,
    id_artista INT,
    FOREIGN KEY (id_artista) REFERENCES tb_artistas (id_artista),
    nom_pool VARCHAR (20),
    descripcio_pool LONGTEXT,
    recaudacio_estimada INT,
    recaudacio_actual INT,
    adjunt LONGTEXT

);


CREATE TABLE tb_subastas (
    id_subasta INT PRIMARY KEY AUTO_INCREMENT,
    id_artista INT,
    FOREIGN KEY (id_artista) REFERENCES tb_artistas (id_artista),
    nom VARCHAR (100),
    descripcio LONGTEXT,
    data date,
    hora time,
    ubicacio VARCHAR (20),
    pes INT,
    likes INT,
    preu_inicial INT,
    hora_limit time,
    estat VARCHAR (20),
    preu_final INT,
    id_guanyador INT,
    FOREIGN KEY (id_guanyador) REFERENCES tb_usuaris (id_usuari)
);

CREATE TABLE tb_imatges (
    id_imatge INT PRIMARY KEY AUTO_INCREMENT,
    id_artista INT, 
    FOREIGN KEY (id_artista) REFERENCES tb_artistas (id_artista),
    nom VARCHAR (100),
    descripcio LONGTEXT,
    data date,
    hora time,
    ubicacio VARCHAR (20),
    pes INT,
    likes INT,
    comentaris BOOLEAN,
    descarregas BOOLEAN,
    arxivats BOOLEAN,
    num_comentaris INT,
    num_descarregas INT,
    num_arxivats INT,
    adult BOOLEAN,
    resolucio_imatge VARCHAR(100),
    altura_imatge INT,
    amplada_imatge INT,
    origen LONGTEXT
);
INSERT INTO tb_imatges VALUES
(1, 1, "Imatge 1", "Descripció Imatge 1", "2022-03-02", "19:15:01", null, 50, 3, true, true, true, 4, 2, 1, false, "600 × 400px", 600, 400, "https://images.unsplash.com/photo-1448814100339-234df1d4005d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"),
(2, 2, "Imatge 2", "Descripció Imatge 2", "2022-03-02", "19:15:01", null, 50, 3, true, true, true, 20, 2, 1, false, "600 x 400px", 200, 400, "https://www.social.cat/imgMini/750/420/5919"),
(3, 1, "Imatge 3", "Descripció Imatge 3", "2022-08-02", "19:15:01", null, 50, 3, true, true, true, 7, 2, 1, false, "600 x 400px", 600, 400, "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRpVmDd2G6bJytrIWn8dPCmvubB7UNaao-2luQ5UU6JGajwyOXm"),
(4, 2, "Imatge 4", "Descripció Imatge 4", "2022-10-02", "19:15:01", null, 50, 3, true, true, true, 9, 2, 1, false, "1080 x 1620px", 225, 225, "https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTbHAROse8hiEuNhRFlt11DXjccabk_kqejeqIUoPrXiLFddf1I"),
(5, 1, "Imatge 5", "Descripció Imatge 5", "2022-01-02", "19:15:01", null, 50, 3, true, true, true, 10, 2, 1, false, "1080 x 810px", 1080, 810, "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQCXRQ3Ohr9-W0o9BdxJ8RUijE1-JRTKdCWC8dmZzP4GKZw8jVf");

CREATE TABLE tb_videos(
    id_video INT PRIMARY KEY AUTO_INCREMENT,
    id_artista INT, FOREIGN KEY (id_artista) REFERENCES tb_artistas (id_artista),
    nom VARCHAR (100),
    descripcio LONGTEXT,
    data date,
    hora time,
    ubicacio VARCHAR (20),
    pes INT,
    likes INT,
    comentaris BOOLEAN,
    descarregas BOOLEAN,
    arxivats BOOLEAN,
    num_comentaris INT,
    num_descarregas INT,
    num_arxivats INT,
    adult BOOLEAN,
    resolucio_video INT,
    altura_video INT,
    amplada_video INT,
    duracio VARCHAR(20),
    avisos VARCHAR (20),
    origen LONGTEXT
);

INSERT INTO tb_videos VALUES
(1, 1,"Video 1","Descripció Video 1","2022-03-02", "19:15:01", null, 50, 3, true, true, true, 0, 2, 1, false, 1080, 1080, 720, "0:29", null, "https://www.youtube.com/embed/uNCr7NdOJgw"),
(2, 2, "Video 2","Descripció Video 2","2022-03-02", "19:15:01", null, 50, 3, true, true, true, 20, 12, 13, false, 1080, 1080, 720, "01:17:34", null, "https://www.youtube.com/embed/rbuYtrNUxg4");

CREATE TABLE tb_documents (
    id_document INT PRIMARY KEY AUTO_INCREMENT,
    id_artista INT,
    FOREIGN KEY (id_artista) REFERENCES tb_artistas (id_artista),
    nom VARCHAR (100),
    descripcio LONGTEXT,
    data date,
    hora time,
    ubicacio VARCHAR (20),
    pes INT,
    likes INT,
    comentaris BOOLEAN,
    descarregas BOOLEAN,
    arxivats BOOLEAN,
    num_comentaris INT,
    num_descarregas INT,
    num_arxivats INT,
    adult BOOLEAN,
    tipus_document VARCHAR(30),
    paginas INT,
    origen LONGTEXT
);

INSERT INTO tb_documents VALUES
(1, 1, "Pong amb NodeJS", "Realitzem una versió del Pong amb NodeJS.", "2022-03-02", "19:15:01", null, 50, 3, true, true, true, 0, 2, 1, false, "TXT", 1, null),
(2, 2, "Fitxer 2", "Descripció document", "2022-03-02", "19:15:01", null, 50, 3, true, true, true, 0, 2, 1, false, "PDF", 1, null);


CREATE TABLE tb_exes (
    id_exe INT PRIMARY KEY AUTO_INCREMENT,
    id_artista INT,
    FOREIGN KEY (id_artista) REFERENCES tb_artistas (id_artista),
    nom VARCHAR (100),
    descripcio LONGTEXT,
    data date,
    hora time,
    ubicacio VARCHAR (20),
    pes INT,
    likes INT,
    comentaris BOOLEAN,
    descarregas BOOLEAN,
    arxivats BOOLEAN,
    num_comentaris INT,
    num_descarregas INT,
    num_arxivats INT,
    adult BOOLEAN,
    tipus_exe VARCHAR(30),
    num_arxius INT,
    origen LONGTEXT
);
INSERT INTO tb_exes VALUES
(1, 1, "Pong amb NodeJS", "Realitzem una versió del Pong amb NodeJS.", "2022-03-02", "19:15:01", null, 50, 60, true, true, true, 30, 12, 33, false,"nodeJS", 2,null),
(2, 1, "Connecta 4 amb Python", "Realitzem una versió del Connecta 4 amb Python.", "2022-03-01", "17:57:21", null, 190, 84, true, true, true, 200, 40, 191, false, "py", 1,null),
(3, 1, "Dames amb Python", "Realitzem una versió de les Dames amb Python.", "2022-02-24", "10:06:31", null, 592, 60, true, true, true, 645, 95, 103, false, "py",2,null),
(4, 2, "Connecta 4 amb NodeJS", "Realitzem una versió del Connecta 4 amb NodeJS.", "2022-03-01", "00:42:05", null, 280, 4, true, true, true, 120, 14, 87, false,"nodeJS",3,null),
(5, 2, "Dames amb NodeJS", "Realitzem una versió de les Dames amb NodeJS.", "2022-02-15", "15:24:43", null, 910, 21, true, true, true, 478, 215, 115, false,"nodeJS",1,null);

CREATE view todos AS SELECT id_imatge,'i' as tipus,id_artista,nom,descripcio,pes,likes,comentaris,arxivats,num_comentaris,num_descarregas,num_arxivats,adult,data,hora,origen FROM tb_imatges UNION SELECT id_video,'v' as tipus,id_artista,nom,descripcio,pes,likes,comentaris,arxivats,num_comentaris,num_descarregas,num_arxivats,adult,data,hora,origen FROM tb_videos UNION SELECT id_document,'d' as tipus,id_artista,nom,descripcio,pes,likes,comentaris,arxivats,num_comentaris,num_descarregas,num_arxivats,adult,data,hora,origen FROM tb_documents UNION SELECT id_exe,'e' as tipus,id_artista,nom,descripcio,pes,likes,comentaris,arxivats,num_comentaris,num_descarregas,num_arxivats,adult,data,hora,origen FROM tb_exes;

/* PARA EVITAR REPETIDOS "DISTINCT" */