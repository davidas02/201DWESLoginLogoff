use DAW201DBLoginLogoff;
insert into T02_Departamento values
("INF","Departamento de Informatica",null,3500,now()),
("VEN","Departamento de Ventas",null,25000,now()),
("MAR","Departamento de Marketing",null,13657,now()),
("IDE","Departamento de Innovacion y Desarrollo",null,-2350,now()),
("CON","Departamento de Contabilidad",null,44962,now());
insert into T01_Usuario(T01_CodUsuario,T01_Password,T01_DescUsuario,T01_FechaHoraUltimaConexion,T01_NumConexiones,T01_Perfil) values
('admin',sha2(concat('admin','paso'),256),'Administrador',null,0,'administrador'),
('heraclio',sha2(concat('heraclio','paso'),256),'Heraclio Profesor',null,0,'usuario'),
('amor',sha2(concat('amor','paso'),256),'Amor Profesora',null,0,'usuario'),
('antonio',sha2(concat('antonio','paso'),256),'Antonio Profesor',null,0,'usuario'),
('alberto',sha2(concat('alberto','paso'),256),'Alberto Profesor',null,0,'usuario'),
('ricardo',sha2(concat('ricardo','paso'),256),'Ricardo Santiago',null,0,'usuario'),
('otalvaro',sha2(concat('otalvaro','paso'),256),'Alejandro Otalvaro',null,0,'usuario'),
('josue',sha2(concat('josue','paso'),256),'Josué Martínez',null,0,'usuario'),
('luis',sha2(concat('luis','paso'),256),'Luis Perez',null,0,'usuario'),
('manuel',sha2(concat('manuel','paso'),256),'Manuel Martín',null,0,'usuario'),
('david',sha2(concat('david','paso'),256),'David Aparicio',null,0,'usuario')
;
