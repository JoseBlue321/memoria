create database memoria;
select * from users;

#****************Proyectos*******************
select * from proyectos;
insert into proyectos(id,user_id,resolucion,carrera,departamento,instituto,titulo,descripcion,tipo,investigadores,fecha_inicio,fecha_finalizacion,fuente,palabra_clave,colaboracion,resultado,impacto,estado)
values(1,2,123,'medicina','ciencias funcionales','','Proyecto Remark','Esto es una descripcion','investigacion','','2024-03-02','2024-05-01','','remark','solo','gran impacto','','concluido');

#****************Articulos*******************
select * from articulos;
insert into articulos(id,user_id,autores,titulo,nombre,doi,enlace,citas,vancouver,archivo_articulo)
values(1,1,'','Certificacion Digital','Revista científica V2','','',3,'','articulos/id.pdf');