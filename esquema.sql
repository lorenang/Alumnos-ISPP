CREATE TABLE estudiantes(
    legajo VARCHAR(10) not null primary key,
    nombre varchar(20) not null,
    apellido varchar(20) not null,
    dni bigint not null,
    cuil bigint not null,
    domicilio varchar(200) not null,
    observaciones varchar(500) not null,
    telefono bigint not null,
    correoelec varchar(200) not null
);
