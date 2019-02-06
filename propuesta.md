% LibrarYii
% José María Gallego Martel
% Curso 2018/19

# Descripción general del proyecto

La aplicación permitirá a un usuario poder informarse sobre cualquier libro o autor que esté en la base de datos. Podrá comentar sobre el libre, comentar un comentario, valorar un libro, ...

## Funcionalidad principal de la aplicación

La aplicación básicamente se centra en poder informar a un lector (usuario) sobre un determinado ejemplar y/o autor, podrá acceder a toda la información posible de un libro, comentar que le ha parecido tras leerlo, valorarlo, comentar otro comentario de otro lector, ... Con respecto a los autores, tan solo podremos acceder a su información. Los usuarios normales, no podrán insertar, eliminar, modificar ejemplares y autores, ya que podrían generar malas acciones, estas opciones se les otorgará a los usuarios administradores, que serán los usuarios con mas privilegios sobre la aplicación.

## Objetivos generales

* Gestionar el registro y logueo de usuarios.
* Gestionar la insercción, modificación y borrado de libros y autores por un usuario 'admin'.
* Gestionar los comentarios de cualquier usuario.
* Gestionar las valoraciones de los usuarios.
* Un administrador podrá modificar los permisos de un usuario que no sea 'admin'.
* Gestionar la subida de archivos como por ejemplo el avatar de un usuario.

# Elemento de innovación

Amazon S3 o Amazon Simple Storage Service, como servicio de almacenamiento y protección de datos.

Control de Acceso Basado en Roles (RBAC) (No es seguro que lo implemente).
