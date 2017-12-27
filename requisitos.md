
# Catálogo de requisitos

| **R01**     | **Alta de usuario**           |
| --------------: | :------------------- |
| **Descripción** | Formulario de registro para darse de alta como usuario. El nombre de usuario debe ser único y el email también para poder llevarse a cabo.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R02**     | **Baja de usuario**           |
| --------------: | :------------------- |
| **Descripción** | Formulario simple que permite eliminar una cuenta de usuario. El usuario debe estar dentro de la sesión y verificar contraseña.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R03**     | **Visualizar Perfil de usuario**           |
| --------------: | :------------------- |
| **Descripción** | Muestra el perfil del usuario y los datos relacionados a este             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R04**     | **Modificar Perfil Usuario**           |
| --------------: | :------------------- |
| **Descripción** | Permite cambiar los datos personales y la imagen de usuario             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R05**     | **Confirmar cuenta email**           |
| --------------: | :------------------- |
| **Descripción** | Cuando un usuario es dado de alta podrá acceder a la aplicación pero no compartir contenido ni comentarios hasta verificar el email introducido.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R06**     | **Iniciar Sesión de usuario**           |
| --------------: | :------------------- |
| **Descripción** | Formulario donde introducir el usuario y la contraseña para acceder a la aplicación.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R07**     | **Cerrar Sesión de usuario**           |
| --------------: | :------------------- |
| **Descripción** | Permite cerrar una sesión abierta en el navegador actual. Automáticamente se volverá al sitio principal.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R08**     | **Check para recordar sesión activa**           |
| --------------: | :------------------- |
| **Descripción** | Permite marcar una casilla en la misma ventana de login para recordar la sesión durante 30 días en el navegador. A los 30 días expirará la sesión y se deberá volver a iniciar.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R09**     | **Restablecer contraseña por email**           |
| --------------: | :------------------- |
| **Descripción** | Añadir opción por si se olvida la contraseña que permita recuperarla a través de un correo.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R10**     | **Confirmar Baja de usuario por email**           |
| --------------: | :------------------- |
| **Descripción** | Se enviará un correo de confirmación para autenticar al usuario además de haber pedido con anterioridad la contraseña.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R11**     | **Avatar de usuario**           |
| --------------: | :------------------- |
| **Descripción** | Cada usuario puede tener un avatar, en caso de no ser seleccionado se otorga el que existe por defecto.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R12**     | **Cambiar contraseña de usuario**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R13**     | **Bloquear acceso a un usuario**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R14**     | **Bloquear acceso a una IP**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R15**     | **Mostrar torrent totales de un usuario al ver su perfil**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R16**     | **Cuando un usuario es borrado recibe un correo**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R17**     | **Crear Roles de usuarios**           |
| --------------: | :------------------- |
| **Descripción** | Crear distintos roles con permisos diferentes para cada usuario: - nuevo → Cuenta recién creada, solo puede rellenar su perfil. - novato → Cuenta creada recientemente pero ha verificado su email. - geekv1 → Ha publicado 10 torrents - geekv2 → Ha publicado 50 torrents - geekv3 → Ha publicado 100 torrents - especial → Designado manualmente por el administrador para colaborar en la administración o moderación del sitio.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R18**     | **Crear Rol administrador**           |
| --------------: | :------------------- |
| **Descripción** | El rol administrador designado al usuario “master” será quien tendrá los máximos permisos de administración del sitio y podrá efectuar cualquier operación en cualquier momento.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R19**     | **Crear categorías de torrents**           |
| --------------: | :------------------- |
| **Descripción** | Los torrents tendrán que pertenecer obligatoriamente a una de estas categorías preestablecidas.  Los usuarios no podrán crear más categorías. Las categorías son las siguientes: - Máquinas Virtuales - Libros             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R20**     | **Agregar torrent**           |
| --------------: | :------------------- |
| **Descripción** | Formulario que solicita los datos básicos del torrent y subirlo. Es obligatorio una categoría de torrent y una descripción. En el caso de que el torrent sea idéntico a otro existente en la BD se denegará compartirlo. Se desea conocer: - Nombre - Descripción corta - Descripción larga - Imagen - Quien lo sube - Categoría - Fecha de creación - Tamaño - Compresión - Contraseña (Se desaconseja usar) - Licencia             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R21**     | **Generar suma de comprobación al torrent**           |
| --------------: | :------------------- |
| **Descripción** | Auto generar una suma de comprobación al torrent subido. Este dato también será almacenado. Se mostrará cuando se visualice el torrent.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R22**     | **Añadir imagen a Torrent**           |
| --------------: | :------------------- |
| **Descripción** | Permite subir una imagen para relacionarla con el torrent. Recomendado 300x300px proporciones 1:1 y no superar 500KB             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R23**     | **Visualizar Torrent**           |
| --------------: | :------------------- |
| **Descripción** | Antes de ser descargado abrir una página dedicada al torrent mostrando información completa sobre este. No podrá eliminarse ni modificarse.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R24**     | **Reportar Torrent **           |
| --------------: | :------------------- |
| **Descripción** | Reportar torrent con uso indebido llevando a un formulario de envío para describir por qué cree que no es correcto.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R25**     | **Modificar Torrent**           |
| --------------: | :------------------- |
| **Descripción** | Solo el creador y los administradores pueden modificar directamente un torrent. El resto de usuarios puede, a través de un formulario, solicitar una modificación que llegará a un administrador.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R26**     | **Sistema de puntuación de torrents**           |
| --------------: | :------------------- |
| **Descripción** | Se podrá puntuar los torrents en una escala 0-10. Mostrará la media obtenida junto al torrent.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R27**     | **Busquedas de torrents**           |
| --------------: | :------------------- |
| **Descripción** | Búsqueda paginada de torrents por categoría y nombre.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R28**     | **Mostrar veces que se ha pulsado descargar un torrent**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R29**     | **Descargar Torrent**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R30**     | **Copiar enlace Magnet al portapapeles**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R31**     | **Almacenar cantidad de semillas**           |
| --------------: | :------------------- |
| **Descripción** | Se almacena la cantidad de usuarios que comparten el recurso torrent.  Para actualizar este valor primero comprobará que lleva más de un día desde la última comprobación, como esto valores estarán guardados (ultima comprobación de seed y cantidad de seed) en la misma tabla de torrents no genera esfuerzo extra.  La comprobación de semillas se llevará a cabo cuando un usuario acceda a visualizar el torrent para su descarga, de forma que no se hará constantemente ni tampoco sobre torrents que nadie use.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R32**     | **Reportar torrent caído.**           |
| --------------: | :------------------- |
| **Descripción** | El reporte llegará a los administradores y moderadores. Además también llegará al usuario que subió en un principio el torrent.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R33**     | **Crear un comentario**           |
| --------------: | :------------------- |
| **Descripción** | En un torrent se puede generar un comentario sobre el mismo, quedando el más reciente al principio.  Además será paginado en 10 comentario por cada página.             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R34**     | **Modificar Comentario**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R35**     | **Eliminar Comentario**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R36**     | **Reportar Comentario**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R37**     | **Votar Positivo un comentario**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R38**     | **Votar Negativo un comentario**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R39**     | **Visualizar comentarios asociados a un torrent**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R40**     | **Ordenar comentarios**           |
| --------------: | :------------------- |
| **Descripción** | Permite ordenar comentarios por: - Fecha - Usuarios - Importancia según votos             |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R41**     | **Los comentarios no pueden superar los 300 caracteres**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R42**     | **Solo se permite 1 comentario cada 5 minutos**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R43**     | **Validar HTML5**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R44**     | **Validar CSS3**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R45**     | **Validar modularidad**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R46**     | **Validar Accesibilidad**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R47**     | **Validar Formularios desde Servidor**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R48**     | **Validar Formularios desde Cliente**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R49**     | **Utilizar AJAX**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R50**     | **Utilizar jQuery**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R51**     | **Visualizar maquetación en distintos navegadores web**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R52**     | **Visualizar diseño en distintos navegadores web**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R53**     | **Desplegar Aplicación en local**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R54**     | **Desplegar la aplicación en cloud**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R55**     | **Mostrar en un lateral torrents mejor valorados**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R56**     | **Mostrar últimos comentarios en lateral**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R57**     | **Registrar accesos en BD**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R58**     | **Estadísticas Cantidad de descargas totales**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R59**     | **Estadísticas Cantidad de usuarios totales**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |


