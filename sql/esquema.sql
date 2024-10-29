CREATE DATABASE IF NOT EXISTS test;
USE test;
CREATE TABLE usuarios (
    id int NOT NULL AUTO_INCREMENT,
    nombre varchar(255),
    apellidos varchar(255)
);

insert into usuarios ( nombre, apellidos ) values ( "antonio", "ruiz" );
insert into usuarios ( nombre, apellidos ) values ( "javier", "ruiz" );
