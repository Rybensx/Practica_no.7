create table estudiantes (
    alumno_id serial not null,
    primer_nombre varchar(50) not null,
    segundo_nombre varchar(50),
    primer_apellido varchar(50) not null,
    segundo_apellido varchar(50),
    alumno_nacimiento date not null,
    alumno_tel INTEGER not null,
    alumno_email VARCHAR(100),
    primary key (alumno_id)
)
