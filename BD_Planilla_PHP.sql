DROP database Sistema_Planilla_PHP; 
Create database Sistema_Planilla_PHP; 
Use Sistema_Planilla_PHP; 

Create table Tipo_de_deduccion ( 
Id_tipo_deduccion int not null , 
Nombre_tipo_deduccion varchar (40) not null); 

create table Registro_transaccion_deduccion ( 
Id_transaccion_deduccion int not null auto_increment primary key,
Id_empleado int not null, 
Id_tipo_deduccion int not null, 
Fecha datetime, 
Monto float, 
FOREIGN KEY (Id_tipo_deduccion) REFERENCES Tipo_de_deduccion(Id_tipo_deduccion),  
FOREIGN KEY (Id_empleado) REFERENCES Empleado(Id_empleado)); 

Create table Empleado ( 
Id_empleado int not null auto_increment primary key, 
Cod_empleado varchar (12) not null, 
Cedula_empleado varchar (12) not null, 
Nombre_Empleado varchar (80) not null,
Id_departamento int not null, 
Id_puesto int not null, 
Salario_mensual_empleado varchar (12) not null,
Responsable_area varchar (80) not null,
FOREIGN KEY (Id_puesto) REFERENCES Puesto(Id_puesto),  
FOREIGN KEY (Id_departamento) REFERENCES Departamento(Id_departamento)); 

Create table Departamento ( 
Id_departamento int not null auto_increment primary key, 
Nombre_departamento varchar (200) not null,  
Ubicacion_fisica_departamento varchar (200) not null);

Create table Registro_transaccion ( 
Id_transaccion_ingreso int not null primary key, 
Id_empleado int not null, 
Id_tipo_ingreso int not null, 
Fecha datetime not null, 
Monto float not null, 
FOREIGN KEY (Id_tipo_ingreso) REFERENCES Tipo_de_ingreso(Id_tipo_ingreso), 
FOREIGN KEY (Id_empleado) REFERENCES Empleado(Id_empleado)); 

create table Tipo_de_ingreso ( 
Id_tipo_ingreso int not null auto_increment primary key, 
Nombre_tipo_ingreso varchar (200) not null); 

create table Nivel_Riesgo ( 
Id_nivel_riesgo int not null auto_increment primary key, 
Tipo_riesgo varchar (200) not null); 

Create table Puesto ( 
Id_puesto int not null auto_increment primary key, 
Nombre_puesto varchar (200) not null,
Id_nivel_riesgo int not null, 
Nivel_salario_min varchar (12) not null, 
Nivel_salario_max varchar (12) not null, 
FOREIGN KEY (Id_impuesto) REFERENCES Empleado(Id_impuesto)); 
