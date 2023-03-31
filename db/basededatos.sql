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
values('an','andrews','fernandez','2001/1/2','andresluis2011@gmail.com','123','Administrador');

INSERT INTO usuario (usuario, nombre, apellido, fecha,email,contraseña,rol)
values('yo','yordy','castro','2001/8/6','solodeyamari@gmail.com','123','Editor');

INSERT INTO usuario (usuario, nombre, apellido, fecha,email,contraseña,rol)
values('and','andy','castro','2001/1/2','andycastro@gmail.com','123','Administrador_Inventario');

INSERT INTO usuario (usuario, nombre, apellido, fecha,email,contraseña,rol)
values('ja','jason','castro','2001/1/2','jasoncastro@gmail.com','123','Supervisor');

select * from usuario
