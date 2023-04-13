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