| **R60**     | **Estadísticas Cantidad de torrents totales**           |
| --------------: | :------------------- |
| **Descripción** |              |
| **Prioridad**   |            |
| **Tipo**        |                 |
| **Complejidad** |          |
| **Entrega**     |              |



## Cuadro resumen

| **Requisito** | **Prioridad** | **Tipo** | **Complejidad** | **Entrega** |
| :------------ | :-----------: | :------: | :-------------: | :---------: |
| (**R01**) Alta de usuario |  |  |  |  |
| (**R02**) Baja de usuario |  |  |  |  |
| (**R03**) Visualizar Perfil de usuario |  |  |  |  |
| (**R04**) Modificar Perfil Usuario |  |  |  |  |
| (**R05**) Confirmar cuenta email |  |  |  |  |
| (**R06**) Iniciar Sesión de usuario |  |  |  |  |
| (**R07**) Cerrar Sesión de usuario |  |  |  |  |
| (**R08**) Check para recordar sesión activa |  |  |  |  |
| (**R09**) Restablecer contraseña por email |  |  |  |  |
| (**R10**) Confirmar Baja de usuario por email |  |  |  |  |
| (**R11**) Avatar de usuario |  |  |  |  |
| (**R12**) Cambiar contraseña de usuario |  |  |  |  |
| (**R13**) Bloquear acceso a un usuario |  |  |  |  |
| (**R14**) Bloquear acceso a una IP |  |  |  |  |
| (**R15**) Mostrar torrent totales de un usuario al ver su perfil |  |  |  |  |
| (**R16**) Cuando un usuario es borrado recibe un correo |  |  |  |  |
| (**R17**) Crear Roles de usuarios |  |  |  |  |
| (**R18**) Crear Rol administrador |  |  |  |  |
| (**R19**) Crear categorías de torrents |  |  |  |  |
| (**R20**) Agregar torrent |  |  |  |  |
| (**R21**) Generar suma de comprobación al torrent |  |  |  |  |
| (**R22**) Añadir imagen a Torrent |  |  |  |  |
| (**R23**) Visualizar Torrent |  |  |  |  |
| (**R24**) Reportar Torrent  |  |  |  |  |
| (**R25**) Modificar Torrent |  |  |  |  |
| (**R26**) Sistema de puntuación de torrents |  |  |  |  |
| (**R27**) Busquedas de torrents |  |  |  |  |
| (**R28**) Mostrar veces que se ha pulsado descargar un torrent |  |  |  |  |
| (**R29**) Descargar Torrent |  |  |  |  |
| (**R30**) Copiar enlace Magnet al portapapeles |  |  |  |  |
| (**R31**) Almacenar cantidad de semillas |  |  |  |  |
| (**R32**) Reportar torrent caído. |  |  |  |  |
| (**R33**) Crear un comentario |  |  |  |  |
| (**R34**) Modificar Comentario |  |  |  |  |
| (**R35**) Eliminar Comentario |  |  |  |  |
| (**R36**) Reportar Comentario |  |  |  |  |
| (**R37**) Votar Positivo un comentario |  |  |  |  |
| (**R38**) Votar Negativo un comentario |  |  |  |  |
| (**R39**) Visualizar comentarios asociados a un torrent |  |  |  |  |
| (**R40**) Ordenar comentarios |  |  |  |  |
| (**R41**) Los comentarios no pueden superar los 300 caracteres |  |  |  |  |
| (**R42**) Solo se permite 1 comentario cada 5 minutos |  |  |  |  |
| (**R43**) Validar HTML5 |  |  |  |  |
| (**R44**) Validar CSS3 |  |  |  |  |
| (**R45**) Validar modularidad |  |  |  |  |
| (**R46**) Validar Accesibilidad |  |  |  |  |
| (**R47**) Validar Formularios desde Servidor |  |  |  |  |
| (**R48**) Validar Formularios desde Cliente |  |  |  |  |
| (**R49**) Utilizar AJAX |  |  |  |  |
| (**R50**) Utilizar jQuery |  |  |  |  |
| (**R51**) Visualizar maquetación en distintos navegadores web |  |  |  |  |
| (**R52**) Visualizar diseño en distintos navegadores web |  |  |  |  |
| (**R53**) Desplegar Aplicación en local |  |  |  |  |
| (**R54**) Desplegar la aplicación en cloud |  |  |  |  |
| (**R55**) Mostrar en un lateral torrents mejor valorados |  |  |  |  |
| (**R56**) Mostrar últimos comentarios en lateral |  |  |  |  |
| (**R57**) Registrar accesos en BD |  |  |  |  |
| (**R58**) Estadísticas Cantidad de descargas totales |  |  |  |  |
| (**R59**) Estadísticas Cantidad de usuarios totales |  |  |  |  |
| (**R60**) Estadísticas Cantidad de torrents totales |  |  |  |  |
