create table usuarios(
id bigserial primary key not null,
	usuario varchar(200) not null,
	nombre varchar(200),
	apellido varchar(200),
	email varchar(200),
	fecha date,
	pass  varchar(200) not null,
	rol varchar(200),
	foto bytea,
	
	unique(usuario)
);

drop table usuarios


insert into usuarios (nombre)
values ('andrews')


select * from usuarios


insert into usuarios ( usuario, nombre, apellido, email, fecha,contraseña,rol)
values('an','andrews','fernandez','andrews@gmail.com','3/3/2003','123','admin')
