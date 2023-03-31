create database miniproyect

create table usuario(
	id serial,
	usuario varchar(50) not null,
	nombre varchar(50) not null,
	apellido varchar(50),
	fecha date,
	email varchar(50) not null,
	foto bytea,
	contraseña varchar(50) not null,
	rol varchar(50) not null
)

drop table usuario

INSERT INTO usuario (usuario, nombre, apellido, fecha,email,contraseña,rol)
values('cf','andrews','fernandez','2001/1/2','andresluis2011@gmail.com','123','admin');

select * from usuario
