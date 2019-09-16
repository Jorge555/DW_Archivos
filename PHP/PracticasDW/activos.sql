CREATE TABLE perfiles(
id_perfiles int primary key auto_increment,
    tipo_perfil varchar(45),
    activos varchar(45)


);

CREATE TABLE empleado(
	id_empleado int primary key auto_increment,
	nombre varchar(45),
	direccion varchar(45),
	email varchar(45),
	puesto varchar(45),
	telefono varchar(45),
    id_perfiles int,
    foreign key (id_perfiles) references perfiles(id_perfiles)
);


CREate table usuario(
id_usuario int primary key auto_increment,
    nombre_user varchar(45),
    clave varchar(45),
    id_empleado int,
    
    FOREIGN KEY(id_empleado) REFERENCES empleado(id_empleado)
    

);

CREATE TABLE  roles(
id_roles int primary key auto_increment,
    id_usuario INT,
FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario)
)





create table valores(
id_valores int primary key auto_increment,
    plusvalia varchar(45),
    depresiacion varchar(45)

);

create table tipos_activo(
id_tipoactivo int primary key auto_increment,
    nombre_activo varchar(45),
    tipo varchar(45),
   
    marca varchar(45),
    id_valores int,
    foreign key(id_valores) references valores(id_valores )
);

create table activos_fijo(
id_activofijo int primary key auto_increment,
     descripcion varchar(45),
    estado varchar(45),
id_tipoactivo int,
    foreign key (id_tipoactivo) references tipos_activo(id_tipoactivo)
);

create table producto(
id_producto int primary key auto_increment,
nombre_pro varchar(45),
    descripcion_pro varchar(45),
    precio_compra float,
    precio_venta float,
    marcar varchar(45)
);

create table tipo_producto(
id_tipo_producto int primary key auto_increment,
    estandar varchar(45),
    servicio varchar(45),
    kit varchar(45),
    id_producto int,
    
    foreign key (id_producto) references producto(id_producto)

);



create table empresa(
id_empleado int,
    id_producto  int,
    id_activofijo int,
    foreign key(id_empleado) references empleado(id_empleado),
    foreign key(id_producto)  references producto(id_producto),
    foreign key(id_activofijo) references activos_fijo(id_activofijo)
)
