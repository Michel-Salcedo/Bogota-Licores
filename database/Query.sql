create database bogota_licores;
use bogota_licores;

 create table usuario 
 (
 id_usuario varchar(15) not null,
 fecha_nacimiento date,
 nombre varchar(25) not null,
 apellido varchar(25) not null,
 email varchar(40) unique,
 contrasena varchar(15) not null,
 telefono varchar(7) null,
 celular varchar(10) not null,
 tipo_documento int(1) not null,
 rol int(1) not null
);

create table tipo_documento
(
id_documento int(1) not null,
nombre_documento varchar(25) not null,
primary key (id_documento)
);

create table localidad 
(
id_localidad int(2) not null,
nombre_localidad varchar(25) not null,
primary key (id_localidad)
);

create table rol
(
id_rol int(1) not null,
nombre_rol varchar(25) not null,
primary key (id_rol)
);

create table direcciones
(
id_direccion int(2) not null,
localidad int(2) not null,
direccion varchar(50) not null,
codigo_postal int(11) not null,
usuario_id varchar(15) not null,
tipo_documento_Id int(1) not null,
primary key (id_direccion)
);

create table pedido
(
id_pedido int not null auto_increment,
tipo_documento_id int(1) not null,
usuario_id varchar(15) not null,
producto_id int not null,
cantidad int(2) not null,
tipo_pago_id int(1) not null,
fecha date not null,
primary key (id_pedido)
);

create table producto
(
id_producto int not null auto_increment,
nombre_producto varchar(30) not null,
imagen_producto blob null,
contenido varchar(3) not null,
volumen varchar(3) not null,
precio float not null,
categoria_Id int(1) not null,
primary key (id_producto)
);

create table categoria 
(
id_categoria int(1) not null,
nombre_categoria varchar(20) not null,
primary key (id_categoria)
); 

create table envio
(
id_envio int not null auto_increment,
fecha_envio date not null,
hora time not null,
pedido_id int not null,
direccion_envio int(2) not null,
primary key (id_envio)
); 

create table tipo_pago
(
id_tipo_pago int(1) not null,
nombre_tipo_pago varchar(30) not null,
primary key (id_tipo_pago)
);

create table tarjeta
(
tarjeta_id int(1) not null auto_increment,
tipo_pago_id int(1) not null,
tipo_tarjeta int(1) not null,
nombre_titular varchar(25) not null,
apellido_titular varchar(25) not null,
numero_tarjeta varchar(25) not null,
fecha_vencimiento varchar(25) not null,
codigo_seguridad int null,
primary key (tarjeta_id)
);

create table tipo_tarjeta 
(
id_tarjeta int(1) not null,
nombre_tarjeta varchar(25) not null,
primary key (id_tarjeta)
);

create table cuenta
(
cuenta_id int(1) not null auto_increment,
tipo_pago_id int(1) not null,
nombre_banco int(1) not null,
numero_cuenta varchar(25) not null,
tipo_cuenta int(1) not null,
nombre_titular_cuenta varchar(25) not null,
apellido_titular_cuenta varchar(25) not null,
cedula_de_ciudadania_titular varchar(15) not null,
primary key (cuenta_id)
);

create table tipo_cuenta
(
id_cuenta int(1) not null,
nombre_cuenta varchar(25) not null,
primary key (id_cuenta)
);

create table banco
(
id_banco int(1) not null,
banco_nombre varchar(25) not null,
primary key (id_banco)
);

alter table usuario 
add constraint foreign key (tipo_documento) references tipo_documento (id_documento),
add constraint foreign key (rol) references rol (id_rol),
add primary key (id_usuario,tipo_documento);

alter table direcciones
add constraint foreign key (usuario_id,tipo_documento_id) references usuario (id_usuario,tipo_documento),
add constraint foreign key (localidad) references localidad (id_localidad);

alter table pedido
add constraint foreign key (usuario_id,tipo_documento_id) references usuario (id_usuario,tipo_Documento),
add constraint foreign key (producto_id) references producto (id_producto),
add constraint foreign key (tipo_pago_id) references tipo_pago (id_tipo_pago);

alter table producto
add constraint foreign key (categoria_Id) references categoria (id_categoria);

alter table envio
add constraint foreign key (pedido_id) references pedido (id_pedido),
add constraint foreign key (direccion_envio) references direcciones (id_direccion);

alter table tarjeta 
add constraint foreign key (tipo_pago_id) references tipo_pago (id_tipo_pago),
add constraint foreign key (tipo_tarjeta) references tipo_tarjeta (id_tarjeta);

alter table cuenta
add constraint foreign key (tipo_pago_id) references tipo_pago (id_tipo_pago),
add constraint foreign key (tipo_cuenta) references tipo_cuenta (id_cuenta),
add constraint foreign key (nombre_banco) references banco (id_banco);